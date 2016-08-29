<?php
        App::uses('AppController', 'Controller');

class DeployController extends AppController {

        public function index(){


         shell_exec('cd /var/www/html/test;git pull origin master');
        var_dump($this->request->data);
  $results = shell_exec('/bin/ls /usr -lsa');
  echo "<pre>$results</pre>";

}





}
?>
