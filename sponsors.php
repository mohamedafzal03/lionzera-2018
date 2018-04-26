<?php

include("header.php");

?>
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

  <h1 align="center">Sponsors - Futura'17</h1>
</div>
</div>
</div>

 <div class="main" >
 <!-- Left to right-->



<div class="row" align="center">
  <h2 align="center">Title Partner</h2>
  
         <div class="col-md-12">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="http://chettinadbuilders.com/" target="_blank">
        <div class="img"><img src="sponsor/20.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Chettinad Builders</h4>
          <p style="font-size:1em;color:white;">www.chettinadbuilders.com</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
  
            </div>  
			
			
<div class="row" align="center">
  <h2 align="center">Registration Partner</h2>
<div class="col-md-2">
 </div>
 
  <div class="col-md-4">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="http://www.uniqtechnologies.co.in/" target="_blank">
        <div class="img"><img src="sponsor/24.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Uniq Technologies</h4>
          <p style="font-size:1em;color:white;">www.uniqtechnologies.co.in</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
         <div class="col-md-4">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="https://www.yepdesk.com/" target="_blank">
        <div class="img"><img src="sponsor/08.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">YEP DESK</h4>
          <p style="font-size:1em;color:white;">www.yepdesk.com</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
  <div class="col-md-2">
 </div>
 
            </div>  
<div class="row" align="center">
  <h2 align="center">Financial Partner</h2>
 <div class="col-md-12">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="https://www.axisbank.com/" target="_blank">
        <div class="img"><img src="sponsor/06.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">AXIS BANK</h4>
          <p style="font-size:1em;color:white;">www.axisbank.com</p>
        </div></a></div>
    <!-- end colored -->
 
  </div></div>
  
  
  <div class="row" align="center">
   <h2 align="center">Website Partner</h2>
 <div class="col-md-12">
  <div class="ih-item circle colored effect11 left_to_right">
        <a href="http://geekstack.890m.com/" target="_blank">
        <div class="img"><img src="sponsor/geekstack.png" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">GEEKSTACK</h4>
          <p style="font-size:1em;color:white;">www.geekstack.co.in</p>
        </div></a></div>
 
  </div></div>
  
  
   <div class="row" align="center">
   <h2 align="center">Travel Partner</h2>
 <div class="col-md-12">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/25.png" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Prabu Tours</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored -->
 
  </div></div>
   <div class="row" align="center">
   <h2 align="center">Event Partner</h2>
    <div class="col-md-3">
 </div>
 <div class="col-md-2">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="http://www.hyundai.com/in/en/Main/index.html" target="_blank">
        <div class="img"><img src="sponsor/15.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Event Partner</h4>
          <p style="font-size:1em;color:white;">www.hyundai.com/in/en/</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
   <div class="col-md-2">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="http://www.ivtlinfoview.com/" target="_blank">
        <div class="img"><img src="sponsor/16.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Event Partner</h4>
          <p style="font-size:1em;color:white;">www.ivtlinfoview.com</p>
        </div></a></div>
    <!-- end colored -->
 
  </div> <div class="col-md-2">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="http://www.juniper.net/us/en/" target="_blank">
        <div class="img"><img src="sponsor/17.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Event Partner</h4>
          <p style="font-size:1em;color:white;">www.juniper.net/us/en</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
  
   <div class="col-md-3">
 </div>
 
 
  </div><br>
   <div class="row" align="center">
   <div class="col-md-3">
 </div>
 <div class="col-md-2">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="https://www.k7computing.com/" target="_blank">
        <div class="img"><img src="sponsor/18.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Event Partner</h4>
          <p style="font-size:1em;color:white;">www.k7computing.com</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
   <div class="col-md-2">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="https://www.quadrasystems.net/" target="_blank">
        <div class="img"><img src="sponsor/19.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Event Partner</h4>
          <p style="font-size:1em;color:white;">www.quadrasystems.net</p>
        </div></a></div>
    <!-- end colored -->
 
  </div> <div class="col-md-2">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="http://e-box.co.in/" target="_blank">
        <div class="img"><img src="sponsor/22.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Event Partner</h4>
          <p style="font-size:1em;color:white;">www.e-box.co.in</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
  <div class="col-md-3">
 </div>
 </div>
 
  <div class="row" align="center">
  <h2 align="center">Educational Partner</h2>
  <div class="col-md-2">
 </div>
 <div class="col-md-4">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="http://www.edwiseinternational.com/" target="_blank">
        <div class="img"><img src="sponsor/05.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">EDWISE</h4>
          <p style="font-size:1em;color:white;">www.edwiseinternational.com</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
         <div class="col-md-4">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="https://www.els.edu/" target="_blank">
        <div class="img"><img src="sponsor/ep1.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">ELS</h4>
          <p style="font-size:1em;color:white;">www.els.edu</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
 <div class="col-md-2">
 </div>
            </div>  
 
