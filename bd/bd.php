<?php
function deschidConn()
 {
 $dbhost = "localhost";
 $dbuser = "flavi";
 $dbpass = "zzxxzz";
 $db = "softexco";
 
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db)  or die("Connect failed: %s\n". $conn -> error);
 
	
	return $conn;

 }
 
function inchidConn($conn)
 {
 $conn -> close();
 echo "<br/> End ";
 }
   
?>