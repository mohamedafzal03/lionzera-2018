<!DOCTYPE html>
<?php
//if(session_start())
{
//	include('php/sessions.php');
	
}
?>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="description" content="" />
		<link rel="icon" 
      type="image/png" 
      href="http://bitfutura.in/img/v-f.png">
	
		<meta name="keywords" content="futura , national level technical symposium , virtual reality , indias first virtual reality site , indias first augmented reality site , virtual reality 
										augmented reality, vr, ar" />
	<meta name="google-site-verification" content="IsGDoGHpVEd6fpKygqd-9fWSa1YIAgemw4HcUOguvic" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<?php
/*ini_set( "display_errors", 0); 
session_start();
	if(isset($_SESSION["fid"]))
	{
		//header('Location:login.php');
		//echo '<meta http-equiv="refresh" content="0; url=login.php">';
		$Fid=$_SESSION["fid"];
		$query=mysqli_query($connection,"select *from futura_user where fid='$Fid'");
		$row=mysqli_fetch_assoc($query);
		$Femail=$row["email"];
		$Fpassword=$row["password"];
		$Fpnum=$row["p_num"];
		$Fuser=$row["username"];
		$Fcollege=$row["college"];
		$Focollege=$row["o_college"];
		$Fyos=$row["year_of_study"];
		$Fbos=$row["branch_of_study"];
		$Fambsdr=$row["campus_ambassador"];
		$Freference=$row["reference"];
		$Frollno=$row["student_rollno"];
		$Fdate=$row["registration_date"];
	}
	else
	{
		//echo '<meta http-equiv="refresh" content="0; url=login.php">';
		//header('Location:index.php');
		//echo '<meta http-equiv="refresh" content="0; url=login.php">';
		//echo '<script>window.location.href="login.php";</script>';
		$Fid=NULL;
	}
	error_reporting(0);
	ini_set('display_errors',2);
	//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
*/
	?>
	<style>
	 
nav{
	background: rgba(255, 255, 255, 0.15);
	-webkit-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2), 0px 0px 2px 0px rgba(0, 0, 0, 0.1);
	box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2), 0px 0px 2px 0px rgba(0, 0, 0, 0.1);
}	
.navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover
{
color:white;
}


.card {
  background: #fff;
  border-radius: 2px;
  display: inline-block;
  height: 300px;
  margin: 1rem;
  position: relative;
  width: 300px;
}

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.card-2 {
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}

.card-3 {
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}

.card-4 {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.card-5 {
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}



/*Hover Code*/
.navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover
 { 
    color:white;
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
/*Hover Code*/
.navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover
 { 
    color:white;
}

ol.progtrckr {
    margin: 0;
    padding: 0;
    list-style-type none;
}

ol.progtrckr li {
    display: inline-block;
    text-align: center;
    line-height: 3.5em;
}

ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%; }
ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%; }
ol.progtrckr[data-progtrckr-steps="4"] li { width: 24%; }
ol.progtrckr[data-progtrckr-steps="5"] li { width: 19%; }
ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%; }
ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%; }
ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%; }
ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%; }

ol.progtrckr li.progtrckr-done {
    color: black;
    border-bottom: 4px solid yellowgreen;
}
ol.progtrckr li.progtrckr-todo {
    color: silver; 
    border-bottom: 4px solid silver;
}

ol.progtrckr li:after {
    content: "\00a0\00a0";
}
ol.progtrckr li:before {
    position: relative;
    bottom: -2.5em;
    float: left;
    left: 50%;
    line-height: 1em;
}
ol.progtrckr li.progtrckr-done:before {
    content: "\2713";
    color: white;
    background-color: yellowgreen;
    height: 2.2em;
    width: 2.2em;
    line-height: 2.2em;
    border: none;
    border-radius: 2.2em;
}
ol.progtrckr li.progtrckr-todo:before {
    content: "\039F";
    color: silver;
    background-color: white;
    font-size: 2.2em;
    bottom: -1.2em;
}

.navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover{
	
	color:#f2dede;
}


</style>

<style> 
@font-face {
    font-family: myFirstFont;
    src: url(assets/font/origram.otf);
}

.futurafont {
    font-family: myFirstFont;
}

