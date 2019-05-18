<?php

$server="localhost";
$user="root";
$pass="";
$dbname="svrphp";

$con1=mysqli_connect($server,$user,$pass,$dbname);

// $con2=mysqli_connect($server,$user,$pass);
// mysqli_select_db($con2,$dbname);

if(!$con1)
echo("Failled");



?>
