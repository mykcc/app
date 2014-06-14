<?php 
define('ROOT_PATH', str_replace('\\', '/', dirname(__FILE__)));
require ROOT_PATH.'/config.php';//主要设置
require ROOT_PATH.'/core/Dispatcher.php';//分发器模块
$dpt = new Dispatcher();//实例化请求分发器
$return_status = $dpt->run();

echo $return_status;

exit(0);
?>