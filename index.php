<?php 
define('ROOT_PATH', str_replace('\\', '/', dirname(__FILE__)));
require ROOT_PATH.'/config.php';//��Ҫ����
require ROOT_PATH.'/core/Dispatcher.php';//�ַ���ģ��
$dpt = new Dispatcher();//ʵ��������ַ���
$return_status = $dpt->run();

echo $return_status;

exit(0);
?>