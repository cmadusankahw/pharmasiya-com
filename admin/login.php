<?php

require'model/conn.php';
 $username=$_POST['regid'];
 $password=$_POST['password'];
 @$passwordc=" ";
 session_start();
 $query_AccountDetails= "select * from pharma where id='$username' ";
 $res_AccountDetails= $conn->query($query_AccountDetails);//($query_AccountDetails);
 $num_rows = mysqli_num_rows($res_AccountDetails);
 
 if($num_rows=0){
    $newarray="";
    echo "<script>alert('Sorry,You are not a Registered Pharmacy, Try Again');
       
    </script>";

    header('refresh:1; index.php');
 }else{
     while( $row_AccountDetails=mysqli_fetch_array($res_AccountDetails)){	

     $_SESSION['userid']=$row_AccountDetails['id'];
     $_SESSION['name']=$row_AccountDetails['namee'];
      $passwordc =$row_AccountDetails['passowrd'];
     
    }

    if($password==$passwordc){
        //echo($_SESSION['name']);
        echo "<script>alert('Thnank You.Login is Success');
       
    </script>";
     header('refresh:1; home.php');
    }else{

        echo "<script>alert('Password Incorect');
       
        </script>";
        header('refresh:1; index.php');
    }

    

 //  header('refresh:1;home.php');
 }






?>