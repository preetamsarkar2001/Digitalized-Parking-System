<?php  

$con = mysqli_connect('localhost','root');


if ($con) {

	echo "Connection successful";
}
else{
	echo "No Connection";
}

mysqli_select_db($con,'test_db');


$user =$_POST['user'];

$email =$_POST['email'];

$message =$_POST['message'];


$query = "insert into feedback(user,email,message) Values ('$user','$email','$message') ";

echo "$query";

mysqli_query($con, $query);


header('location:Paysuccess.php');

if ($_POST['submit']) {
	$success= "Submit Done";	
}


?>