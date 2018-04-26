<?php

include("header.php");

?>
<title>VR/AR | Futura'17</title>

<style> 
@font-face {
    font-family: myFirstFont;
    src: url(assets/font/origram.otf);
}

.futurafont {
    font-family: myFirstFont;
}

img {
    width: 100%;
    height: auto;
}


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

.fade-in{
  animation: animationFrames ease 1s;
  animation-iteration-count: 1;
  transform-origin: 50% 50%;
  
}

@keyframes animationFrames{
  0% {
    opacity:0;
    transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    transform:  translate(0px,0px)  ;
  }
}

@-moz-keyframes animationFrames{
  0% {
    opacity:0;
    -moz-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -moz-transform:  translate(0px,0px)  ;
  }
}

@-webkit-keyframes animationFrames {
  0% {
    opacity:0;
    -webkit-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -webkit-transform:  translate(0px,0px)  ;
  }
}

@-o-keyframes animationFrames {
  0% {
    opacity:0;
    -o-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -o-transform:  translate(0px,0px)  ;
  }
}

@-ms-keyframes animationFrames {
  0% {
    opacity:0;
    -ms-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -ms-transform:  translate(0px,0px)  ;
  }
}
</style>


  <div class="wrapper fade-in">

<div class="container col-md-12 "  >
<div class="w3-container "    >
<div align="center">

  <h1>Get ready to Experience Futura like never before.<br></h1>
  <h3>Introducing India's First Virtual Reality and Augmented Reality Site For Techno-Cultural fest
  </h3>
  
<div align="center" class="" style="color:#black"><h4> 
 
</h4></div>
</div>



<div class="container" style="background:rgba(255,255,255,.15);">
  <div class="row">
   <div class="col-sm-6"  align="center" >
      <h3></h3>        
	  <br>
	  <br>
<img src="img/vrm.png" style="width:256px;height:256px	">
<br>
<br>
<p style="font-size:1.1em;color:white"><b>Experience Virtual Reality</b> </p>
		<button class="w3-btn w3-red" style="text-shadow:1px 1px 0 #444 ;font-size:1.3em;"><b>Coming Soon</b></button>
<br>
<br>
<br>

    </div>

	<div class="col-sm-6"  align="center" >
      <h3></h3>        
	  <br>
	  <br>
<img src="img/arm.png" style="width:256px;height:256px	">
<br>
<br>
<p style="font-size:1.1em;color:white;"><b>Experience Augmented Reality</b> </p>
<button class="w3-btn w3-red" style="text-shadow:1px 1px 0 #444 ;font-size:1.3em;"><b>Coming Soon</b></button>
<br>
<br>
<br>

    </div>
    
	
	
   
   
  </div>
</div>






</div>

	<br>
	<br>
	<br>
	<br>
</div>




	
<br>
<br>
<br>
<br>
</body>	
</html>