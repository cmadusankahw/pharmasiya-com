<?php 
require'conn.php';

@$orderid=$_POST['accNo'];

@$statuss=0;

$query_AccountDetails5= "SELECT * FROM orders WHERE id= '".$orderid."'";
$res_AccountDetails5= $conn->query($query_AccountDetails5);//($query_AccountDetails);
$num_rows5 = mysqli_num_rows($res_AccountDetails5);

if($num_rows=0){
    $newarray="";
}else{
    while( $row_AccountDetails5=mysqli_fetch_array($res_AccountDetails5)){	
    
    
     @$mobilenumber=$row_AccountDetails5['mobile'];
       
 



}
}

$message="ඔබගේ ඇණවුම ප්‍රතික්ෂේප වී ඇත. වැඩි විස්තර සදහා අපිව අමතන්න.  0777745605";
$query1 ="UPDATE orders SET statuss='Cansel' WHERE   id='$orderid'";
  @$statuss=1;
if ($conn->query($query1) === TRUE) {
    $user = 94770508710;
    $password = 1497;
        $text = urlencode($message);
        $to = "$mobilenumber";
        // echo($to);
        
        $baseurl ="http://www.textit.biz/sendmsg";
        $url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
        $ret = file($url);
        
        $res= explode(":",$ret[0]);   
  

  
      





//$message="ඔබගේ ඇණවුම සූදානම්.ඇණවුම් අංකය :-".$orderid;
  
 



}else{
              echo("Error description: " . mysqli_error($conn));
           
       
       
        }




echo @$statuss."^%#+^";



?>