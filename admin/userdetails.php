<?php
require('top.inc.php');


$sql = "SELECT * FROM userregister";
$result = $con->query($sql);
$con->close(); 
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title></title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
  </script>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1> Mechanic Details</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
            	<th class="table-primary">user id </th>
                <th class="table-primary">Name </th>
               
                 <th class="table-danger">Call Now</th>
               
                <th class="table-info">Email</th>
                
                  <th class="table-success">password</th>
                
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows= mysqli_fetch_assoc($result))
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                    <td><?php echo $rows['userid'];?></td>
                <td><?php echo $rows['username'];?></td>
                  <td><a href="tel:<?php echo $rows['mobile'];?>"> <img src=call.png height=" 30" width=" 30"> </a></td>
 <td><a href="mailto:<?php echo $rows['email'];?>"><?php echo $rows['email'];?></td>
                <td><?php echo $rows['password'];?></td>
                
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>
