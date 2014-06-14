<?php
class Dispatcher{
	private $path;
	
	function __construct(){
		$this->path=$_SERVER['PATH_INFO'];
	}
	
	function run(){
		$this->path=trim($this->path,'/');
		$paths=explode('/', $this->path);
		
		$control=array_shift($paths);
		$method=array_shift($paths);
		
		if ($control=='') {
			$control='index';
		}
		if ($method=='') {
			$method='index';
		}
		
		$control_file_name=ROOT_PATH.'/controller/'.$control.'.php';
		if (file_exists($control_file_name)) {
			include_once($control_file_name);
			$controller_name=$control.'_Controller';
			if (class_exists($controller_name)){
				$control=new $controller_name();
				if (method_exists($controller_name, $method)) {
						$control->$method();
						return OK_200;
				}
				else return ERROR_401;
			}
			else return ERROR_402;
		}
		else return ERROR_404;
	}
}