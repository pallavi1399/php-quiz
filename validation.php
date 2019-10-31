<?php

session_start(); # create the seeion;

$con = mysqli_connect('localhost','root'); # create connection;

if($con) {
	echo "connect successfully";
}
else {
	echo "not connected";
}

mysqli_select_db($con,'session'); # select database;

$name = $_POST['user']; # store username into any variable;
$pass = $_POST['password']; # store password into any variable;

$q = "select * from signin where name='$name' && password='$pass' "; # fetch data from database;

$result = mysqli_query($con, $q); # fire query to check duplicate data;

$num = mysqli_num_rows($result); # matched the rows with entered value and return number of repeated values;
if ($num == 1) {
	$_SESSION['username'] = $name ; # create global session variable;
	header('location: home.php'); # direct the pg to home pg;
	
}
else {
	header('location: login.php'); # direct the pg to login pg;
}


?>
