<?php
require'conn.php';

@$distric=trim($_POST['distric']);
@$name=trim($_POST['nameInput']);
@$mobile=trim($_POST['telInput']);
@$address=trim($_POST['address']);
@$owname=trim($_POST['owname']);
@$pname=trim($_POST['pname']);
@$pnum=trim($_POST['pmobile']);
@$regnum=trim($_POST['regid']);
@$password=trim($_POST['password']);







@$status=0;




$query2 ="INSERT INTO pharma(id,namee,conatct,adreess,owname,distric,policy,policynum,passowrd) values
('$regnum','$name','$mobile','$address','$owname','$distric','$pname','$pnum','$password') ";

if ($conn->query($query2) === TRUE) {
	@$status=1;
	
	echo "<script>alert('ඔබගේ ලියා පදිංචිය සාර්ථකයි..');
       
        </script>";

      header('refresh:1; ../../admin/');

      }
        else{
              echo("Error description: " . mysqli_error($conn));
           
			  echo "<script>alert('ඔබගේ ඉල්ලුම අසාර්ථක විය​.කරුණාකර නැවත උත්සහ කරන්න​.');
       
			  </script>";
  header('refresh:1;');
        }


		

?>