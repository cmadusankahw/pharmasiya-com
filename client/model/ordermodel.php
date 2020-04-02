<?php 

  $i=0;   



            
            require'conn.php';
           $query1 = "SELECT id FROM product";  
            $result1 = mysqli_query($conn, $query1);
            if ($result1) 
    { 
    
        $row1 = mysqli_num_rows($result1); 
        //   print_r($row1);  
        $r=0;
    
    
    } 
       
          
   
 
         
    $result = $conn->query("SELECT * FROM `product`");
 
    while( $row = $result->fetch_assoc() ) {
        
    $id[$i]=p.$row['id'];
    $name[$i]=$row['name'];
    $price[$i]=$row['price'];
       $i=$i+1;

    }
    
echo($id[0]);











?>