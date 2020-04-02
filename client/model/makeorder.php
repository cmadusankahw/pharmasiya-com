<?php
require'conn.php';

@$name=trim($_POST['name']);
@$mobile=trim($_POST['mobile']);
@$address=trim($_POST['address']);

@$pname=trim($_POST['distric']);
$pnum=trim($_POST['pnumber']);
@$note=trim($_POST['note']);

$file=$_FILES['file'];
$file_name=$file['name'];
$file_tmp=$file['tmp_name'];
//print_r($file_name);
//echo $file_name;
$target='../img/products/';
$file_dest='../img/products/'.$file_name;

move_uploaded_file($file_tmp,$file_dest);

  @$mobilenumber1="";

@$status=0;



$query2 ="INSERT INTO orders(name,mobile,img,pharma,note,statuss,adress) values('$name','$mobile','$file_name','$pname','$note','New','$address') ";

if ($conn->query($query2) === TRUE) {
	@$status=1;
	
	echo "<script>alert('ඔබගේ ඉල්ලුම සාර්ථකව යොමු කරන ලදී.');
      
        </script>";
        
      $message="ඔබ හට නව ඇණවුමක් ලැබී ඇත​ :-  www.pharmsiya.com";
        
        $text = urlencode($message);
      $to = "94".$pnum;
     // $to ="94757957510";
        // echo($to);
        
       
          $url = "https://app.newsletters.lk/smsAPI?sendsms&apikey=ICcenN1YgHUTYB9vpGzSE8KlEDt6f5xd&apitoken=JIMA1584899484&from=MY%20BILL&to=$to&type=sms&text=$text";
        $ret = file($url);
        
        $res= explode(":",$ret[0]); 

      header('refresh:1; ../index.php');

      }
        else{
              echo("Error description: " . mysqli_error($conn));
           
			  echo "<script>alert('ඔබගේ ඉල්ලුම අසාර්ථක විය​.කරුණාකර නැවත උත්සහ කරන්න​.');
       
			  </script>";
			 header('refresh:1; ../index.php');
        }


		

?>