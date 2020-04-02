<?php 
require'conn.php';

@$orderid=$_POST['accNo'];

@$statuss=0;

$query1 ="UPDATE orders SET statuss='Completed' WHERE   id='$orderid'";

if ($conn->query($query1) === TRUE) {
    @$statuss=1;

    
      
}else{
              echo("Error description: " . mysqli_error($conn));
           
       
       
        }




echo @$statuss."^%#+^";



?>