
<?php
session_start();
if(isset($_SESSION['userid'])){
  header('refresh:1; home.php');
}else{



}?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharmasiya.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    <style>
    
    
   

    
        .login{
  min-height: 100vh;
  background-color: #f7f7f7;
}
.login .login-page{
  height: 100vh;display: flex;align-items: center;
}
.login .login-sidebar, .login-form-wrapper{
  background: #fff;height: 80vh;
}
.login .login-sidebar{
  background:  url('https://i.ibb.co/xLmg3Rv/logo.jpg')center center no-repeat;
  background-size:auto;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}
.login .login-sidebar::before{
  content: '';
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
  z-index: 1;
	background-image: linear-gradient(to bottom right,#21AEA2,#6472A5);
	opacity: .7;
}
.login .login-sidebar .login-gradient-background{
  position: absolute;z-index: 2;
}
.login .login-sidebar .login-gradient-background h1{
  font-size: 2em;font-weight: 600;text-transform: uppercase;color: #ffffff;
}

.login-form-wrapper .register-btn a{
  color: #ffffff;border-radius: 18px;padding: 0.57em 2em;background: #21AEA2;
}
.login-form-wrapper .register-btn a:hover{
  opacity: .8;
}
.field-box .field{margin-bottom: 2.1em;}
.login-form-wrapper .field-box{
  display: flex;
  height: 80%;
  align-items: center;
}
.login-form-wrapper .field-box .login-heading{
  font-size: 1.95em;
}
.login-form-wrapper .field-box .login-subheading{
  margin-bottom: 2em;font-size: 0.85em;color: #787877;
}

.login-form-wrapper .field-box .login-btn-group .login-btn{
  background: #6472A5;color: #ffffff;border-radius: 18px;padding: 0.57em 2em;
}
.login-form-wrapper .field-box .login-btn-group .forgot-link{
  color: #777777;font-size: 0.85em;
}
.login-form-wrapper .field-box .login-btn-group .forgot-link:hover{
  color: #444444;font-size: 0.85em;
}
    </style>
  </head>
  <body>
  <section class="login is-fullheight">
      <div class="login-body">
        <div class="container v-middle">
          <div class="columns login-page">
              <div class="column is-7 login-sidebar is-hidden-mobile">
                <div class="login-gradient-background">
                  <h1>Login</h1>
                </div>
              </div>
              <div class="column is-7 login-form-wrapper">
                
                <div class="column is-12 field-box">
                  <div class="column is-7 is-offset-1">
                    <h1 class="login-heading">Welcome to Pharmasiya.com</h1>
                    <p class="login-subheading">We support the Sri Lankan community to prevent the spread of covid 19 by reducing the waiting lines in consumer good shops </p>
                    <form method="POST" action="login.php">
                      <div class="field">
                        <p class="control has-icons-left has-icons-right">
                          <input class="input is-medium" type="text"  id="regid" placeholder="Registration Number" value="" name="regid" autofocus="" required>
                          <span class="icon is-medium is-left">
                            <i class="fa fa-envelope"></i>
                          </span>
                          <span class="icon is-small is-right">
                            <i class="fa fa-check"></i>
                          </span>
                        </p>
                      </div>
                      <div class="field">
                        <p class="control has-icons-left has-icons-right">
                          <input class="input is-medium" type="password" id="password" placeholder="Password" name="password" required>
                          <span class="icon is-medium is-left">
                            <i class="fa fa-lock"></i>
                          </span>
                          <span class="icon is-small is-right">
                            <i class="fa fa-eye"></i>
                          </span>
                        </p>
                      </div>
                      <div class="field is-grouped is-grouped-centered login-btn-group">
                        <p class="control">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Login</button>
                           
                          </a>
                        </p>
                        <p class="control "><br>
                       
                        </p>
                        <div class=" has-text-right register-btn" id="btn">
                         
                          </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <div class="modal" id="myModal">
                <div class="modal-background"></div>
                <div class="modal-card">
                  <header class="modal-card-head">
                    <p class="modal-card-title">Registation Form</p>
                    <button class="delete" aria-label="close" data-bulma-modal="close"></button>
                  </header>
                   <div class="form">
                        <section class="modal-card-body">
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control">
                                <input class="input" type="text" placeholder="Text input">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">National ID</label>
                                <div class="control">
                                <input class="input" type="text" placeholder="Text input">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Mobile Number</label>
                                <div class="control">
                                <input class="input" type="text" placeholder="Text input">
                                </div>
                            </div>
                        </section>
                        <footer class="modal-card-foot">
                            <button class="button is-success">Register</button>
                            <button class="button" data-bulma-modal="close">Cancel</button>
                        </footer>
                    </div>
                </div>
              </div>
              <!-- is-8 ends -->
          </div>
        </div>
        <!-- div.container ends -->
      </div>
  </section>
  </body>
  <script>
      class BulmaModal {
	constructor(selector) {
		this.elem = document.querySelector(selector)
		this.close_data()
	}
	
	show() {
		this.elem.classList.toggle('is-active')
		this.on_show()
	}
	
	close() {
		this.elem.classList.toggle('is-active')
		this.on_close()
	}
	
	close_data() {
		var modalClose = this.elem.querySelectorAll("[data-bulma-modal='close'], .modal-background")
		var that = this
		modalClose.forEach(function(e) {
			e.addEventListener("click", function() {
				
				that.elem.classList.toggle('is-active')

				var event = new Event('modal:close')

				that.elem.dispatchEvent(event);
			})
		})
	}
	
	on_show() {
		var event = new Event('modal:show')
	
		this.elem.dispatchEvent(event);
	}
	
	on_close() {
		var event = new Event('modal:close')
	
		this.elem.dispatchEvent(event);
	}
	
	addEventListener(event, callback) {
		this.elem.addEventListener(event, callback)
	}
}

var btn = document.querySelector("#btn")
var mdl = new BulmaModal("#myModal")

btn.addEventListener("click", function () {
	mdl.show()
})

mdl.addEventListener('modal:show', function() {
	console.log("opened")
})

mdl.addEventListener("modal:close", function() {
	console.log("closed")
});



function login(){


 var uname= document.getElementById('uname').value;
 var pass= document.getElementById('password').value;

 

  </script>
</html>