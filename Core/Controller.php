<?php
class Controller{
	protected $view=null;
	protected $model=null;
	function __construct(){
		$this->view=new View();
	}
	
	function load_model($model_name){
		$model_file_name=ROOT_PATH.'model'.$model_name.'.php';
		require_once($model_file_name);
		$this->model=new $model_name();
	}
}