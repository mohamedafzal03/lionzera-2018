<?php

include("header.php");

?>
<title>Login | Futura'17</title>
<style>
/*******************************
* MD DIALOG - MATERIAL DESIGN
* Add "modal-sm" after "modal-dialog" class for smaller dialog.
* Get free snippets on bootpen.com
*******************************/
/* ----- IMPORT ROBOTO FONT FOR MD ----- */
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100);

/* ----- DIALOG/MODAL ----- */
/* FADE/SCALE EFFECT */
	.modal.fade .modal-dialog {
		opacity: 0;
		-webkit-transform: scale(0.1);
			-ms-transform: scale(0.1);
			 -o-transform: scale(0.1);
				transform: scale(0.1);
		-webkit-transition: all 0.3s ease;
		   -moz-transition: all 0.3s ease;
			 -o-transition: all 0.3s ease;
				transition: all 0.3s ease;
	}

	.modal.fade.in .modal-dialog {
		opacity: 1;
		-webkit-transform: scale(1);
			-ms-transform: scale(1);
			 -o-transform: scale(1);
				transform: scale(1);
		-webkit-transform: translate3d(0%, 0, 0);
			-ms-transform: translate3d(0%, 0, 0);
			 -o-transform: translate3d(0%, 0, 0);
				transform: translate3d(0%, 0, 0);
	}

/* DIALOG CONTENT */
	.modal-content {
		border: none;
		border-radius: 2px;
		-webkit-box-shadow: 0 40px 77px rgba(0, 0, 0, 0.22), 0 27px 24px rgba(0, 0, 0, 0.2);
		   -moz-box-shadow: 0 40px 77px rgba(0, 0, 0, 0.22), 0 27px 24px rgba(0, 0, 0, 0.2);
				box-shadow: 0 40px 77px rgba(0, 0, 0, 0.22), 0 27px 24px rgba(0, 0, 0, 0.2);
	}

/* DIALOG HEADER */
	.modal-header {
		min-height: 16px;
		padding: 24px;
		border-bottom: none;
	}

	.modal-title {
		font-weight: 500;
		font-size: 21px;
	}

	/* DIALOG BODY */
	.modal-body {
		padding: 0 24px;
	}

	.modal-body p {
		font-weight: 400;
		font-size: 14px;
		color: #212121;
	}

	.modal-body .lead {
		font-weight: 300;
		font-size: 16px;
		color: #757575;
	}

	.modal-body p:last-child,
	.modal-body .lead:last-child {
		margin-bottom: 0;
	}

/* DIALOG FOOTER */
	.modal-footer {
		margin-top: 24px;
		padding: 8px 0;
		border-top: none;
	}

	.modal-footer .btn {
		height: 36px;
		margin-right: 8px;
		padding: 8px 10px;
		border: none;
		border-radius: 0;
		text-transform: uppercase;
		font-weight: 500;
		color: #009688;
		background-color: #fff;
	}

	.modal-footer .btn:focus {
		outline: none;
		box-shadow: none;
	}

	.modal-footer .btn:focus,
	.modal-footer .btn:hover {
		color: #00796B;
	}

	.modal-footer .btn + .btn {
		margin-left: 0;
	}

	.modal-footer .btn + .btn:last-child {
		margin-left: -4px;
	}


/* ----- v CAN BE DELETED v ----- */
body {
	font-family: 'Roboto', sans-serif;
}

.demo {
	padding-top: 60px;
	padding-bottom: 110px;
}

.btn-demo {
	margin: 15px;
	padding: 10px 15px;
	border-radius: 0;
	font-size: 16px;
	background-color: #FFFFFF;
}

.btn-demo:focus {
	outline: none;
}

.demo-footer {
	position: fixed;
	bottom: 0;
	width: 100%;
	padding: 15px;
	background-color: #212121;
	text-align: center;
}

