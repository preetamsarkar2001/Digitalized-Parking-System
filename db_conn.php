<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$port=3310;

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name, $port);

if (!$conn) {
	echo "Connection failed!";
}