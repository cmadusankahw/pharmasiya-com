<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Shopping</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    #j1{
      display:block;
    }
    #j2{
      display:none;
    }
    #j3{
      display:none;
    }
  </style>
  </head>
<body>
    
    <!--titlebar-->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-primary">
        <a class="navbar-brand" href="#">Grocery Shopping</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">උපදෙස්<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="select.php">භාණ්ඩ තෝරන්න</a>
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
  
      <main role="main">
  
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron jumbotron-info" id="j1" >
          <div class="text-center" style="padding-top:20px;">
            <h2><b>
              ආයුබෝවන්
            </b></h2>
            <div id="h1" onclick="showJumb('j1','j2')">
            <div class="pd-t text-center" style="padding-top:20px;">
                <img src="img/left.svg"  alt="go left" style="margin:0 auto; width:40px; padding-right:10px;" disabled >
              <img src="img/h1.jpg" class="shadow" alt="instruction 1" style="margin:0 auto; width:240px; border-radius:50%">
               <img src="img/right.svg"  alt="go right" style="margin:0 auto; width:40px; padding-left:10px;" >
            </div>  
            <div class="pd-t text-center" style="padding-top:40px;"  onclick="showJumb('j1','j2')">
              <p>පෝලිම් වල රැදී සිටීමෙන් ඇතිවන තදබදය, අවදානම ම්ග හරවා ගන්න</p>
              <p>ඔබට අවශ්ය සියලු සිල්ලර භාණ්ඩ, වෙළද සැලට පිවිසීමට පෙර නිවසේ සිටම ඉල්ලුම් කර තබන්න</p>
               <div style="padding-top:35px;">
                <p><a class="btn btn-primary btn-md" href="select.php" role="button">Skip &raquo;</a></p>
               </div>  
            </div> 
          </div>       
            </div>
          </div>
 

         <!-- Main jumbotron for a primary marketing message or call to action -->
         <div class="jumbotron  jumbotron-info" id="j2" >
          <div class="text-center" style="padding-top:20px;">
            <h2><b>
              ආයුබෝවන්
            </b></h2>
            <div id="h1" onclick="showJumb('j2','j3')">
            <div class="pd-t text-center" style="padding-top:20px;">
                 <img src="img/left.svg"  alt="go left" style="margin:0 auto; width:40px; padding-right:10px;" >
              <img src="img/h2.png" class="shadow" alt="instruction 2" style="margin:0 auto; width:240px; border-radius:50%">
              <img src="img/right.svg"  alt="go right" style="margin:0 auto; width:40px; padding-left:10px;">
            </div>  
            <div class="pd-t text-center" style="padding-top:40px;" onclick="showJumb('j2','j3')">
              <p>මෙම වෙබ් පිටුව හරහා ඔබට අවශ්ය භාණ්ඩ තෝරා වෙන් කර තැබීම සදහා ඉල්ලුම් කළ හැකිය</p>
              <p>ඒ සදහා පළමුව ඔබේ නගරය සහ අදාළ වෙළද සැල තෝරන්න. ඉන් පසුව අවශ්ය භාණ්ඩ තෝරන්න.</p>
               <div style="padding-top:35px;">
                <p><a class="btn btn-primary btn-md" href="select.php" role="button">Skip &raquo;</a></p>
               </div>  
            </div> 
          </div>       
            </div>
          </div>


         <!-- Main jumbotron for a primary marketing message or call to action -->
         <div class="jumbotron  jumbotron-info" id="j3">
          <div class="text-center" style="padding-top:20px;">
            <h2><b>
              ආයුබෝවන්
            </b></h2>
            <a href="select.php">
            <div id="h1" >
            <div class="pd-t text-center" style="padding-top:20px;">
                 <img src="img/left.svg"  alt="go left" style="margin:0 auto; width:40px; padding-right:10px;">
              <img src="img/h3.png" class="shadow" alt="instruction 3" style="margin:0 auto; width:240px; border-radius:50%">
              <img src="img/right.svg"  alt="go right" style="margin:0 auto; width:40px; padding-left:10px;">
            </div>  
            <div class="pd-t text-center" style="padding-top:40px;" >
              <p>භාණ්ඩ තෝරා තහවුරු කිරීමෙන් පසු sms පණිවුඩයක් මගින් භාණ්ඩ සූදානම් බව දැනුම් දෙනු ඇති.</p>
              <p>sms පණිවුඩය ලැබීමෙන් පසු වෙළද සැලට ගොස් එම භාණ්ඩ මිලදී ගන්න හෝ ගෙදරටම ගෙන්වා ගන්න.</p>
               <div style="padding-top:25px;">
                <p><a class="btn btn-primary btn-md" href="select.php" role="button">Skip &raquo;</a></p>
               </div>  
            </div> 
          </div>   
          </a>    
            </div>
          </div>

  
  

  
      </main>
  
      <footer class="container text-center">
        <p>Developd By &copy; Accseedd 2020</p> 
      </footer>
  

      <!--jumbortan navigation-->
      <script>
        function showJumb(id1,id2){
          console.log('trigged');
          document.getElementById(id1).style.display= "none";
          document.getElementById(id2).style.display= "block";
        }
      </script>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="module">
    import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

const el = document.createElement('pwa-update');
document.body.appendChild(el);
</script>
</body>
</html>