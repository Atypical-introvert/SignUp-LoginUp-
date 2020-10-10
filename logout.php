<?php

session_start();

$_SESSION = array();

session_destroy();


header("location: https://localhost/18BCE0163_PHP_Sessions/login.php");
exit;
?>