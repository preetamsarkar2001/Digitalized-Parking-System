<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(images/s6.jpg); background-size: cover; background-position: center;">
     <form action="signup-check.php" method="post">
     	<div style="background-color: black; color: white"><h2>SIGN UP</h2></div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

           <label>Date of Birth</label>
          <?php if (isset($_GET['Dob'])) { ?>
               <input type="date" 
                      name="Dob" 
                      
                      value="<?php echo $_GET['Dob']; ?>"><br>
          <?php }else{ ?>
               <input type="date" 
                      name="Dob" 
                      placeholder="DD / MM / YY"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="email" 
                      name="uname" 
                      placeholder="Email"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
                      name="uname" 
                      placeholder="Email"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="Mainlogin.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>