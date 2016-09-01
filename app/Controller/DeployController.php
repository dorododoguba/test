<?php
	App::uses('AppController', 'Controller');
	App::uses('Shell', 'Console');
class DeployController extends AppController {

	public function index(){


$cmd = "nohup php /var/www/html/test/lib/Cake/Console/cake.php Deploy main /var/www/html/test/app/";

$ret = exec( $cmd, $output, $ret_val);
var_dump($output);

}





}
?>
