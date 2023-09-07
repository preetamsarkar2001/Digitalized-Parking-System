<?php      
    include('connection.php');                          

    $user = $_POST['user']; 
    $cardno = $_POST['cardno'];
    $expirydate = $_POST['expirydate'];
    $cvv= $_POST['cvv'];
      
        //to prevent from mysqli injection  
        $user = stripcslashes($user);  
        $cardno  = stripcslashes($cardno);
        $expirydate = stripcslashes($expirydate);
        $cvv = stripcslashes($cvv);
         
        $user = mysqli_real_escape_string($con, $user); 
        $cardno = mysqli_real_escape_string($con, $cardno);
        $expirydate = mysqli_real_escape_string($con, $expirydate);
        $cvv = mysqli_real_escape_string($con, $cvv);

            
                   
                    $sql = "INSERT INTO payment(user, cardno, expirydate, cvv) values('$user','$cardno', '$expirydate','$cvv')"; 
                            if (mysqli_query($con, $sql))
                {
               echo"<html><body><h1>congratulations, your account created successfully</h1></body></html>";
                }
                        else
                
            {
                echo"sorry, please try another userid";
            }
        
    
    
  
?>  