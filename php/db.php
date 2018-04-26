<?php
$connection = mysqli_connect('localhost','lionzera','lionzera');
if (!$connection){   
die("Database Connection Failed" . mysql_error());
}else{
echo'ttt';
}
$select_db = mysqli_select_db($connection,'lionzera');
if (!$select_db){
  die("Database Selection Failed" . mysql_error());
}?>