<!--<div class="row" align="center">
  <h2 align="center">Online Media Partners</h2>
  
 <div class="col-md-3">
 </div>
 <div class="col-md-2">
    <!-- colored --
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/07.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">FESPAV.COM</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored --
 
  </div>
         <div class="col-md-2">
    <!-- colored --
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/01.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">THE COLLEGE FEVER.COM</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored --
 
  </div>
  <div class="col-md-2">
    <!-- colored --
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/02.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">DARE TO COMPETE.COM</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored --
 
  </div>
         <div class="col-md-3">
			</div>

 
            </div> --
            <div class="row" align="center">
  
          <div class="col-md-2">
			</div>
         <div class="col-md-2">
    <!-- colored --
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/03.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">KNOWA FEST.COM</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored --
 
  </div>
           
<div class="col-md-2">
    <!-- colored --
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/04.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">BRAIN BUXA</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored --
 
  </div>
  
   <div class="col-md-2">
    <!-- colored --
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/09.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Crazy Engineers</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored --
 
  </div>
  
         <div class="col-md-2">
    <!-- colored --
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/11.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Faadoo Engineers</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored --
 
  </div>

           
            </div> 
			
             <div class="row" align="center">
   <h2 align="center">Online Music partner</h2>
 <div class="col-md-12">
    <!-- colored --
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/10.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">AweSong</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored --
 
  </div></div>-->
   <div class="row" align="center">
   <h2 align="center">Refreshment partner</h2>
            <div class="col-md-3">
			</div>
 <div class="col-md-3">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="http://www.nilgiris1905.com/" target="_blank">
        <div class="img"><img src="sponsor/13.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Nilgiris - Sathy</h4>
          <p style="font-size:1em;color:white;">www.nilgiris1905.com</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
   <div class="col-md-3">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="https://www.richmillet.com/millet-cookies/millet-cookies" target="_blank">
        <div class="img"><img src="sponsor/12.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Millet Biscuits</h4>
          <p style="font-size:1em;color:white;">www.richmillet.com</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
   <div class="col-md-3">
			</div>
			</div>
  <!--<div class="row" align="center">
   <h2 align="center">Food partner</h2>
    <div class="col-md-3">
			</div>
 <div class="col-md-2">
    <!-- colored 
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/28.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Arun Icecream</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored  
 
  </div>
   <div class="col-md-2">
    <!-- colored 
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/29.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Cafe Coffee Day</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored 
 
  </div>
   <div class="col-md-2">
    <!-- colored 
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/31.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Dominos</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored 
 
  </div>
     <div class="col-md-3">
		</div>
  </div>--
  <div class="row" align="center">
   
   <div class="col-md-3">
</div>
   <div class="col-md-3">
    <!-- colored --
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/30.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Marrybrown</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored --
 
  </div>
   <div class="col-md-3">
    <!-- colored --
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/27.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">Meat and Put</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored --
 
  </div>
  
   <div class="col-md-3">
</div>
  </div>-->
  <div class="row" align="center">
   <h2 align="center">wardrobe partner</h2>
 <div class="col-md-12">
    <!-- colored -->
  <div class="ih-item circle colored effect11 left_to_right">
  <a href="#" target="_blank">
        <div class="img"><img src="sponsor/21.jpg" alt="img"></div>
        <div class="info">
    <br>
    <br>
          <h4 style="color:white;">PNG Exports</h4>
          <p style="font-size:1em;color:white;"></p>
        </div></a></div>
    <!-- end colored -->
 
  </div></div>
  </div>
  

  







</div>
	
	
<br>
<br>
<br>
<br>


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