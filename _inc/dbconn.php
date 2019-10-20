<?php
$serverName="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bnak_db";
$con = mysqli_connect($serverName,$dbusername,$dbpassword)/* or die('the website is down for maintainance')*/;
mysqli_select_db($con,$dbname) or die(mysqli_error($con));
?>
