<?php
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
   header('location:login.php');
   die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>ADMIN DASHBOARD PAGE</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/themify-icons.css">
      <link rel="stylesheet" href="css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="css/flag-icon.min.css">
      <link rel="stylesheet" href="css/cs-skin-elastic.css">
      <link rel="stylesheet" href="css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">MENU</li>
                  <?php if($_SESSION['ADMIN_ROLE']!=0){?>
				   <li class="menu-item-has-children dropdown">
                     <a href="mechanicdetails.php"> BOOKING DETAILS </a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="showcontact.php" > WHO WANT TO CONTACT </a>
                  </li>
				
                  
				  <li class="menu-item-has-children dropdown">
                     <a href="showuser.php" > USER DETAILS </a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="showservice.php" > PAYMENT DETAILS </a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="showfeedback.php" > FEEDBACK </a>
                  </li>
				 
				  <?php } ?>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel" >
         <header id="header" class="header"  style="background-color: black;">
            <div class="top-left">
               <div class="navbar-header"  style="background-color: black;">
                  <a class="navbar-brand" href="index.php"><img src="images/logo.webp" alt="Logo" height="50" width="90"></a>
                  
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WELCOME--<span class="fa fa-user">    <?php echo $_SESSION['ADMIN_USERNAME']?></span></a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>LOGOUT</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>