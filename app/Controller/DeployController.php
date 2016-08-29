<?php
	App::uses('AppController', 'Controller');
	App::uses('Shell', 'Console');
class DeployController extends AppController {

	public function index(){

<<<<<<< HEAD
=======
		exec('php /var/www/html/test/lib/Cake/Console/cake.php DeployShell main /var/www/html/test/app/');
>>>>>>> 5039a1bf6fbc12dff8d27b687af1df50a0ee33bf

         shell_exec('cd /var/www/html/test;git pull origin master');
	var_dump($this->request->data);
  $results = shell_exec('/bin/ls /usr -lsa');
  echo "<pre>$results</pre>";

}





}
?>
