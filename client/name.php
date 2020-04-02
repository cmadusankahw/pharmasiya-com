<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Shopping</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body onload="showstat()">

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
              <a class="nav-link" href="name.php">භාණ්ඩ තෝරන්න</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">වැඩි විස්තර</a>
              </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">සොයන්න</button>
          </form>
        </div>
      </nav>

      <div class="container-fluid text-center" style="padding-top:30px; width:80%">

        <div class="text-center" style="padding-top:15px;">
            <h3><b>ඔබගේ විස්තර</b></h3>
           </div>
           <hr>

        <form id="shopSel" action="order.php" method="POST" >
        <div class="form-group" style="padding-top:45px;">
            <b><label for="nameInput">ඔබේ නම</label></b>
            <input type="text" class="form-control" id="nameInput" name="nameInput" title="නම ඇතුළත් කරන්න." aria-describedby="nameemailHelp"  required>
          </div>
          <div class="form-group" style="padding-top:30px;">
            <b><label for="telInput">ඔබේ දුරකථන අංකය</label></b>
            <input type="text" class="form-control" id="telInput" name="telInput" pattern="[0-9]{10}" title="දුරකතන අන්කයට ඉලක්කම් 10ක් විය යුතුය."aria-describedby="nameemailHelp"  required>
          </div>
          <div class="form-group" style="padding-top:30px;">
            <b><label for="areaInput">ඔබ පදින්චි ප්‍රදේශය</label></b>
            <input type="text" class="form-control" id="areaInput" name="areaInput" title="ප්‍රදේශය ඇතුලත් කරන්න." aria-describedby="nameemailHelp"  required>
          </div>
      

        <div style="padding-top:25px;">
            <p><button class="btn btn-primary btn-lg" type="submit">ඉදිරියට යන්න &raquo;</button></p>
           </div>  
           </form>
    </div>

    <footer class="container text-center">
       <hr>
      <p>Developd By &copy; Accseedd 2020</p> 
      </footer>
  

    <script>
        function showstat(){
            window.alert(`කරුණාකර තොරතුරු  අතුලත් කිරීමේදී නිවැරදි තොරතුරු පමණක් අතුලත් කිරීමට කාරුණික වන්න.එසේ නොමැති  වුවහොත් ඔබ නිසා තව කෙනෙකුට 
සේවයක් ලබා දීමට තිබෙන කාලයක් අපතේ යා හැකිය.`);
        }
    </script>

      
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    </body>
    </html>
    