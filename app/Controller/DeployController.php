<?php

class DeployController extends AppController {

	public function index(){

		exec('php /var/www/html/test/lib/Cake/Console/cake.php DeployShell main /var/www/html/test/app/');

	}





}
