<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">


	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="homecss/style.css">
  <link rel="stylesheet" type="text/css" href="homecss/footerBtn.css">
  <link rel="stylesheet" type="text/css" href="homecss/imp2.css">
  <link rel="stylesheet" type="text/css" href="homecss/index2.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    

</head>
<body style="background-image: url(images/s6.jpg);background-size: cover; background-position: center;">

	<span id="sucessMessage"> </span>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" id="E-park" href="#"><img src="images/logo.webp" alt="Los Angeles" width="100" height="50" style="margin-left: 310%" >E-Parking</a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    

      <li class="nav-item" style="margin-left: 1000%;">
       <a class="nav-link" href="logout.php">       
        <button class="btn btn1" style="color: white; background: red;"><span class="fa fa-user">LogOut</span></button>
       </a>   
      </li> 
      

   
  </div>
</nav>
</ul>
</div>


<div style="margin-top: 5%; background-color: white;">
     <h1 style="color: black;">Hello, <?php echo $_SESSION['name']; ?></h1>

</div>     
 
<div style="margin-top: 5%;">
<a href="Booking.php"><button class="btn btn-primary">BOOK YOUR SLOT</button></a>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>

<?php 
}else{
     header("Location: Mainlogin.php");
     exit();
}
 ?>