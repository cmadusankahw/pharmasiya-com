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
            <h3><b>ෆාමසිය තෝරන්න​  </h3>
           </div>
           <hr>


        <form id="shopSel" action="send.php" method="POST" >
        <div class="form-group" style="padding-top:45px;">
            <b><label for="seltown">දිස්ත්‍රික්කය</label></b>
            <select class="form-control" id="distric" name="distric">
              <option value="කොළඹ">කොළඹ</option>
              <option value="ගම්පහ​">ගම්පහ​</option>
              <option value="කලුතර">කලුතර</option>
              <option value="නුවර​">නුවර​</option>
              <option value="මාතලේ">මාතලේ</option>
              
              <option value="නුවර එලිය​">නුවර එලිය​</option>
              <option value="ගාල්ල​​">ගාල්ල​</option>
              <option value="මාතර​">මාතර​</option>
              <option value="හම්බන්තොට​​">හම්බන්තොට​​</option>
              <option value="යාපනය​">යාපනය​</option>


              <option value="කිලිනොච්චිය​​">කිලිනොච්චිය​​</option>
              <option value="මන්නාරම​">මන්නාරම​​</option>
              <option value="වව්නියාව​​">වව්නියාව​​</option>
              <option value="මුලතිව්​​">මුලතිව්</option>
              <option value="පුත්තලම​">පුත්තලම​​</option>


              <option value="අම්පාර​​​">අම්පාර​</option>
              <option value="ත්‍රිකුණාමලය​​">ත්‍රිකුණාමලය​​​</option>
              <option value="කුරුණෑගල​​​">කුරුණෑගල​</option>
              <option value="මඩකලපුව​">මඩකලපුව​</option>
              <option value="අනුරාධපුරය">අනුරාධපුරය</option>

              <option value="පොලොන්නරුව​​">​​​පොලොන්නරුව​</option>
              <option value="බදුල්ල​​​">බදුල්ල​​​​</option>
              <option value="මොනරාගල​">මොනරාගල​​</option>
              <option value="රත්නපුර​​">රත්නපුර​</option>
              <option value="කෑගල්ල​">කෑගල්ල​</option>
              

            </select>
          </div>
          
        <div class="form-group" style="padding-top:45px;">
            <b><label for="nameInput">ඔබේ නම</label></b>
            <input type="text" class="form-control" id="nameInput" name="nameInput" title="නම ඇතුළත් කරන්න." aria-describedby="nameemailHelp"  required>
          </div>
          <div class="form-group" style="padding-top:30px;">
            <b><label for="telInput">ඔබේ දුරකථන අංකය</label></b>
            <input type="text" class="form-control" id="telInput" name="telInput" pattern="[0-9]{10}" title="දුරකතන අන්කයට ඉලක්කම් 10ක් විය යුතුය."aria-describedby="nameemailHelp"  required>
          </div>
         
          <div class="form-group" style="padding-top:45px;">
            <b><label for="nameInput">ඔබගේ ලිපිනය​</label></b>
            <input type="text" class="form-control" id="address" name="address" title="ඔබගේ ලිපිනය​."   required>
          </div>

        <div style="padding-top:25px;">
            <p><button class="btn btn-primary btn-lg" name="submit" id="submit" type="submit">ඉදිරියට යන්න &raquo;</button></p>
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
    
    </body>
    </html>
    