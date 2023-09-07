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

$cardno =$_POST['cardno'];

$expirydate =$_POST['expirydate'];

$cvv =$_POST['cvv'];

$query = "insert into payment(user,cardno,expirydate,cvv) Values ('$user','$cardno','$expirydate','$cvv') ";

echo "$query";

mysqli_query($con, $query);


header('location:paysuccess.php');

if ($_POST['submit']) {
	$success= "Submit Done";	
}


?>