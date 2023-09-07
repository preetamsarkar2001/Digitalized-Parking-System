<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>Search Parking</title>


  <link rel="stylesheet" href="main.css" />

  <link rel="icon" type="image/png" href="img/Capture.png">  



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="homecss/style.css">
  <link rel="stylesheet" type="text/css" href="homecss/footerBtn.css">
  <link rel="stylesheet" type="text/css" href="homecss/imp2.css">
  <link rel="stylesheet" type="text/css" href="homecss/index2.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
  <script type="text/javascript">

   
   
   function slot()
   {

        if (document.f1.date1.value=="") {
             
             alert("Please Enter Date");
             document.f1.date1.focus();
             return false;

        }

        if (document.f1.time1.value==""){

          alert("please Enter time ");
          document.f1.time1.focus();
          return false;

        }

        if (document.f1.time2.value==""){

          alert("please Enter your exit time ");
          document.f1.time2.focus();
          return false;

        }
        if (document.f1.vehicalno.value==""){

          alert("please Enter your Vehicle Number ");
          document.f1.vehicalno.focus();
          return false;

        }

        return true;
   }


  
</script>
  
  
  
  
  
  
  
  
  
  
  
  
</head>

<body>
  
  <span id="sucessMessage"> </span>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" id="E-park" href="#"><img src="images/logo.webp" alt="Los Angeles" width="100" height="50" style="margin-left: -5%" >E-Parking</a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
     



      <li class="nav-item" style="margin-left: 900%;">
       <a class="nav-link" href="logout.php">       
        <button class="btn btn1" style="color: white; background: red;"><span class="fa fa-user">LogOut</span></button>
       </a>   
      </li> 
      

   
  </div>
</nav>
</ul>
</div>

<form action="book-check.php" method="post" name="f1" onsubmit="return slot()">


  <div class="content" style="margin-top: 10%;">
    <label class="title" for="" style="color:white;">Search Vehicle</label>
    <select name="" id="film">
      <option value="40" value="volvo">Two-Wheeler:<span class="price">40Rs.↓</span></option>
      <option value="70" value="saab">Four-Wheeler:<span class="price">70Rs.↓</span></option>
    </select><br>
  
<div>
<label class="p1" style="color:white;">Select a date:</label>
	<input type="date"  name="date1">


  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;


 <label class="p2" style="color:white;">Select a time:</label>
	<input type="time"  name="time1" >
	<label class="p3" style="color:white;">To </label>
	<input type="time"  name="time2">
 &nbsp;
  &nbsp;
  <label class="p1" style="color:white;">Enter Vehical Number</label>
  <input type="text"  name="vehicalno">

</div>
	</div><br>




<div class="cinemaInfo">


    <div class="seat info"></div>
    <big style="font-size:30px;">Free</big>


    <div class="seat info selezionata"></div>
    <big style="font-size:30px;">Selected</big>


    <div class="seat info occupata"></div>
    <big style="font-size:30px;">Booked</big>
  </div>

  <div class="theatre">
    
    <div class="theatreRows" >
      <div class="row" id="1" >
        <div class="rowNumb" id="1"></div>
        <div class="sedia" id="1"></div>
        <div class="sedia" id="2"></div>
        <div class="sedia" id="3"></div>
        <div class="sedia" id="4"></div>
		<div class="sedia" id="5"></div>
        <div class="sedia" id="6"></div>
        <div class="sedia" id="7"></div>
        <div class="sedia" id="8"></div>
        <div class="sedia" id="9"></div>
        <div class="sedia" id="10"></div>
		<div class="sedia" id="11"></div>
        <div class="sedia" id="12"></div>
        <div class="sedia" id="13"></div>
        <div class="sedia" id="14"></div>
		
      </div>
      <div class="row" id="2">
        <div class="rowNumb" id="2"> </div>
        <div class="sedia" id="1"></div>
        <div class="sedia" id="2"></div>
        <div class="sedia" id="3"></div>
        <div class="sedia" id="4"></div>
        <div class="sedia" id="5"></div>
        <div class="sedia" id="6"></div>
        <div class="sedia" id="7"></div>
        <div class="sedia" id="8"></div>
        <div class="sedia" id="9"></div>
        <div class="sedia" id="10"></div>
		<div class="sedia" id="11"></div>
        <div class="sedia" id="12"></div>
        <div class="sedia" id="13"></div>
        <div class="sedia" id="14"></div>
      </div>
      <div class="row" id="3">
        <div class="rowNumb" id="3"></div>
        <div class="sedia" id="1"></div>
        <div class="sedia" id="2"></div>
        <div class="sedia" id="3"></div>
        <div class="sedia" id="4"></div>
        <div class="sedia" id="5"></div>
        <div class="sedia" id="6"></div>
        <div class="sedia" id="7"></div>
        <div class="sedia" id="8"></div>
        <div class="sedia" id="9"></div>
        <div class="sedia" id="10"></div>
		<div class="sedia" id="11"></div>
        <div class="sedia" id="12"></div>
        <div class="sedia" id="13"></div>
        <div class="sedia" id="14"></div>
      </div>
    </div>
  </div>

