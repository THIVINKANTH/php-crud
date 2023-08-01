<?php 
session_start();

$_SESSION=[];
session_unset();
session_destroy();



// session_destroy();

// unset($_SESSION['name']);
header("location:index.php");

?>