<?php
class View{
	function show($view_file,$data=array()){
		$view_file_name=ROOT_PATH.'/view/'.$view_file.'.php';
		if (!file_exists($view_file_name)) return false;
		
		extract($data);
		include($view_file_name);
		return true;
	}
}