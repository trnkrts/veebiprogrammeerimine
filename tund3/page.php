﻿<?php
//echo "See on minu esimene PHP!";
$firstName = "Kodanik"; 
$lastName = "Tundmatu";

//kontrollime, kas kasutaja on midagi kirjutanud
//var_dump($_POST);
if (isset($_POST["firstName"])){
	$firstName = $_POST["firstName"];
}
if (isset($_POST["lastName"])){
	$lastName = $_POST["lastName"];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  <?php
  echo $firstName;
  echo " ";
  echo $lastName;
  ?>
  </title>
</head>
<body>
  <h1>
  <?php
  echo $firstName ." " . $lastName;
  ?>, IF18</h1>
  <p>See leht on loodud <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames, ei pruugi hea välja näha ning kindlasti ei sisalda tõsiseltvõetavat sisu!</p> 
  
  <hr>
  
  <form method="POST">
  <label>Eesnimi:</label>
  <input type="text" name="firstName">
  <label>Perekonnanimi :</label>
  <input type="text" name="lastName">
  <label>sünniaasta: </label>
  <input type="number" min="1914" max="2000" value="1999" name"birthYear">
  <br>
  <input type="submit" name="submitUserData" value="Saada andmed">
  </form>
  <hr>
  <?php
  if (isset($_POST["firstName"])){
	  echo "<p>olete elanud järgnevatel aastatel: </p> \n";
	  echo "<ol> \n";
	  for ($i = $_POST["birthYear"]; $i <=date("Y"); $i ++){
		  echo "<li>" .$i ."</li> \n";
	  }
	  echo "</ol> \n";
  }
	  ?>

</body>
</html>