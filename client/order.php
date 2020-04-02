
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
    <script src="https://use.fontawesome.com/e07a5c023d.js"></script>
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
<body onload="createProduct()">

    <!--navbar-->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-primary">
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" style="height:40px;"></a>
        <a data-toggle="modal" data-target="#productCart" role="button" style="font-size:36px; font-weight:bold; color:white;"  onclick="showCart()" alt="භාණ්ඩ එකතුව"><i class="fa fa-cart-plus"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span style="font-weight:bold; color:white;"><i class="fa fa-search"></i></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
              <li></li>
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
                <option value="cat1">අත්‍යවශ්‍යය භාණ්ඩ</option>
              </select>
            </div>
          </div>
          </form>
       </div>
  
       <hr>
       
        <div class="row row-cols-2 row-cols-md-6 "  id="productCards" style="padding:20px; padding-top:0; padding-bottom:80px;">
            
            
         

          </div>
    </div>
   <!--php here -->
    <?php 

    $i=0;   
    $ids= [];
    $names = [];
    $prices=[];
    $qt=[];
    $img=[];

            
    require'conn.php';
    $query1 = "SELECT id FROM product";  
    $result1 = mysqli_query($conn, $query1);
    if ($result1) 
    { 
        $row1 = mysqli_num_rows($result1); 
        //   print_r($row1);  
        $r=0;
    } 
       
          
   
 
         
    $result = $conn->query("SELECT * FROM `product`");
 
    while( $row = $result->fetch_assoc() ) {
        
    $ids[$i]=$row['id'];
    $names[$i]=$row['name'];
    $prices[$i]=$row['price'];
    $qt[$i]=$row['qtunit'];
    $img[$i]= $row['img'];
    $i++;

    }
    

