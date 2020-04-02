
<?php    $name=$_POST['nameInput']; 
 $mobile=$_POST['telInput']; 
 $village=$_POST['areaInput']; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Shopping</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .card{
            margin-top:15px !important;
            min-height:200px !important;
        }
        .selimg{
            display:none;
        }
    </style>
</head>
<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-primary">
        <a class="navbar-brand" href="#">Grocery Shopping</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">උපදෙස්<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="order.php">භාණ්ඩ තෝරන්න</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">වැඩි විස්තර</a>
              </li>
            
          </ul>
          <div class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" id="stext" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" onclick="findonPage('stext')">සොයන්න</button>
          </div>
        </div>
      </nav>

      <!--product cards-->
      <div class="container-fluid">
       <div class="text-center fixd-top" style="padding-top:15px; " >
        <h3><b>භාණ්ඩ තෝරන්න</b></h3>
        <form id="catSel" action="" >
          <div class="container-fluid text-center" style=" width:80%;">
          <div class="form-group text-center" style="padding-top:10px; margin:0 auto;">
              <select class="form-control" id="selcat">
                <option value="cat1">අත්‍යවශ්‍ය ද්‍රව්ය</option>
                <option value="cat1">කිරි පිටි වර්ග</option>
                <option value="cat1">සහල් වර්ග</option>
                <option value="cat1">ක්ශණික ආහර</option>
              </select>
            </div>
          </div>
          </form>
       </div>
  
       <hr>
       
        <div class="row row-cols-2 row-cols-md-6" style="padding:20px; padding-top:0; padding-bottom:80px;">
            
               
                 	
            <?php
            
            require'conn.php';
    $result = $conn->query("SELECT * FROM `product`");

    while( $row = $result->fetch_assoc() ) {
      $id=p.$row['id'];
      $img=$row['img'];
      $name=$row['name'];


      echo '
            
      
            
            
            <!--product 1 card-->
            <div class="col mb-2">
              <div class="card shadow-sm" id=$id type="button" data-toggle="modal" data-target="#p1-m" onclick = "changeColor('.$row['id'].')">
                <img src="../img/products/$img class="card-img-top" >
                <div class="card-body" style="text-align:center;">
                  <b><h5 class="card-title" id=$id"-name">$name.</h5></b>
                  <p class="card-text" >රු. <span id=$id"-val">65.00</span></p>
                  <img src="../img/tick.png" style="width:20px; margin:0 auto;" alt="selected" id=$id"-sel"" class="selimg">
                </div>
              </div>
            </div>
 
            
        
  
            
            
            
            
            
            ';
    }






  ?>  
         
            
         
             <!--product 1 card-->
             
             
            <div class="col mb-2">
              <div class="card shadow-sm" id="p1" type="button" data-toggle="modal" data-target="#p1-m" onclick = "changeColor('p1')">
                <img src="img/p1.jpg" class="card-img-top" >
                <div class="card-body" style="text-align:center;">
                  <b><h5 class="card-title" id="p1-name">පරිප්පු</h5></b>
                  <p class="card-text" >රු. <span id="p1-val">65.00</span></p>
                  <img src="../img/tick.png" style="width:20px; margin:0 auto;" alt="selected" id="p1-sel" class="selimg">
                </div>
              </div>
            </div>

             <!--product 2 card-->
             <div class="col mb-2">
              <div class="card shadow-sm" id="p2" type="button"  data-toggle="modal" data-target="#p2-m" onclick = "changeColor('p2')">
                <img src="img/p2.jpg" class="card-img-top" >
                <div class="card-body" style="text-align:center;">
                  <b><h5 class="card-title" id="p2-name">සුදු සහල්</h5></b>
                  <p class="card-text" >රු. <span id="p2-val">95.00</span></p>
                   <img src="../img/tick.png" style="width:20px; margin:0 auto;" alt="selected" id="p2-sel" class="selimg">
                </div>
              </div>
            </div>

            <!--product 3 card-->
            <div class="col mb-2">
              <div class="card shadow-sm" id="p3" type="button"  data-toggle="modal" data-target="#p3-m" onclick = "changeColor('p3')">
                <img src="img/p3.jpg" class="card-img-top" >
                <div class="card-body" style="text-align:center;">
                  <b><h5 class="card-title" id="p3-name">සුදු සීනි</h5></b>
                  <p class="card-text" >රු. <span id="p3-val">100.00</span></p>
                   <img src="img/tick.png" style="width:20px; margin:0 auto;" alt="selected" id="p3-sel" class="selimg">
                </div>
              </div>
            </div>

              <!--product 4 card-->
              <div class="col mb-2">
              <div class="card shadow-sm" id="p4" type="button"  data-toggle="modal" data-target="#p4-m" onclick = "changeColor('p4')">
                <img src="img/p4.jpg" class="card-img-top" >
                <div class="card-body" style="text-align:center;">
                  <b><h5 class="card-title" id="p4-name">ඇන්කර් කිරි 400g</h5></b>
                  <p class="card-text" >රු. <span id="p4-val">315.00</span></p>
                   <img src="img/tick.png" style="width:20px; margin:0 auto;" alt="selected" id="p4-sel" class="selimg">
                </div>
              </div>
            </div>

              <!--product 5 card-->
              <div class="col mb-2">
              <div class="card shadow-sm" id="p5" type="button"  data-toggle="modal" data-target="#p5-m" onclick = "changeColor('p5')">
                <img src="img/p5.jpg" class="card-img-top" >
                <div class="card-body" style="text-align:center;">
                  <b><h5 class="card-title" id="p5-name">සැමන් පොඩි</h5></b>
                  <p class="card-text" >රු. <span id="p5-val">100.00</span></p>
                   <img src="img/tick.png" style="width:20px; margin:0 auto;" alt="selected" id="p5-sel" class="selimg">
                </div>
              </div>
            </div>

          </div>
    </div>


  <!--foo bar-->
  <nav class="navbar navbar-expand-md navbar-light fixed-bottom shadow-lg" style="background-color: rgb(202, 202, 202);">
        <table class="table-expand" style="width:100%">
            <th style="width:30%;">
                <div  style="text-align:left;">
                    <h5 style="font-weight:bold;"><span id="totalamt"> රු. 0.0 </span></h5>
                </div>
            </th>
            <th style="width:40%;">
                <div class="text-center">
                    <button class="btn btn-md btn-primary shadow" onclick="orderProducts()">තහවුරු කරන්න</button>
                </div>
            </th>
            <th style="width:30%;">
                <div  style="text-align:right;">
                    <h5 style="font-weight:bold;" ><span id="totalitem"> භාණ්ඩ 0</span></h5>
               </div>
            </th>

        </table>
             
    </div>
  </nav>



  <!-- product 1 selector -->
  <div class="modal fade" id="p1-m" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ප්‍රමාණය (Pcs/Kg/Ltr/m)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="font-weight:bold; font-size:18px; white-space:15px;"  >
          <?php
           include '../form-content.php';
          ?>
        </div>
        <div class="modal-footer text-center">
        <button type="button" class="btn btn-primary" onclick="onProduct('p1')" style="margin:0 auto;" >තෝරන්න</button>
      </div>
      </div>
    </div>
  </div>

    <!-- product 2 selector -->
    <div class="modal fade" id="p2-m" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ප්‍රමාණය (Pcs/Kg/Ltr/m)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="font-weight:bold; font-size:18px; white-space:15px;"  >
          <?php
           include 'form-content.php';
          ?>
        </div>
        <div class="modal-footer text-center">
        <button type="button" class="btn btn-primary" onclick="onProduct('p2')" style="margin:0 auto;" >තෝරන්න</button>
      </div>
      </div>
    </div>
  </div>

    <!-- product 3 selector -->
    <div class="modal fade" id="p3-m" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ප්‍රමාණය (Pcs/Kg/Ltr/m)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="font-weight:bold; font-size:18px; white-space:15px;"  >
          <?php
           include 'form-content.php';
          ?>
        </div>
        <div class="modal-footer text-center">
        <button type="button" class="btn btn-primary" onclick="onProduct('p3')" style="margin:0 auto;">තෝරන්න</button>
      </div>
      </div>
    </div>
  </div>

    <!-- product 4 selector -->
    <div class="modal fade" id="p4-m" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ප්‍රමාණය (Pcs/Kg/Ltr/m)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="font-weight:bold; font-size:18px; white-space:15px;"  >
          <?php
           include 'form-content-unit.php';
          ?>
        </div>
        <div class="modal-footer text-center">
        <button type="button" class="btn btn-primary" onclick="onProduct('p4')" style="margin:0 auto;">තෝරන්න</button>
      </div>
      </div>
    </div>
  </div>

    <!-- product 5 selector -->
    <div class="modal fade" id="p5-m" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ප්‍රමාණය (Pcs/Kg/Ltr/m)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="font-weight:bold; font-size:18px; white-space:15px;"  >
          <?php
           include 'form-content-unit.php';
          ?>
   
        </div>
        <div class="modal-footer text-center">
        <button type="button" class="btn btn-primary" onclick="onProduct('p5')" style="margin:0 auto;">තෝරන්න</button>
      </div>
      </div>
    </div>
  </div>



  <!--input boxes for items-->
  <input type="text" id="item1" hidden="true" value="0">
  <input type="text" id="item2" hidden="true" value="0">
  <input type="text" id="item3" hidden="true" value="0">
  <input type="text" id="item4" hidden="true" value="0">
  <input type="text" id="item5" hidden="true" value="0">
  <input type="text" id="item6" hidden="true" value="0">
  <input type="text" id="item7" hidden="true" value="0">
  <input type="text" id="item8" hidden="true" value="0">
  <input type="text" id="item9" hidden="true" value="0">
  <input type="text" id="item10" hidden="true" value="0">

    <!--input boxes for items-->
    <input type="text" id="qty1" hidden="true" value="0">
    <input type="text" id="qty2" hidden="true" value="0">
    <input type="text" id="qty3" hidden="true" value="0">
    <input type="text" id="qty4" hidden="true" value="0">
    <input type="text" id="qty5" hidden="true" value="0">
    <input type="text" id="qty6" hidden="true" value="0">
    <input type="text" id="qty7" hidden="true" value="0">
    <input type="text" id="qty8" hidden="true" value="0">
    <input type="text" id="qty9" hidden="true" value="0">
    <input type="text" id="qty10" hidden="true" value="0">

    <!--name,mobile,vilage-->
    <?php  echo "<input type='hidden' id='name' value='$name'/>";	
    echo "<input type='hidden' id='txtPhoneNo' value='$mobile'/>";
    echo "<input type='hidden' id='village' value='$village'/>";
    
    
    
    
    ?>

  <!--on page scripts-->
  <script >

    
    var total= 0;
    var items= 0;

    var productList = [];
    var qtyList = [];


    function onProduct(pid){
      
        //get vals
        var clr = document.getElementById(pid).style.borderColor;
        var productVal = parseFloat(document.getElementById(pid+ '-val').innerHTML); //product price
        var productName = document.getElementById(pid+ '-name').innerHTML; //product name
        var productQty = document.querySelector('input[name="optradio"]:checked');
        //testing
        //console.log(productVal);
        //console.log(productName);
        //console.log(productQty);

        if (productQty != null){
          if(items>-1 && items<10){
             //actions
             document.getElementById(pid).style.borderColor= "#008000";
              document.getElementById(pid).style.borderWidth = "3px";

              total += (productVal*parseFloat(productQty.value));
              items ++;
              productList.push(productName);
              qtyList.push(productQty.value);
           
              //final settings
              document.getElementById('totalamt').innerHTML = 'රු.' + total;
              document.getElementById('totalitem').innerHTML = 'භාණ්ඩ ' + items ;
              document.getElementById(pid+'-sel').style.display="block";
              $("#"+pid + "-m").modal('hide');
          }
          else{
            window.alert('ඔබ උපරිම භාණ්ඩ සීමාවට ලබා ගෙන ඇත. තවත් භාණ්ඩ එකතු කළ නොහැක!')
          }
             
              
 
          }
          else{
            window.alert("කරුණාකර ප්‍රමාණය තෝරන්න");
          }
        }

  
    function changeColor(pid){
      
      var bwidth = document.getElementById(pid).style.borderWidth;
      var productVal = parseFloat(document.getElementById(pid+ '-val').innerHTML); //product price
      var productName = document.getElementById(pid+ '-name').innerHTML; //product name
      var productIndex = productList.indexOf(productName);
      $("#"+pid).attr("data-target","#"+pid+"-m");

      if (bwidth == "3px"){

        window.alert('භාණ්ඩය ඉවත් කළා');
        $("#"+pid).removeAttr("data-target");
        document.getElementById(pid).style.borderColor= "#FFFFFF";
        document.getElementById(pid).style.borderWidth = "0px";

        
        var productQty = qtyList[parseInt(productIndex)];

        total -= (productVal*parseFloat(productQty));
        items --;

       
        productList.splice(productIndex,1);
        qtyList.splice(productIndex,1);

         //final settings
        document.getElementById('totalamt').innerHTML = 'රු.' + total;
        document.getElementById('totalitem').innerHTML = 'භාණ්ඩ ' + items ;
        document.getElementById(pid+'-sel').style.display="none";
      }
    }


    function orderProducts(){
      j=1;
      productList.forEach((i) => {
        document.getElementById('item'+j).value=i;
        console.log('item '+ document.getElementById('item'+j).value);
        j++;
      });

      k=1;

      qtyList.forEach((l) => {
        document.getElementById('qty'+k).value=l;
        console.log('qty '+ document.getElementById('qty'+k).value);
        k++;
      });
     
     // window.alert("භාණඩ ඇනවුම සාර්ථකයි. පැය 2කට අඩු කාලයක් තුළ ඇනවුම සකසා ඔබ වෙත කෙටි පණිවුඩයක් මගින් දන්වනු ඇති.");

      setTimeout(() => {
        savedata();
      }, 1000);
    }

  function findonPage(id){
      var sText = document.getElementById(id).value;
      window.find(sText);
      
  }

    function check(id) {
        document.getElementById(id).checked = true;
    }
                    
           
