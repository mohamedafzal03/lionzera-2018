<!DOCTYPE html>
<?php
include('header.php');

?>

<!--  new  -->
<!DOCTYPE html>


  <style type="text/css">
 
#share-buttons img {
width: 35px;
padding: 5px;
border: 0;
box-shadow: 0;
display: inline;
}
 
 
.intro{
  width:100%;
  height:30px;
}
.intro h1{
  font-family:'Oswald', sans-serif;
  letter-spacing:2px;
  font-weight:normal;
  font-size:14px;
  color:#222;
  text-align:center;
  margin-top:10px;
}
.intro a{
  color:#07cb79;
  font-weight:bold;
  letter-spacing:0;
}
.intro img{
  width:20px;
  heght:20px;
  margin-left:5px;
  margin-right:5px;
  position:relative;
  top:5px;
}


.button-1{
  width:100px;
  height:50px;
  border:2px solid #34495e;
  float:left;
  text-align:center;
  cursor:pointer;
  position:relative;
  box-sizing:border-box;
  overflow:hidden;
  margin:0 0 40px 0;
}
.button-1 a{
  font-family:arial;
  font-size:16px;
  color:#34495e;
  text-decoration:none;
  line-height:50px;
  transition:all .5s ease;
  z-index:2;
  position:relative;
}
.eff-1{
  width:140px;
  height:50px;
  top:-2px;
  right:-140px;
  background:#34495e;
  position:absolute;
  transition:all .5s ease;
  z-index:1;
}
.button-1:hover .eff-1{
  right:0;
}
.button-1:hover a{
  color:#fff;
}

.button-2{
  width:140px;
  height:50px;
  border:2px solid #34495e;
  float:left;
  text-align:center;
  cursor:pointer;
  position:relative;
  box-sizing:border-box;
  overflow:hidden;
  margin:0 0 40px 50px;
}
.button-2 a{
  font-family:arial;
  font-size:16px;
  color:#34495e;
  text-decoration:none;
  line-height:50px;
  transition:all .5s ease;
  z-index:2;
  position:relative;
}
.eff-2{
  width:140px;
  height:50px;
  top:-50px;
  background:#34495e;
  position:absolute;
  transition:all .5s ease;
  z-index:1;
}
.button-2:hover .eff-2{
  top:0;
}
.button-2:hover a{
  color:#fff;
}

.button-3{
  width:100px;
  height:50px;
  border:2px solid #34495e;
  float:left;
  text-align:center;
  cursor:pointer;
  position:relative;
  box-sizing:border-box;
  overflow:hidden;
  margin:0 0 40px 50px;
}
.button-3 a{
  font-family:arial;
  font-size:16px;
  color:#34495e;
  text-decoration:none;
  line-height:50px;
  transition:all .5s ease;
  z-index:2;
  position:relative;
}
.eff-3{
  width:140px;
  height:50px;
  bottom:-50px;
  background:#34495e;
  position:absolute;
  transition:all .5s ease;
  z-index:1;
}
.button-3:hover .eff-3{
  bottom:0;
}
.button-3:hover a{
  color:#fff;
}

.button-4{
  width:140px;
  height:50px;
  border:2px solid #34495e;
  float:left;
  text-align:center;
  cursor:pointer;
  position:relative;
  box-sizing:border-box;
  overflow:hidden;
  margin:0 0 40px 50px;
}
.button-4 a{
  font-family:arial;
  font-size:16px;
  color:#34495e;
  text-decoration:none;
  line-height:50px;
  transition:all .5s ease;
  z-index:2;
  position:relative;
}
.eff-4{
  width:140px;
  height:50px;
  left:-140px;
  background:#34495e;
  position:absolute;
  transition:all .5s ease;
  z-index:1;
}
.button-4:hover .eff-4{
  left:0;
}
.button-4:hover a{
  color:#fff;
}

.button-5{
  width:140px;
  height:50px;
  border:2px solid #34495e;
  float:left;
  text-align:center;
  cursor:pointer;
  position:relative;
  box-sizing:border-box;
  overflow:hidden;
  margin:0 0 40px 0;
}
.button-5 a{
  font-family:arial;
  font-size:16px;
  color:#34495e;
  text-decoration:none;
  line-height:50px;
  transition:all .5s ease;
  z-index:2;
  position:relative;
}
.eff-5{
  width:140px;
  height:50px;
  left:-140px;
  top:-50px;
  background:#34495e;
  position:absolute;
  transition:all .5s ease;
  z-index:1;
}
.button-5:hover .eff-5{
  left:0;top:0;
}
.button-5:hover a{
  color:#fff;
}
.button-6{
  width:140px;
  height:50px;
  border:2px solid #34495e;
  float:left;
  text-align:center;
  cursor:pointer;
  position:relative;
  box-sizing:border-box;
  overflow:hidden;
  margin:0 0 40px 50px;
}
.button-6 a{
  font-family:arial;
  font-size:16px;
  color:#34495e;
  text-decoration:none;
  line-height:50px;
  transition:all .5s ease;
  z-index:2;
  position:relative;
}
.eff-6{
  width:140px;
  height:50px;
  right:-140px;
  bottom:-50px;
  background:#34495e;
  position:absolute;
  transition:all .5s ease;
  z-index:1;
}
.button-6:hover .eff-6{
  right:0;bottom:0;
}
.button-6:hover a{
  color:#fff;
}

