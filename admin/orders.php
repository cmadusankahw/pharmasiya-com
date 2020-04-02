
<?php

session_start();
if(isset($_SESSION['id'])){

}else{

  header('refresh:1; index.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy More - All Orders</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    
    <!--titlebar-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="#">Buy More</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="orders.php">All Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ready.php">Ready Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="model/upload.php">Add Product</a>
              </li>
              <li class="nav-item">
              <a class="nav-link " href="model/products.php">Manage Product</a>
            </li>
         
              
            <li class="nav-item">
              <a class="nav-link disabled" href="contact.php">Contact Developer</a>
            </li>
           
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
  
      <!--content-->
      <div class="text-center" style="padding-top:70px;">
        <h2>Upcoming Orders</h2>
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
                    <th scope="col">Date and Time</th>
                    <th scope="col">Special Notes</th>
                    <th scope="col">Date time</th>
                    <th scope="col">ACTION</th>
                    <th><input type="hidden" id="clik"> </th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
               
               require'model/conn.php';
               session_start();
               $shop= $_SESSION['name'];
               $query_AccountDetails= "select *from orders where statuss='New' and pharma=$shop  ";
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
      
      <td> <button type="button" class="btn btn-primary" id='.$row_AccountDetails['id'].'  onclick="getid(this.id)">VIEW ORDER</button></td>
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
            <h5 class="modal-title" id="exampleModalLongTitle">Order 1 Details</h5>
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
                    <thead>
                      <tr>
                        <th scope="col">Item ID<br></th>
                        <th scope="col">Product Name<br></th>
                        <th scope="col">Quantity <span style="font-weight:300; color:gray; font-size:14px;">(Pcs/Kg/Ltr/m)</span></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td> <span id="item1"></span></td>
                        <td> <span id="qt1"></span></td>

                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td> <span id="item2"></span></td>
                        <td> <span id="qt2"></span></td>
    
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td> <span id="item3"></span></td>
                        <td> <span id="qt3"></span></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td> <span id="item4"></span></td>
                        <td> <span id="qt4"></span></td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td> <span id="item5"></span></td>
                        <td> <span id="qt5"></span></td>
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td> <span id="item6"></span></td>
                        <td> <span id="qt6"></span></td>
                      </tr>
                      <tr>
                        <th scope="row">7</th>
                        <td> <span id="item7"></span></td>
                        <td> <span id="qt7"></span></td>
                      </tr>
                      <tr>
                        <th scope="row">8</th>
                        <td> <span id="item8"></span></td>
                        <td> <span id="qt8"></span></td>
                      </tr>
                      <tr>
                        <th scope="row">9</th>
                        <td> <span id="item9"></span></td>
                        <td> <span id="qt9"></span></td>
                      </tr>
                      <tr>
                        <th scope="row">10</th>
                        <td> <span id="item10"></span></td>
                        <td> <span id="qt10"></span></td>
                      </tr>
                      
                        <tr>
                        <th scope="row">මිල </th>
                        <td> <span  id="price"></span></td>
                       
                      </tr>
                    </tbody>
                  </table>
            </div>
               
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick=" getidsss();">Mark Ready</button>
               <button type="button" class="btn btn-danger" onclick=" remov();">Cansel Order</button>
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

      <script type="text/javascript" src="js/main.js"></script>
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
                  document.getElementById('item1').innerHTML=field[3];
                  document.getElementById('qt1').innerHTML=field[4];

                  document.getElementById('item2').innerHTML=field[5];
                  document.getElementById('qt2').innerHTML=field[6];

                  document.getElementById('item3').innerHTML=field[7];
                  document.getElementById('qt3').innerHTML=field[8];

                  document.getElementById('item4').innerHTML=field[9];
                  document.getElementById('qt4').innerHTML=field[10];

                  document.getElementById('item5').innerHTML=field[11];
                  document.getElementById('qt5').innerHTML=field[12];

                  document.getElementById('item6').innerHTML=field[13];
                  document.getElementById('qt6').innerHTML=field[14];

                  document.getElementById('item7').innerHTML=field[15];
                  document.getElementById('qt7').innerHTML=field[16];

                  document.getElementById('item8').innerHTML=field[17];
                  document.getElementById('qt8').innerHTML=field[18];

                  document.getElementById('item9').innerHTML=field[19];
                  document.getElementById('qt9').innerHTML=field[20];

                  document.getElementById('item10').innerHTML=field[21];
                  document.getElementById('qt10').innerHTML=field[22];
                  
                   document.getElementById('price').innerHTML=field[23];

                  
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









  function getidsss(){
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