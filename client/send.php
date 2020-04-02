<?php


if(isset($_POST["nameInput"]))
{
  $distric=$_POST['distric'];
  $name=$_POST['nameInput'];
  $mobile=$_POST['telInput'];
  $address=$_POST['address'];

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmasiya.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <!--navbar-->
    <?php include('nav.php'); ?>

      <div class="container-fluid text-center" style="padding-top:30px; width:80%">

        <div class="text-center" style="padding-top:15px;">
            <h3><b>තොරතුරු ඇතුලත් කරන්න</b></h3>
           </div>
           <hr>


        <form id="shopSel" action="model/makeorder.php" method="POST" enctype="multipart/form-data">
        <div class="form-group" style="padding-top:45px;">
            <b><label for="seltown">ෆාමිසිය</label></b>
            <select class="form-control" id="distric" name="distric">
            <option value="තෝරා නැත​">තෝරන්න​</option>
            <?php 

require'conn.php';
$query_AccountDetails= "SELECT namee FROM pharma  WHERE distric='$distric' ";
$res_AccountDetails= $conn->query($query_AccountDetails);//($query_AccountDetails);

while( $row_AccountDetails=mysqli_fetch_array($res_AccountDetails)){	
    
   
echo '<option value="'.$row_AccountDetails['namee'].'">'.$row_AccountDetails['namee'].'</option>';

} ?>
 
            </select>
          </div>

          <div class="form-group" style="padding-top:45px;">
            <b><label for="nameInput">ඔබගේ බෙහෙත් තුන්ඩුව තෝරන්න</label></b>
            <input type="file" class="form-control" id="file" name="file"  required>
          </div>
          <div class="form-group" style="padding-top:45px;">
            <b><label for="nameInput">අවශ්‍යනම්  වෙනත් තොරතුරු</label></b>
            <input type="text" value="" class="form-control" id="note" name="note" placeholder=""> 
          </div>


          <div class="form-group" style="padding-top:45px;">
            <b><label for="seltown">ෆාමිසියේ දුරකතන අංකය</label></b>
            <input type="text" value="" class="form-control" id="pnumber" name="pnumber" readonly> 
          </div>

          <div class="form-group" style="padding-top:45px;">
            <b><label for="seltown">ලගම තැපැල් කාර්යාලය</label></b>
            <input type="text" value="" class="form-control" id="police" name="police" readonly> 
          </div>

          <div class="form-group" style="padding-top:45px;">
            <b><label for="seltown">ලගම තැපැල් කාර්යාලයේ දුරකථන අංකය</label></b>
            <input type="text" value="" class="form-control"  id="policenum" name="policenum" readonly> 
          </div>

       
          <!--name,mobile,vilage-->
    <?php  echo "<input type='hidden' id='name' name='name' value='$name'/>";	
    echo "<input type='hidden' id='txtPhoneNo' name='mobile' value='$mobile'/>";
    echo "<input type='hidden' id='adress' name='address'  value='$address'/>";
    
    
    
    
    ?>
         
      

        <div style="padding-top:25px;">
            <p><button class="btn btn-primary btn-lg" id="subbtn" type="submit"  disabled>තහවුරු කරන්න&raquo;</button></p>
           </div>  
           </form>

     
    </div>

    <footer class="container text-center">
       <hr>
      <p>Developd By &copy; Accseedd 2020</p> 
      </footer>
  



      
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    </body>


<script>

file.onchange = function(e) { 
  if (window.confirm('Upload Completed'))
{
  document.getElementById("subbtn").disabled = false;
}
};



$("#distric").change(function(){
//alert('iamm there');//
  //var as=document.getElementById('acctype').value;
	var accname=$('#distric option:selected').text();
 
  //alert(accType);
 // alert(accDivi);
  
//	var param = "event=Load&accType="+accType+accDiv;
  var param = "event=Load&accname="+accname;
 // Event=param&param2name=param2value+"&param3name=" +param3value;
						$.ajax
						(
						  {
							type: "POST",
							url: "getpolice.php",
							data : param,
							dataType: "text",
							success: function(xml)
							{
						//	alert(xml);
								if(xml !="")
								{
									var field = xml.split('^%#+^');
									document.getElementById('pnumber').value=field[1].trim();
                  document.getElementById('police').value=field[2].trim();
                  document.getElementById('policenum').value=field[3].trim();
								
									}        	
								else
								{
									//document.getElementById('accountNumber').value="";
									document.getElementById('accno').value="";
								
								}
							}
						  }
						  );
						  
});	


</script>

    </html>
    