.button-7{
  width:140px;
  height:50px;
  border:2px solid #34495e;
  float:left;
  text-align:center;
  cursor:pointer;
  position:relative;
  box-sizing:border-box;
  overflow:hidden;
  margin:0 0 40px 50px;
}
.button-7 a{
  font-family:arial;
  font-size:16px;
  color:#34495e;
  text-decoration:none;
  line-height:50px;
  transition:all .5s ease;
  z-index:2;
  position:relative;
}
.eff-7{
  width:140px;
  height:50px;
  border:0px solid #34495e;
  position:absolute;
  transition:all .5s ease;
  z-index:1;
  box-sizing:border-box;
}
.button-7:hover .eff-7{
  border:70px solid #34495e;
}
.button-7:hover a{
  color:#fff;
}

.button-8{
  width:140px;
  height:50px;
  border:2px solid #34495e;
  float:left;
  text-align:center;
  cursor:pointer;
  position:relative;
  box-sizing:border-box;
  overflow:hidden;
  margin:0 0 40px 50px;
}
.button-8 a{
  font-family:arial;
  font-size:16px;
  color:#fff;
  text-decoration:none;
  line-height:50px;
  transition:all .5s ease;
  z-index:2;
  position:relative;
}
.eff-8{
  width:140px;
  height:50px;
  border:70px solid #34495e;
  position:absolute;
  transition:all .5s ease;
  z-index:1;
  box-sizing:border-box;
}
.button-8:hover .eff-8{
  border:0px solid #34495e;
}
.button-8:hover a{
  color:#34495e;
}
   
    #background { 
     
    position:fixed; left: 0px; 
    top: 0px;
background-attachment: fixed;
       background-size: cover;
     width:100%; 
       height:100%;
z-index:-1;	   
        
     -webkit-user-select: none; -khtml-user-select: none; 
     -moz-user-select: none; -o-user-select: none; user-select: none; 
      
    }       
      #myBlueDiv {
    -webkit-align-self: center; /* Safari 7.0+ */
    align-self: center;
}


</style>


<style>
.w3-border{
	border:0px solid #ccc!important;
}

p{
	font-size:1.4em;
}
</style>

<style>
.w3-purple, .w3-hover-purple:hover {
	color: #fff!important;
    background-color: #07273d!important;
}

</style>

<div class="w3-container "  >
<div align="center">

  <h1 style="color:black;">Workshop</h1>
  <h2 style="color:white;"><?php echo $Deptname ?></h2>
</div>
<div style="background: rgba(255, 255, 255, 0.55);" class="">
    
<div class="container">

	<div class="listing-navigation hidden-lg-down"  id="share-buttons" >

<br>
    <h1>COST EFFECTIVE CONSTRUCTION</h1><br>
    <h2>“Tell Me and I Forget; Teach Me and I May Remember; Involve Me and I Learn”</h2><br>
  <p>Scope of Investigation<br>
    Simple visual examination of soil at the surface or from shallow test pits.<br>
    Detailed study of soil and groundwater to a reasonable depth (influence zone) by sampling<br>
from bore holes, shafts and audits and in-situ laboratory tests.<br>
    <b style="font-size:150%">Course Structure</b><br>
    Lecture Session<br>
    Practical Session<br>
    <b style="font-size:150%">Registration Details:</b><br>
    Registration fees for the workshop is INR 500/-<br>
    Confirm your presence in the workshop by remitting a DD in the favor of <b>“THE PRINCIPAL,
        BANNARI AMMAN INSTITUTE OF TECHNOLOGY“</b>, payable at
SATHYAMANGALAM.<br>
    Send your DD to &#39;The Head of the Department, Civil Engineering, Bannari Amman Institute of
Technology, Sathyamangalam, Erode-638041”.<br>
    Kindly mention your name, LID, college name and contact number on the back side of the DD.
    On spot registrations will also be available.<br>
    <b>**Registration based on first come first served basis</b><br>
    <b style="font-size:150%">Resource Person:</b><br>
    will be updated soon<br>
    <b style="font-size:150%">Venue:</b><br>
    Session 1: Will be update soon<br>
    Session 2: Arena<br>
    Session 3: Arena<br>
  <b style="font-size:150%">Timings:<br></b>
    Session 1: 10.45 A.M to 11.30 A.M (Day 1)<br>
    Session 2: 11.30 A.M to 01.00 P.M (Day 1)<br>
    Session 3: 02.30 P.M to 04.00 P.M (Day 1)<br>
    
<!--<div class="container">
<h4>Share this event</h4>  
	<div class="listing-navigation hidden-lg-down"  id="share-buttons" >
 
 
    <!-- Facebook 
    <a href="http://www.facebook.com/sharer.php?u=http://bitfutura.in/event_view.php?events=<?php echo $Events;?>" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>-->
    
    <!-- Google+ 
<a href="https://plus.google.com/share?url=http://bitfutura.in/event_view.php?events=<?php echo $Events;?>" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
    </a>
    
    <!-- LinkedIn 
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://bitfutura.in/event_view.php?events=<?php echo $Events;?>" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
    </a>
    
	

    <!-- Twitter 
    <a href="https://twitter.com/share?url=http://bitfutura.in/event_view.php?events=<?php echo $Events;?>&amp;text=<?php echo $Deptname ?> Events &amp;hashtags=@bitfutura " target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>
<br>
<br>
<br>
	
	
</div>			
</div>	-->
</p>
</div>
</div>


<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>
<script>
function ajaxFunction(field){
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
                     var ajaxDisplay = document.getElementById('ajaxDiv_'+field);
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }   
               
               // Now get the value from user and pass it to
               // server script.   
          
              
               
               var queryString = "?field=" + field ;
			   
			   
				
			//	alert(queryString);
               ajaxRequest.open("GET", "php/event_register.php" + queryString, true);
			   
               ajaxRequest.send(null);     
			   
			   
            }
</script>
	
<br>
<br>

</html>
