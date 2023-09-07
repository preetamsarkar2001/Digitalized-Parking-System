<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Payment </title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
	<link rel="stylesheet" href="paymentcss/styles.css">
  <link rel="stylesheet" type="text/css" href="paymentcss/style1.css">



  <script type="text/javascript">

   
   
   function srvvm()
   {

        if (document.f1.user.value=="") {
             
             alert("Plz Enter Name");
             document.f1.user.focus();
             return false;

        }

        if (document.f1.cardno.value==""){

          alert("plz Enter your Card Number ");
          document.f1.cardno.focus();
          return false;

        }

        if (document.f1.expirydate.value==""){

          alert("plz Enter your Expiry date ");
          document.f1.expirydate.focus();
          return false;

        }

        if (document.f1.cvv.value==""){

          alert("plz Enter your CVV ");
          document.f1.cvv.focus();
          return false;

        }
        return true;
   }


   


</script>

</head>
<body style="background-image: url(images/s1.jpg);">
	


<div class="wrapper" style="margin-top: 10%;">
  <div class="payment">
    <div class="payment-logo">
      <p>p</p>
    </div>
    
    
    <h2 id="p1">Payment Gateway</h2>
    
    <form action="payment1.php" name="f1" onsubmit="return srvvm()" method="post">
            
            <div class="card space icon-relative">

              <label>Card Holder:</label>
              <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Enter Your Name">
               <i class="fas fa-user"></i>
            </div>

            <div class="card space icon-relative">

              <label>Card Number:</label>
              <input type="text" name="cardno" autocomplete="off" class="form-control" data-mask="0000 0000 0000 0000" placeholder="Card Number">
              <i class="far fa-credit-card"></i>
              
            </div>

            <div class="card-grp space">
              <div class="card-item icon-relative">

             <label class="label">Expiry date:</label>
               <input type="text" name="expirydate" class="form-control" data-mask="00 / 00"  placeholder="00 / 00">
          <i class="far fa-calendar-alt"></i>
              
            </div>

            <div class="card-item icon-relative">

             <label class="label">CVV:</label>
               <input type="text" name="cvv" class="form-control" data-mask="000" placeholder="000">
          <i class="fas fa-lock"></i>
              
            </div>  
            </div>
            <a href="Paysuccess.php">
              <div class="center" style="top: 90%;">
               <button class="btn btn-Primary" style="background-color: #7E4EDD;"> Pay Now </button>
              </div>
            </a>   
   
</div>

</form>

              <a href="Booking.php"> 
              <div class="center1" style="top: 98%;">
               <button class="btn btn-Primary" style="background-color: #7E4EDD;"> Cancel </button></a>
              </div>
            
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</body>
</html>