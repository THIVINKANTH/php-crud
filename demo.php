<?php
session_start();



$_SESSION['name'] = 'sathiz';
$a = 10;

$b = 5;



$a = $a + $b;

$a = array('one','two','three','four','five');

define('NAME','sathiz');


echo NAME;

// foreach($a as $rw)
// {

//     $list[]=$rw;
// }

print_r($a);


?>