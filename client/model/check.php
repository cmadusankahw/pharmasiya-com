<?php
require'conn.php';

@$nic=trim($_POST['nic']);

@$status=0;




$result = mysql_query("SELECT * FROM orders WHERE nic='$nic' and  statuss != 'completed'");
$status = mysql_num_rows($result) > 0 ? '1' : '0';



		
			
			




echo @$status."^%#+^";

?>