<!DOCTYPE HTML>
<html>
<head>
<!-- 
 Name: Naga Satish Krishna Reddy
 Zid : Z1806140
 TA: Koushik Gudla
 Due Date: 4/21/2017
 -->
</head>
<body style="background-color:rgb(255,0,8);">
<h2 align="center" >Assignment 10</h2>
<?php
$username="z1806140";
$password="1995Jun23";
$database="z1806140";
$dsn="mysql:host=students;dbname=z1806140";
$link = new PDO($dsn, $username, $password);
if (!$link) {
	die('Could not connect: ' . mysql_error());
} 

//text box creation to enter flight origination, destination and miles
echo "<div class='my_class'>";
   echo "<form action='Assign10_2.php' method='get'>";
   echo "<label for='origination'> ORIGINATION </label>";
   echo "<input type='text' name='name' value=''>";
   echo " <label for='destination'> DESTINATION </label>";
   echo " <input type='text' name='name1' value=''>";
   echo " <label for='miles'> MILES </label>";
   echo " <input type='number' name='name2' value=''>";
   echo "</div>"; 
   echo "<div class='road'>";
   echo  "<input type='submit' value='submit' name='submit'>";
   echo "</div>";
   echo "</form>";
   echo "<br/>";

//text box to enter passenger information    
echo "<div class='my_class1'>";
  echo "<form action='Assign10_2.php' method='get'>";
  echo "<label for='firstName'>FIRST NAME</label>";
  echo " <input type='text' name='name' value=''>";
  echo " <label for='lastName'>LAST NAME</label>";
  echo " <input type='text' name='name1' value=''>";
  echo "</div>";
  echo "<div class='ross'>";
  echo "<input type='submit' value='submit' name='submit1'>";
  echo "</div>";
  echo "</form>";
  echo "<br/>";

//for booking a passenger to a existing flight
echo "<div class='my_class4'>";		
   echo "<form action='Assign10_2.php' method='get'>";
   $sql="SELECT * FROM passenger";
   $result = $link->query($sql);
   echo "<label for='passenger'>SELECT PASSENGER </label>";
   echo " <select name='passenger' id='passenger' class='form-control2'><option value=''>------------------choose----------------</option>";
   while(($row = $result->fetch())!=NULL) {
     echo "<option value='" . $row['passnum'] . "'>" . $row['lastName']." ". $row['firstName']. "</option>";
   }
   echo "</select> ";
   $sql="SELECT * FROM flight";
   $result = $link->query($sql);
   echo " <label for='flight'>SELECT FLIGHT</label>";
   echo " <select name='flight' id='flight' class='form-control1'><option value=''>------------------choose-----------------</option>";
   while(($row = $result->fetch())!=NULL) {
     echo "<option value='" . $row['flightnum'] . "'>" . $row['origination']." ". $row['destination']. "</option>";
   }
   echo "</select> ";
   echo " <label for='flightDate'>FLIGHT DATE</label>";
   echo " <input type='text' name='name2' value=''>";
   echo " <label for='seatnum'>SEAT NUMBER</label>";
   echo " <input type='text' name='name3' value=''>";
   echo "</div>";
   echo "<div class='rough'>";
   echo "<input type='submit' value='book' name='submit2'>";
   echo "</div>";
   echo "</form>";
   echo "<BR />";

//for deleting a flight
echo "<div class='my_class5'>";
    echo "<form action='Assign10_2.php' method='get'>";
    $sql="SELECT * FROM flight";
    $result = $link->query($sql);
    echo "<label for='flight'>SELECT FLIGHT </label>";
    echo " <select name='flight' id='flight' class='form-control'><option value=''>------------------choose---------------</option>";
    while(($row = $result->fetch())!=NULL) {
    	echo "<option value='" . $row['flightnum'] . "'>" . $row['origination']." ". $row['destination']. "</option>";
    }
    echo "</select> ";
    echo "</div>";
    echo "<div class='rue'>";
    echo "<input type='submit' value='delete' name='delete'>";
    echo "</div>";
    echo "</form>";


?>
</body>
</html>

