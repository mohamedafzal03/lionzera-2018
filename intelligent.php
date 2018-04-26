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

  <h1 style="color:black;">INTELLIGENT ENGINEER</h1>
  <h2 style="color:white;"><?php echo $Deptname ?></h2>
</div>
<div style="background: rgba(255, 255, 255, 0.55);" class="">
  
  
<div class="container">

	<div class="listing-navigation hidden-lg-down"  id="share-buttons" >
 <p style="font-size:150%">
<br>
 <b> “People, who are crazy enough to think they can change the world, are the ones who do it”</b>

Let's go invent tomorrow instead of worrying about what happened yesterday to benchmark knowledge with others in an environment of healthy competition and lots of fun. This is platform to hone skills in lateral thinking, teamwork and decision making under pressure and also to feel stimulated and inspired to accelerate learning curves.<br>

<b style="font-size:150%">Rules:</b><br>
•	Each team can have a maximum of three participants (Only team entries are eligible).<br>
•	The participants shall not be allowed to any electronic gadgets.<br>
•	There will be three rounds in total.<br>
•	Maximum of 20 questions are given and the team will be promoted to next level based on their score.<br>
•	The questions shall be in the form of multiple choices, true / false statement, specific answer question etc.<br>
•	Quiz it within limited time to win.<br>

**Surprise round will be conducted in case of tie in the final round.<br>

<b style="font-size:150%">Venue:</b><br>
	Prelims:	Will be updated soon<br>
	Finals:		Will be updated soon<br>
<b style="font-size:150%">Timings:</b><br>
Prelims:	11.15 A.M to 12.00 P.M (Day 2)<br>
Finals: 		12.00 P.M to 01.00 P.M (Day 2)<br>
<b style="font-size:150%">Student Coordinator:</b><br>
	Anandh R :	9715145319

</p>
























	
	
</div>			
</div>			

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
