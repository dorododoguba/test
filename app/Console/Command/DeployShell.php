<?php
App::uses('Shell', 'Console');
class DeployShell extends Shell {

	function main(){

		shell_exec('cd /var/www/html/test;git pull origin master');

	}

}