.demo-footer > a {
	text-decoration: none;
	font-weight: bold;
	font-size: 16px;
	color: #fff;
}
</style>
        <link rel="stylesheet" href="assets\register\assets\external\font-awesome\css\font-awesome.min.css">
		
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
		

		<link rel="stylesheet" href="assets\register\assets\custom\css\form-wizard-blue.css">

        <!-- main content -->
        <section class="form-box">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
					
						<!-- Form Wizard -->
						<div class="form-wizard form-header-classic form-body-classic">
						<!-- 
						Just change the class name for make it with different style of design.

						Use anyone class "form-header-classic" or "form-header-modarn" or "form-header-stylist" for set your form header design.
						
						Use anyone class "form-body-classic" or "form-body-material" or "form-body-stylist" for set your form element design.
						-->
						
                    	<form role="form" name="" action="php/login.php" method="post">

                    		<h3>Lionzera Login</h3>
							
							
							<!-- Form Step 1 -->
                    		<fieldset>
								<!-- Progress Bar -->
								<div class="">
								  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
								  </div>
								</div>
								<!-- Progress Bar -->
                    			<div class="form-group">
                    			    <label>Email :</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder=""  title="Please provide a valid email address" autocomplete=off  required>
									
                                </div>
                               
								<div class="form-group">
                    			    <label>Password :</label>
                                    <input type="password" name="password" id="password" placeholder="Password" class="form-control"required>
                                </div> 
				<!--<a  data-toggle="modal" data-target="#forgot" style=" cursor: pointer; cursor: hand;"><h5 >Forgot Password ? </h5></a>-->

								
                                <div class="form-wizard-buttons">
										<input type = "submit" class="btn btn-next"   value="login">
                                </div>
							<!-- Form Step 1 -->

							Note: After login If you would like to register for Project Design Contest or any other events and Proshows, visit the particular event pages and register separately!
                    	
                    	</form>
						
						</div>
						<!-- Form Wizard -->
                    </div>
                </div>
                    
            </div>
        </section>
		<!-- main content -->
<script>
function login(){
               
			   var email=document.getElementById('email').value;
			   alert(email);
			   //var password=document.getElementById('password').value;
			   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			   
				if(email.match(mailformat))   
				{
					alert("true");
					
				}
			   
			   else
			   {
				return false;
			   }
			   
			   
			   
            }
</script>

        <!-- Jquery JS -->
        <script src="assets\register\assets\external\jquery-1.11.1.min.js"></script>
		<!-- bootStrap JS -->
		<script src="assets\register\assets\external\bootstrap\js\bootstrap.min.js"></script>
		
		
		<!-- Plugin Custom JS -->
        <script src="assets\register\assets\custom\js\form-wizard.js"></script>
        <!-- Plugin Custom JS -->

		<div class="modal fade left" id="forgot" tabindex="-1" role="dialog" aria-labelledby="forgot-2">
		<br>
		<br>
		<br>
		<br>
		<div class="modal-dialog" role="document" >
			<div class="modal-content">
				<div class="modal-header">
					<h4 id="myModalLabel-2" style="color:black;">Forgot Password ? <h4>
				</div>

				<div class="modal-body">
<!-- Form Step 1 -->
                    		<fieldset> 
								<!-- Progress Bar -->
								<div class="">
								  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
								  </div>
								</div>
								<!-- Progress Bar -->
                    			<div class="form-group">
                    			    <label>Email :</label>
                                    <input type="email" name="Email" id="email2" placeholder="Email" class="form-control required">
                                </div>
                             
								
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-next" onclick="send()">Recover	 password</button>
                                </div>
                            </fieldset>
							<br>
							<div id="ajaxDiv2">
							
							<!-- Form Step 1 -->				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-dialog" data-dismiss="modal" onclick="send()">Cancel</button>
				</div>
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
	<div id="ajaxDiv"></div>
    </body>
<script>
function send(){

               var ajaxRequest;  

              

               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
          
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                    var ajaxDisplay = document.getElementById('ajaxDiv2');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
					// alert(ajaxRequest.responseText);
                  }
               }
               
   
               // Now get the value from user and pass it to
               // server script.
          
             
              
           //    var pic  = document.getElementById('pic').value;
               
               var email  = document.getElementById('email2').value;

			
     
    
               var queryString =  "?email=" + email ;
 //alert(queryString);
               ajaxRequest.open("GET", "php/forgot.php" + queryString, true);	
               ajaxRequest.send(null); 
     
      /* if(ajaxRequest.responseText === "yes"){
 alert("Hello");
         window.location.href="login.php";
}
else{
 alert(" Succeffully");
     window.location.href="login.php";
}*/
     
            }
function ajaxFunction(){
               var ajaxRequest;  // The variable that makes Ajax possible!
               var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
          
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('ajaxDiv');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }     
               
               // Now get the value from user and pass it to
               // server script.   
          
               var email = document.getElementById('email').value;
               
               var queryString = "?email=" + email ;
			     
			   var password = document.getElementById('password').value;
			   
			   var queryString=queryString+"&password="+password;
			    
			   
				
			//	alert(queryString);
               ajaxRequest.open("GET", "php/login.php" + queryString, true);
			   
               ajaxRequest.send(null);    
			   
			   
            }
</script>
</html>