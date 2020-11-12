<html>
<body>

<form action="index.php" method="post">

E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<?php
	//$email = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $email = $_POST['email'];

   function verificEmail($email) {
         return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? FALSE : TRUE;
   }
   if(!verificEmail($email)){
      echo "Valoarea introdusa nu este EMAIL.";
   }
   else{
      echo "Bravo frate!";
	  
   }
   echo "</br>" . $email;
   
  }
?>




</body>
</html>