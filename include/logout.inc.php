<?php

session_start();
session_destroy();
echo "session detruite";

header('location: ./index.php');

?>