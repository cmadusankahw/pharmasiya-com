
<?php

session_start();
if(isset($_SESSION['userid'])){

}else{

  header('refresh:1; index.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmasiya.com- Completed Orders</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    
    <!--titlebar-->
    <?php include('nav.php'); ?>
  
      <!--content-->
      <div class="text-center" style="padding-top:70px;">
        <h2>Completed Order</h2>
    </div>
    <hr>

    <div class="row" >
        <div class="col"></div>
        <div class="col-md-6 text-center justify-content-center">
            <table class="table table-hover table-responsive">
                <thead>
                  <tr class="table-info">
                    <th scope="col">Order ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Special Notes</th>
                    
                    <th scope="col">Date and Time</th>
                   
                  
                    <th scope="col">ACTION</th>
                    <th><input type="hidden" id="clik"> </th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
               
               require'model/conn.php';
              // session_start();
               $shop= $_SESSION['name'];
               $query_AccountDetails= "select * from orders where statuss='Completed' and pharma='$shop'  ";
	$res_AccountDetails= $conn->query($query_AccountDetails);//($query_AccountDetails);
	$num_rows = mysqli_num_rows($res_AccountDetails);
	
	if($num_rows=0){
		$newarray="";
	}else{
		while( $row_AccountDetails=mysqli_fetch_array($res_AccountDetails)){	
    echo'  <tr>
      <td>'.$row_AccountDetails['id'].'</td>
      <td>'.$row_AccountDetails['name'].'</td>
      
      <td>'.$row_AccountDetails['mobile'].'</td>
      <td>'.$row_AccountDetails['note'].'</td>
      <td>'.$row_AccountDetails['datetime'].'</td>
      
      <td> <button type="button" class="btn btn-success" id='.$row_AccountDetails['id'].'  onclick="getid(this.id)">View Order</button></td>
      <td><td><a class="btn btn-primary btn-md" id="modelbtn" data-toggle="modal" data-target="#detailsModal" hidden> VIEW ORDER</a></td></td>
     
    </tr>';
    
		
		
	
	
	}
	}?>
                  
                  </tbody>
              </table>
        </div>
        <div class="col"></div>
    </div>

    <!--more details-->
    <!-- Modal -->
    <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" onload="getid();">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Order  Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

            <!--modal body-->
             <div class="row" style="padding:15px;">
                <div class="col" style="font-weight:bold; color:darkslateblue; text-align:right;">
                    Ordr ID :
                </div>
                <div class="col">
                    <span id="ids"></span>
                </div>
            </div>
            <div class="row"  style="padding:15px;">
                <div class="col" style="font-weight:bold; color:darkslateblue; text-align:right;">
                    Customer Name :
                </div>
                <div class="col">
                    <span id="cusname"></span>
                </div>
            </div>
            <div class="row"  style="padding:15px;">
                <div class="col" style="font-weight:bold; color:darkslateblue; text-align:right;">
                    Contact No :
                </div>
                <div class="col">
                    <span id="cusmobi"></span>
                </div>
            </div>
            <hr>

            <!-- order table-->
            <div class="row">
                <table class="table table-responsive text-center" style="margin:auto; width:80%;">
                   
                    <tbody>
                      <tr>
                       
                        
                        <img src="#" alt="Image"id="fimg" width="500" height="500">

                      </tr>

                      <tr>
                       
                    

                     </tr>
                
                 
                    </tbody>
                  </table>
            </div>
               
            </div>
            <div class="modal-footer">
         
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>      
            </div>
            
        </div>
        </div>
    </div>




      <!--footer-->
      <footer class="container text-center" style="padding-top:40px;">
        <hr>
        <p>Developd By &copy; Accseedd 2020</p>  

      </footer>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>      
</body>
</html>


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
function getid(id) {
  
  document.getElementById("clik").value =id;
  getids(id);
  
 
}





function call() {
  
 
  
  document.getElementById("modelbtn").click();
}



function getids(loid){
  var idn=loid;
 // alert(idn);
  document.getElementById('clik').value=loid;
  setTimeout(function(){
	//alert('');
  var accNo=$('#clik').val();
  //alert(accNo);
	var param = "event=Load&accNo="+accNo;
						$.ajax
						(
						  {
							type: "POST",
							url: "model/neworder.php",
							data : param,
							dataType: "text",
							success: function(xml)
							{
					//	alert(xml);
								if(xml !="")
								{
                  var field = xml.split('^%#+^');
                  document.getElementById('ids').innerHTML=loid;
                  document.getElementById('cusname').innerHTML=field[1];
                  document.getElementById('cusmobi').innerHTML=field[2];
                  document.getElementById("fimg").src = "../client/img/products/"+field[3];;
                  call();
                 
									//document.getElementById('tryid').value=field[0];
								//location.reload(); 
									}        	
								else
								{
									//document.getElementById('accountNumber').value="";
								//	document.getElementById('acctypee').value="";
									//document.getElementById('balancee').value="";
                   //location.reload(true);
								}
							}
						  }
						  );
						  
}, 500);
  }


  function getidsss1(){
 // var idn=loid;
  //alert(idn);
 // document.getElementById('clik').value=loid;
  setTimeout(function(){
	//alert('');
  var accNo=$('#clik').val();
  //alert(accNo);
	var param = "event=Load&accNo="+accNo;
						$.ajax
						(
						  {
							type: "POST",
							url: "model/dilivered.php",
							data : param,
							dataType: "text",
							success: function(xml)
							{
					//	alert(xml);
								if(xml !="")
								{
                  var field = xml.split('^%#+^');

                  var status=field[0];
                  if(status==1)
                  location.reload(); 

                  
               


                  
                  
                 
									//document.getElementById('tryid').value=field[0];
								//location.reload(); 
									}        	
								else
								{
									//document.getElementById('accountNumber').value="";
								//	document.getElementById('acctypee').value="";
									//document.getElementById('balancee').value="";
                   //location.reload(true);
								}
							}
						  }
						  );
						  
}, 500);
  }



  function getidsss2(id){
 // var idn=loid;
 var accNo=id;
  //alert(idn);
 // document.getElementById('clik').value=loid;
  setTimeout(function(){
	//alert('');
 // var accNo=$('#clik').val();
  //alert(accNo);
	var param = "event=Load&accNo="+accNo;
						$.ajax
						(
						  {
							type: "POST",
							url: "model/dilivered.php",
							data : param,
							dataType: "text",
							success: function(xml)
							{
					//	alert(xml);
								if(xml !="")
								{
                  var field = xml.split('^%#+^');

                  var status=field[0];
                  if(status==1)
                  location.reload(); 

                  
               


                  
                  
                 
									//document.getElementById('tryid').value=field[0];
								//location.reload(); 
									}        	
								else
								{
									//document.getElementById('accountNumber').value="";
								//	document.getElementById('acctypee').value="";
									//document.getElementById('balancee').value="";
                   //location.reload(true);
								}
							}
						  }
						  );
						  
}, 500);
  }


  


  function newready(){
 // var idn=loid;
  //alert(idn);
 // document.getElementById('clik').value=loid;
  setTimeout(function(){
	//alert('');
  var accNo=$('#clik').val();
  var price=$('#price').val();
  //alert(accNo);
	var param = "event=Load&accNo="+accNo+"&price=" + price;
						$.ajax
						(
						  {
							type: "POST",
							url: "model/newlo.php",
							data : param,
							dataType: "text",
							success: function(xml)
							{
					//	alert(xml);
								if(xml !="")
								{
                  var field = xml.split('^%#+^');

                  var status=field[0];
                  if(status==1)
                  location.reload(); 

                  
               


                  
                  
                 
									//document.getElementById('tryid').value=field[0];
								//location.reload(); 
									}        	
								else
								{
									//document.getElementById('accountNumber').value="";
								//	document.getElementById('acctypee').value="";
									//document.getElementById('balancee').value="";
                   //location.reload(true);
								}
							}
						  }
						  );
						  
}, 500);
  }


  function remov(){
 // var idn=loid;
  //alert(idn);
 // document.getElementById('clik').value=loid;
  setTimeout(function(){
	//alert('');
  var accNo=$('#clik').val();
  //alert(accNo);
	var param = "event=Load&accNo="+accNo;
						$.ajax
						(
						  {
							type: "POST",
							url: "model/newloo.php",
							data : param,
							dataType: "text",
							success: function(xml)
							{
					//	alert(xml);
								if(xml !="")
								{
                  var field = xml.split('^%#+^');

                  var status=field[0];
                  if(status==1)
                  location.reload(); 

                  
               


                  
                  
                 
									//document.getElementById('tryid').value=field[0];
								//location.reload(); 
									}        	
								else
								{
									//document.getElementById('accountNumber').value="";
								//	document.getElementById('acctypee').value="";
									//document.getElementById('balancee').value="";
                   //location.reload(true);
								}
							}
						  }
						  );
						  
}, 500);
  }

  

</script>