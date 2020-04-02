<?php
require'conn.php';

@$orderid=$_POST['accNo'];

@$statuss="awaa";






        $query_AccountDetails= "SELECT * FROM orders  WHERE id = '".$orderid."'";
        $res_AccountDetails= $conn->query($query_AccountDetails);//($query_AccountDetails);
        $num_rows = mysqli_num_rows($res_AccountDetails);
        
        if($num_rows=0){
            $newarray="";
        }else{
            while( $row_AccountDetails=mysqli_fetch_array($res_AccountDetails)){	
            
                @$name=$row_AccountDetails['name'];
          
            @$mobile=$row_AccountDetails['mobile'];
            @$img=$row_AccountDetails['img'];
            
        }
        }
    

       
			



        echo @$statuss."^%#+^";
echo @$name."^%#+^";
echo @$mobile."^%#+^";
echo @$img."^%#+^";


?>