<div class="theatreRows">
      <div class="row" id="1">
        <div class="rowNumb" id="1"></div>
        <div class="sedia" id="1"></div>
        <div class="sedia" id="2"></div>
        <div class="sedia" id="3"></div>
        <div class="sedia" id="4"></div>
		<div class="sedia" id="5"></div>
        <div class="sedia" id="6"></div>
        <div class="sedia" id="7"></div>
        <div class="sedia" id="8"></div>
        <div class="sedia" id="9"></div>
        <div class="sedia" id="10"></div>
		<div class="sedia" id="11"></div>
        <div class="sedia" id="12"></div>
        <div class="sedia" id="13"></div>
        <div class="sedia" id="14"></div>
      </div>
      <div class="row" id="2">
        <div class="rowNumb" id="2"></div>
        <div class="sedia" id="1"></div>
        <div class="sedia" id="2"></div>
        <div class="sedia" id="3"></div>
        <div class="sedia" id="4"></div>
        <div class="sedia" id="5"></div>
        <div class="sedia" id="6"></div>
        <div class="sedia" id="7"></div>
        <div class="sedia" id="8"></div>
        <div class="sedia" id="9"></div>
        <div class="sedia" id="10"></div>
		<div class="sedia" id="11"></div>
        <div class="sedia" id="12"></div>
        <div class="sedia" id="13"></div>
        <div class="sedia" id="14"></div>
      </div>
      <div class="row" id="3">
        <div class="rowNumb" id="3"></div>
        <div class="sedia" id="1"></div>
        <div class="sedia" id="2"></div>
        <div class="sedia" id="3"></div>
        <div class="sedia" id="4"></div>
        <div class="sedia" id="5"></div>
        <div class="sedia" id="6"></div>
        <div class="sedia" id="7"></div>
        <div class="sedia" id="8"></div>
        <div class="sedia" id="9"></div>
        <div class="sedia" id="10"></div>
		<div class="sedia" id="11"></div>
        <div class="sedia" id="12"></div>
        <div class="sedia" id="13"></div>
        <div class="sedia" id="14"></div>
      </div>
      <div class="row" id="4">
        <div class="rowNumb" id="4"></div>
        <div class="sedia" id="1"></div>
        <div class="sedia" id="2"></div>
        <div class="sedia" id="3"></div>
        <div class="sedia" id="4"></div>
        <div class="sedia" id="5"></div>
        <div class="sedia" id="6"></div>
        <div class="sedia" id="7"></div>
        <div class="sedia" id="8"></div>
        <div class="sedia" id="9"></div>
        <div class="sedia" id="10"></div>
		<div class="sedia" id="11"></div>
        <div class="sedia" id="12"></div>
        <div class="sedia" id="13"></div>
        <div class="sedia" id="14"></div>
      </div>
      <div class="row" id="5">
        <div class="rowNumb" id="5"></div>
        <div class="sedia" id="1"></div>
        <div class="sedia" id="2"></div>
        <div class="sedia" id="3"></div>
        <div class="sedia" id="4"></div>
        <div class="sedia" id="5"></div>
        <div class="sedia" id="6"></div>
        <div class="sedia" id="7"></div>
        <div class="sedia" id="8"></div>
        <div class="sedia" id="9"></div>
        <div class="sedia" id="10"></div>
		<div class="sedia" id="11"></div>
        <div class="sedia" id="12"></div>
        <div class="sedia" id="13"></div>
        <div class="sedia" id="14"></div> 
      </div>
    </div>
  </div>
  
  <div class="checkout" >
    <div class="checkOutAreaOne">
      <span> Selected Slot NO:</span>
      <div name="slot" class="postoS"></div>
      <br>
      <div class="checkoutTotal">
        <span> Count: </span> <span  class="sedieTotale"> 0 </span>
        <span> Total( ₹) : </span> <span  class="costo"> 0 </span>
      </div>

      <br>
    </div>

    <div class="checkOutAreaTwo">
      <!-- BACKEND ROUTE -->


        <a href="Payment.php"><button type="submit" class="btnAcquista">Book:</button></a>
      

</div>
</div>
</form>
    </div>
  </div>
  <script src="js/main.js"></script>

  </body>

</html>