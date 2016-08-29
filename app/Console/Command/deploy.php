<?php
App::uses('Shell', 'Console');
class deploy extends Shell {


	shell_exec('cd /var/www/html/test;git pull origin master');
    }
}