?>


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


    <div id="productSelectors">
     
      
    </div>

                                                    <!-- cart modal-->
                                                    <div class="modal fade" id="productCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                      <div class="modal-content" id="cardModal">
                                                                       
                                                                      </div>
                                                                    </div>
                                                                  </div>`

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
    
    
    var products = [];
    var prices = [];
    var qtyCls = [];
    var img = [];
    
     <?php foreach($names as $key => $val){ ?>
        products.push('<?php echo $val; ?>');
    <?php } ?>
    
     <?php foreach($prices as $key => $val){ ?>
        prices.push('<?php echo $val; ?>');
    <?php } ?>
    
     <?php foreach($qt as $key => $val){ ?>
        qtyCls.push('<?php echo $val; ?>');
    <?php } ?>
    
    <?php foreach($img as $key => $val){ ?>
        img.push('<?php echo $val; ?>');
    <?php } ?>
    
    //var products = ['සුදු කැකුලු ', 'රතු කැකුලු','කීරි සම්බා ','සීනී','රට ලූණු ','සිලෝන්ටා 50g','වටවල 50g','ලාඕජි 50g','සොයාමීට් 50g','දඩයම් බට්ටා 70g','ලංකා සෝයි 80g ','කෑලි මිරිස් 100g','මිරිස් කුඩු 100g','ගම්මිරිස් 50g','ගෝල්ඩ්මාරි 330g','මැලිබන් චොකලට් බිස්කට් 400g','කීම් කැකර් 330g','කීම්කැකැර් 500g','ෆීමා කොත්තූමී','මැගී','හැපිකව් චීස් කෑලී 8 ','ස්කෑන් ජම්බෝ ෆීනට් 45g','අලියා බීම ක්‍රීම් සෝඩා','අලියා බීම ඔරේන්ජ් ක්‍රශ්','අලියා බීම ජින්ජර් බියර්','සන්ලයිට් ','ලයිට්බෝයි සබන්'];
    //var prices = [98,86,145,110,150,65,65,50,30,60,75,84,84,100,150,220,150,190,55,55,320,90,200,200,200,50,53];
    //var qtyCls = [1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        

    function onClickText(pid){
        document.getElementById('anySel'+pid).checked = true;

    }
    
    function showCart(){
        
        if (productList.length == 0){
           document.getElementById('cardModal').innerHTML = `
                                                                         <div class="modal-header">
                                                                          <h5 class="modal-title" id="exampleModalCenterTitle">ඇණවුම් ලැයිස්තුව</h5>
                                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                          </button>
                                                                        </div>
                                                                        <div class="modal-body"  style="font-weight:bold; font-size:18px; white-space:15px;"  >
                                                                  
                                                                                    <div style="padding-top:60px; padding-bottom:60px; color:gray; padding:10px;" class="text-center">
                                                                                            ඔබ තවමත් භාණ්ඩ කිසිවක් තොරගෙන නොමැත
                                                                                       </div>  
                                                                               
                                                                         </div>
                                                                        <div class="modal-footer text-center">
                                                                        <button type="button" class="btn btn-primary" onclick="orderProducts()" disabled>තහවුරු කරන්න </button>
                                                                        <button type="button" class="btn btn-danger" onclick="cancelProducts()" disabled>ඉවත් කරන්න</button>
                                                                      </div>
           
           `;
        }else{
             document.getElementById('cardModal').innerHTML = `
                                                                         <div class="modal-header">
                                                                          <h5 class="modal-title" id="exampleModalCenterTitle">ඇණවුම් ලැයිස්තුව</h5>
                                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                          </button>
                                                                        </div>
                                                                        <div class="modal-body"  style="font-weight:bold; font-size:18px; white-space:15px;"  >
                                                                              <div style="padding:10px;">
                                                                                        <table class="table table-hover table-responsive" style="width:100%;">
                                                                                            <thead style="width:100% !important;">
                                                                                              <tr >
                                                                                                <th scope="col" >භාණ්ඩයේ නම</th>
                                                                                                <th scope="col" >ප්‍රමාණය</th>
                                                                                              </tr>
                                                                                            </thead>
                                                                                            <tbody id="cardTable">
                                                                                            
                                                                                            </tbody style="width:100%; !important;">
                                                                                            </table>
                                                                                    </div>   
                                                                                    
                                                                         </div>
                                                                        <div class="modal-footer text-center">
                                                                        <button type="button" class="btn btn-primary" onclick="orderProducts()" data-dismiss="modal">තහවුරු කරන්න </button>
                                                                        <button type="button" class="btn btn-danger" onclick="cancelProducts()" data-dismiss="modal" >ඉවත් කරන්න</button>
                                                                      </div>
           
           `;
           
        for (product in productList){
        document.getElementById('cardTable').innerHTML += `
            <tr>
                <td> ${productList[product]} </td>
                <td> ${qtyList[product]} </td>
            </tr>
        `;
        }
        }
    }
    
    function cancelProducts(){
        productList = [];
        qtyList = [];
        window.alert('තෝර ගත් භාණ්ඩ සියල්ල ඉවත් කළා');
    }
    
    function generatePDF(name,telNo,orderId) {
        
        var doc = new jsPDF();
       
        doc.setFontSize(24);
        doc.text("Your Order Details", 20, 20);
        
        doc.setFontSize(19);
        doc.text("Your Name : " + name, 20, 40);
        
        doc.setFontSize(19);
        doc.text("Your Mobile No : "+ telNo, 20, 50);
        
        doc.setFontSize(19);
        doc.text("Your Order ID : "+ orderId, 20, 60);
        
        doc.setFontSize(14);
        doc.text("Keep this order ID Safe. For any Inquries call the Shop Owner", 20, 80);
        
        doc.setFontSize(19);
        doc.text("Call : 071 1122333" , 20, 90);
        
        doc.save('ඇණවුම් විස්තරය.pdf');
    }
    

    function onProduct(pid){
      
        //get vals
        var clr = document.getElementById(pid).style.borderColor;
        var productVal = parseFloat(document.getElementById(pid+ '-val').innerHTML); //product price
        var productName = document.getElementById(pid+ '-name').innerHTML; //product name
        var productQty = document.querySelector('input[name="optradio'+pid+'"]:checked');
        var otherAmount = document.getElementById('any'+pid).value;
        //testing
        //console.log(productVal);
        //console.log(productName);
        //console.log(productQty);

        if (productQty != null ){
          if(items>-1 && items<10){
            

              if (productQty.value == "any" && otherAmount<=5){
                  total += (productVal * parseFloat(otherAmount));
                  qtyList.push(otherAmount);
              } else if (productQty.value == "any" && otherAmount>5){
                  window.alert('ලබා ගත හැකි උපරිම ප්‍රමාණය ඒකක 5ක් පමණි');
                  return;
              }
              else{
                 total += (productVal*parseFloat(productQty.value)); 
                 qtyList.push(productQty.value);
              }
              
              items ++;
              productList.push(productName);
              
               //actions
                document.getElementById(pid).style.borderColor= "#008000";
                document.getElementById(pid).style.borderWidth = "3px";
           
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
    
    function createProduct(){
        
        
        j=1;
        
        for (var product in products){
             document.getElementById("productCards").innerHTML += `<div class="col mb-2">
                                            <div class="card shadow-sm" id="p${j}" type="button" data-toggle="modal" data-target="#p${j}-m" onclick = "changeColor('p${j}')">
                                             <img src="img/products/${img[j-1]}" class="card-img-top" style="height:130px; width:100%;">
                                            <div class="card-body" style="text-align:center;">
                                              <b><h5 class="card-title" id="p${j}-name"> ${products[j-1]} </h5></b>
                                              <p class="card-text" >රු. <span id="p${j}-val"> ${prices[j-1]}  </span></p>
                                              <img src="img/tick.png" style="width:20px; margin:0 auto;" alt="selected" id="p${j}-sel" class="selimg">
                                            </div>
                                          </div>
                                          </div>`;
            
            if(qtyCls[product]== 1){                          
             document.getElementById("productSelectors").innerHTML +=  `<div class="modal fade" id="p${j}-m" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                      <div class="modal-content">
                                                                        <div class="modal-header">
                                                                          <h5 class="modal-title" id="exampleModalCenterTitle">ප්‍රමාණය (Pcs/Kg/Ltr/m)</h5>
                                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                          </button>
                                                                        </div>
                                                                        <div class="modal-body" style="font-weight:bold; font-size:18px; white-space:15px;"  >
                                                                                <div class="form-check" >
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="0.25" name="optradiop${j}" value="0.25"> 1/4 (0.25)
                                                                                    </label>
                                                                                  </div>
                                                                                  <hr>
                                                                                  <div class="form-check" >
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="0.5" name="optradiop${j}" value="0.5"> 1/2 (0.5)
                                                                                    </label>
                                                                                  </div>
                                                                                  <hr>
                                                                                
                                                                                  <div class="form-check " >
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="1.0" name="optradiop${j}" value="1" > 1 
                                                                                    </label>
                                                                                  </div>
                                                                                  <hr>
                                                                                  <div class="form-check " >
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="1.5" name="optradiop${j}" value="1.5" > 1.5
                                                                                    </label>
                                                                                  </div>
                                                                                  <hr>
                                                                                  <div class="form-check " >
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="2.0" name="optradiop${j}" value="2"> 2
                                                                                    </label>
                                                                                  </div>
                                                                                  <hr>
                                                                                  <div class="form-check " >
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="2.5" name="optradiop${j}" value="2.5"> 2.5
                                                                                    </label>
                                                                                  </div>
                                                                                  <hr>
                                                                                  <div class="form-check " >
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="3.0" name="optradiop${j}" value="3" > 3
                                                                                    </label>
                                                                                  </div>
                                                                                  <hr>
                                                                                  <div class="form-check " >
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="5.0" name="optradiop${j}" value="5" > 5
                                                                                    </label>
                                                                                  </div>
                                                                                  <hr>
                                                                                 
                                                                                    <div class = "form-check ">
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="anySelp${j}" name="optradiop${j}" value="any" > වෙනත් ප්‍රමාණයක්
                                                                                    </label>
                                                                                    <input type="number" id="anyp${j}" name="potradiop${j}" onclick="onClickText('p${j}')" min="0" >
                                                                                  </div>
                                                                       
                                                                       
                                                                                  
                                                                        </div>
                                                                        <div class="modal-footer text-center">
                                                                        <button type="button" class="btn btn-primary" onclick="onProduct('p${j}')" style="margin:0 auto;" >තෝරන්න</button>
                                                                      </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>`;
            }
            else if (qtyCls[product]== 0){
                  document.getElementById("productSelectors").innerHTML +=  `<div class="modal fade" id="p${j}-m" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                      <div class="modal-content">
                                                                        <div class="modal-header">
                                                                          <h5 class="modal-title" id="exampleModalCenterTitle">ප්‍රමාණය (Pcs/Kg/Ltr/m)</h5>
                                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                          </button>
                                                                        </div>
                                                                        <div class="modal-body" style="font-weight:bold; font-size:18px; white-space:15px;"  >
                                                                                
                                                                                  <div class="form-check " >
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="1" name="optradiop${j}" value="1" > 1 
                                                                                    </label>
                                                                                  </div>
                                                                                  <hr>
                                                                                
                                                                                  <div class="form-check " >
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="2" name="optradiop${j}" value="2"> 2
                                                                                    </label>
                                                                                  </div>
                                                                                  <hr>
                                                                                 
                                                                                  <div class="form-check " >
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="3" name="optradiop${j}" value="3" > 3
                                                                                    </label>
                                                                                  </div>
                                                                                  <hr>
                                                                                  <div class="form-check " >
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="4" name="optradiop${j}" value="4"> 4
                                                                                    </label>
                                                                                  </div>
                                                                                  <hr>
                                                                                  <div class="form-check " >
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="5" name="optradiop${j}" value="5"> 5
                                                                                    </label>
                                                                                  </div>
                                                                                  <hr>
                                                                                     <div class = "form-check ">
                                                                                    <label class="form-check-label" style="width:100%; text-align:left;">
                                                                                      <input type="radio" class="form-check-input" id="anySelp${j}" name="optradiop${j}" value="any" > වෙනත් ප්‍රමාණයක්
                                                                                    </label>
                                                                                    <input type="number" id="anyp${j}" name="potradiop${j}" onclick="onClickText('p${j}')" min="0" >
                                                                                  </div>
                                                                       
                              
                                                                               
                                                                        </div>
                                                                        <div class="modal-footer text-center">
                                                                        <button type="button" class="btn btn-primary" onclick="onProduct('p${j}')" style="margin:0 auto;" >තෝරන්න</button>
                                                                      </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>`;
                
            }
            j++;
        }
        
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
                   var id=field[1];
                  var name=field[2];
                       var mobile=field[3];
                  if(status==1){
                    window.alert("භාණඩ ඇනවුම සාර්ථකයි. පැය 2කට අඩු කාලයක් තුළ ඇනවුම සකසා ඔබ වෙත කෙටි පණිවුඩයක් මගින් දන්වනු ඇති.");
                    generatePDF(name, mobile, id);
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
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
