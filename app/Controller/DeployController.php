<?php

class DeployController extends AppController {

	public function index(){

	 exec('cd /var/www/html/test;git pull origin master');

	}





}
