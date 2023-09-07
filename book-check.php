<?php  

$con = mysqli_connect("localhost","root","","test_db",3310);

if ($con) {

	echo "Connection successful";
}
else{
	echo "No Connection";
}

mysqli_select_db($con,'test_db');


$date1 =$_POST['date1'];

$time1 =$_POST['time1'];

$time2 =$_POST['time2'];

$vehicalno =$_POST['vehicalno'];

$slot =$_POST['slot'];

$count =$_POST['count'];

$total =$_POST['total'];

$query = "insert into booking(date1,time1,time2,vehicalno,slot,count,total) Values ('$date1','$time1','$time2','$vehicalno','$slot','$count','$total') ";

echo "$query";

mysqli_query($con, $query);


header('location:Payment.php');

if ($_POST['submit']) {
	$success= "Submit Done";	
}


?>