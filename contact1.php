<?php

include("header.php");

?>
<title>Contact | Futura'17</title>
<link rel="stylesheet" href="assets/ihover.css"/>
<link rel="stylesheet" href="assets/ihover.min.css"/>
<style> 
@font-face {
    font-family: myFirstFont;
    src: url(assets/font/origram.otf);
}

.futurafont {
    font-family: myFirstFont;
}
div.gallery {
    margin: 5px;
    
    float: left;
    width: 180px;
	align:center;
}

div.gallery:hover {
    border: 1px solid #fff;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

img {
    width: 100%;
    height: auto;
}

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
<div class="w3-container "   >
<div align="center">

  <h1 align="center">Contact - Futura'17</h1>
</div>
<br>
<br>
<br>
</div>
</div>
  <h2 align="center">Chief Coordinators</h2>
 <div class="main" >
 <div class="row" align="center">
 <div class="col-md-2">
 </div>
    <!-- Sabarish  --> 
 <div class="col-sm-4">
     <div class="ih-item circle effect1"><a href="#">
        <div class="spinner"></div>
        <div class="img"><img src="gallery/sabareesh.jpg" alt="img"></div>
        <div class="info">
          <div class="info-back">
		  <br>
		  <br>
           <h4 style="color:white;">co-ordinator-1</h4>
          <p style="font-size:0.9em;color:white;"><i class="fa  fa-phone-square"></i> &nbsp;mobile number</p>
       </div>
        </div></a>
		</div>
  </div>
  <!-- Sabarish  -->
 
 
 <!--aamirah-->
   <div class="col-sm-4">
  <div class="ih-item circle effect1"><a href="#">
        <div class="spinner"></div>
        <div class="img"><img src="gallery/aamira.jpg" alt="img"></div>
        <div class="info">
          <div class="info-back">
		  <br>
		  <br>
           <h4 style="color:white;">co-ordinnator-2</h4>
          <p style="font-size:0.9em;color:white;"><i class="fa  fa-phone-square"></i> &nbsp;mobile number</p>
       </div>
        </div></a>
		</div>
		</div>
		<!--aamirah-->
		
       
 




	
	
<br>
<br>
<br>
<br>
</div>
</div>
<script>
//paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").delay(1200).fadeOut("slow");;
	});
	</script>
</body>	
</html>