function savedata(){

  setTimeout(function(){
	var tot=$('#totalamt').html();
//  alert(tot);
    var item1=$('#item1').val();
  var qty1=$('#qty1').val();
  var item1=item1+","+qty1;

  var item2=$('#item2').val();
  var qty2=$('#qty2').val();
  var item2=item2+","+qty2;

  var item3=$('#item3').val();
  var qty3=$('#qty3').val();
  var item3=item3+","+qty3;

  var item4=$('#item4').val();
  var qty4=$('#qty4').val();
  var item4=item4+","+qty4;

  var item5=$('#item5').val();
  var qty5=$('#qty5').val();
  var item5=item5+","+qty5;

  var item6=$('#item6').val();
  var qty6=$('#qty6').val();
  var item6=item6+","+qty6;

  var item7=$('#item7').val();
  var qty7=$('#qty7').val();
  var item7=item7+","+qty7;

  var item8=$('#item8').val();
  var qty8=$('#qty8').val();
  var item8=item8+","+qty8;

  var item9=$('#item9').val();
  var qty9=$('#qty9').val();
  var item9=item9+","+qty9;


  var item10=$('#item10').text();
  var qty10=$('#qty10').text();
  var item10=item10+","+qty10;


var name=$('#name').val();


var mobile=$('#txtPhoneNo').val();

 
var city=$('#village').val();

var shop=$('#shop option:selected').text();



  //alert(accNo);
  var param = "event=Load&name=" + name + "&mobile=" + mobile + "&city=" + city+ "&item1=" + item1
  + "&item2=" + item2+ "&item3=" + item3+ "&item4=" + item4+ "&item5=" + item5 + "&item6=" + item6+ "&item7=" + item7
  + "&item8=" + item8+ "&item9=" + item9+ "&item10=" + item10+"&tot=" + tot;
						$.ajax
						(
						  {
							type: "POST",
							url: "model/makeorder.php",
							data : param,
							dataType: "text",
							success: function(xml)
							{
	//	alert(xml);
								if(xml !="")
								{
                  var field = xml.split('^%#+^');

                  var status=field[0];
                  if(status==1){
                    window.alert("භාණඩ ඇනවුම සාර්ථකයි. පැය 2කට අඩු කාලයක් තුළ ඇනවුම සකසා ඔබ වෙත කෙටි පණිවුඩයක් මගින් දන්වනු ඇති.");
                    location.reload(); 
                  }
              

                  
               


                  
                  
                 
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

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
