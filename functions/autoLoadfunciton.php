<?php

$functionFiles = glob('./functions/*.php');
if (is_array($functionFiles)) {
    
    for ($i=0; $i < count($functionFiles) ; $i++) { 
        if ($functionFiles[$i] !== './functions/autoLoadfunctions.php')
        require_once $functionFiles[$i];
    }
}
