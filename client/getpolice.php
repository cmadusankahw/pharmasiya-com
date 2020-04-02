<?php 
require'conn.php';

@$orderid=$_POST['accname'];

@$statuss=0;

$query_AccountDetails5= "SELECT * FROM pharma WHERE namee= '".$orderid."'";
$res_AccountDetails5= $conn->query($query_AccountDetails5);//($query_AccountDetails);
$num_rows5 = mysqli_num_rows($res_AccountDetails5);

if($num_rows=0){
    $newarray="";
}else{
    while( $row_AccountDetails5=mysqli_fetch_array($res_AccountDetails5)){	
    
    
     @$mobile=$row_AccountDetails5['conatct'];
     @$pname=$row_AccountDetails5['policy'];
     @$pmobile=$row_AccountDetails5['policynum'];
     @$statuss=1; 
 



}
}

  
     



echo @$statuss."^%#+^";
echo @$mobile."^%#+^";
echo @$pname."^%#+^";
echo @$pmobile."^%#+^";



?>