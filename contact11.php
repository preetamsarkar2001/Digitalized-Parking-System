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

$mobile =$_POST['mobile'];

$comments =$_POST['comments'];

$query = "insert into contact(user,email,mobile,comment) Values ('$user','$email','$mobile','$comments') ";

echo "$query";

mysqli_query($con, $query);


header('location:contact.php');

if ($_POST['submit']) {
	$success= "Submit Done";	
}


?>