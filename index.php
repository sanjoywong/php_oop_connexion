<?php

spl_autoload_register(function($className){
    require './classes/'.$className.'.php';
});
require_once './vendor/autoload.php';


date_default_timezone_set('Europe/Paris');

require_once './functions/autoLoadfunciton.php';

require_once './includes/head.php';
require_once './includes/main.php';
require_once './includes/footer.php';

// dump($_SERVER,"var_dump");
// dump($_SERVER['REMOTE_ADDR'],"var_dump");

// $_SESSION['count'] = ($_SESSION['count'] ?? 0)+1;

//print_r($_SESSION);
?>