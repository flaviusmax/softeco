<?php


include 'bd.php';


//deschid conexiunea
$conn = deschidConn();
if ($conn){
	
	echo "Conectare reusita!<br/>";
}elseif(!$conn)
{
	die("Conectare esuata: " . mysqli_connect_error());
	
}



// select 
/** 
$sql = "SELECT id, email, password FROM users ORDER BY id DESC";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . "   - Email: " . $row["email"] . "- \t - Parola: " . "\t"  . $row["password"]. "<br>";
  }

} else {
  echo "0 results";
}


//alta interogare
$sql2 = "SELECT id, email, password FROM users WHERE id = 5 ";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    echo  "<br>" ."id: " . $row["id"].  " - Email: " . $row["email"]. " -  Parola: " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}

*/

//alta interogare
echo "<br/> 1 - scoti toate post-urile userului cu id 5 (ordonat dupa id de post descrescator)<br/>" ;

$sql3 = "SELECT id, user_id, title, body FROM posts WHERE user_id = 5 ORDER BY id DESC";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row = $result3->fetch_assoc()) {
    echo  "<br> \n" . "Post id: " . $row["id"]. " Postare lui User: " . $row["user_id"].  " -  Title: " . $row["title"]. " - *** Post: " . $row["body"]. " *** <br>";
  }
} else {
  echo "0 results";
}


//alta interogare
echo "<br/> 2 - de scos cele mai recente 5 comentarii pentru oricare post al userului 3 <br/>";

$sql3 = "SELECT id, user_id, post_id, body FROM comments WHERE user_id = 3 ORDER BY id DESC LIMIT 5";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row = $result3->fetch_assoc()) {
    echo  "<br> \n" . "Comentariul numarul: " . $row["id"]. " la postarea numarul: " . $row["post_id"].  " -  al utilizatorului: " . $row["user_id"]. " <br/> *** Comentariu: " . $row["body"]. " *** <br>";
  }
} else {
  echo "0 results";
}

inchidConn($conn);


?>