.fade-in{
  animation: animationFrames ease 1s;
  animation-iteration-count: 1;
  transform-origin: 50% 50%;
  
}
/*
.fade-in{
  animation: animationFrames ease 1s;
  animation-iteration-count: 1;
  transform-origin: 50% 50%;
  animation-fill-mode:forwards; /*when the spec is finished*/
  -webkit-animation: animationFrames ease 1s;
  -webkit-animation-iteration-count: 1;
  -webkit-transform-origin: 50% 50%;
  -webkit-animation-fill-mode:forwards; /*Chrome 16+, Safari 4+*/ 
  -moz-animation: animationFrames ease 1s;
  -moz-animation-iteration-count: 1;
  -moz-transform-origin: 50% 50%;
  -moz-animation-fill-mode:forwards; /*FF 5+*/
  -o-animation: animationFrames ease 1s;
  -o-animation-iteration-count: 1;
  -o-transform-origin: 50% 50%;
  -o-animation-fill-mode:forwards; /*Not implemented yet*/
  -ms-animation: animationFrames ease 1s;
  -ms-animation-iteration-count: 1;
  -ms-transform-origin: 50% 50%;
  -ms-animation-fill-mode:forwards; /*IE 10+*/
}
*/
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

.w3-red, .w3-hover-red:hover{
	
    color: #fff!important;
    background-color: #07273d!important;
}
.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
    color: #555;
    background-color: #03070c;
}

  #background { 
     
    position:fixed; left: 0px; 
    top: 0px;
background-attachment: fixed;
       background-size: cover;
     width:100%; 
       height:100%; 
        
     -webkit-user-select: none; -khtml-user-select: none; 
     -moz-user-select: none; -o-user-select: none; user-select: none; 
      
    }       
      #myBlueDiv {
    -webkit-align-self: center; /* Safari 7.0+ */
    align-self: center;
}

.txt {
    width: 100vw;
    height: 25vh;

	nav {
    color: #fff;
    background-color: black;
    width: 100%;
    height: 56px;
    line-height: 56px;
}
	}
   
  

</style>

	</head>
	
	<body>
 		    <div id="background"></div>

	<div class="navbar navbar-default navbar-fixed-top" style="background:rgba(96, 125, 139, 0.65);font-size:18px;z-index:9999;">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".top-collapse"><!-- NOTE!  data-toggle was changed to top-collapse -->
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
            <a class="navbar-brand " href="index.php" style="color:#000000;font-size:2em;"><b>LIONZERA </bb> </a>
		</div>
		<div class="navbar-collapse collapse top-collapse"><!-- NOTE!  the class top-collapse was added here -->
		  <ul class="nav navbar-nav">
			<li><a style="color:white;" href="index.php">Home</a></li>
			<li><a style="color:white;" href="events.php">Events</a></li>
              <li><a style="color:white;" href="about.php">About</a></li>
			<!--<li><a style="color:white;" href="sponsors.php">Sponsors</a></li>-->
			<li><a  style="color:white;" href="contact.php">Contact</a></li>
	   
		  </ul>
		  
		  
		  
		  
		  <ul class="nav navbar-nav navbar-right">
				    <?php
				   ini_set( "display_errors", 0); 
	if($value==1)
	{
		echo' <ul class="nav navbar-nav navbar-right">
				<li><a style="color:white;">'.$user.'</a></li>
				<li><a style="color:white;" href="php/logout.php">Logout</a></li>
			  </ul>
			  ';
		
	}
	else
	{
		echo'<li class=""><a style="color:white;" href="register/register.php">Register</a></li>';
		echo'<li class=""><a style="color:white;" href="login.php">Login</a></li>';
		$Fid=NULL;
		
	error_reporting(0);
	ini_set('display_errors',1);
	}
	?>
					 
			</ul>
		</div><!--/.nav-collapse -->
	  </div>
	</div>
<br>
<br>
<br>
<br>
  <div class="wrapper fade-in">
	   
	   
  <script type="text/javascript">
 var images = ['1.jpg', '2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg','19.jpg','20.jpg','21.jpg','22.jpg','23.jpg','24.jpg','25.jpg','26.jpg','27.jpg','28.jpg','29.jpg','30.jpg','31.jpg','32.jpg','33.jpg','34.jpg','35.jpg','36.jpg',];
 $('#background').css({'background-image': 'url(backg/' + images[Math.floor(Math.random() * images.length)] + ')'});
</script>