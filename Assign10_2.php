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
<body style="background-color:rgb(255,16,64);">
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

if(isset($_GET[submit]))
     {
       $sql="insert into flight(origination,destination,miles) values (?,?,?)";
       $prepared = $link->prepare($sql);
       $ret = $prepared->execute((array($_GET[name],$_GET[name1],$_GET[name2])));
       $row= $prepared->fetch();
       echo "SUCCESSFUL";
     }
	   
if(isset($_GET[submit1]))
      {
       $sql="insert into passenger(lastName,firstName) VALUES (?,?)";
       $prepared = $link->prepare($sql);
       $ret = $prepared->execute((array($_GET[name],$_GET[name1])));
       $row= $prepared->fetch();
       echo "ADDED SUCCESSFULLY";
     }

if(isset($_GET[submit2]))
       {
        $sql="INSERT INTO  manifest(flightnum,passnum,flightDate,seatnum) VALUES (?,?,?,?)";
        $prepared = $link->prepare($sql);
        $ret = $prepared->execute((array($_GET['flight'],$_GET['passenger'],$_GET['name2'],$_GET['name3'])));
        $row= $prepared->fetch();
        echo "TICKET BOOKED SUCCESSFULLY";
      }

if(isset($_GET[delete]))
       {
       $sql="DELETE FROM  manifest  WHERE flightnum=?";
       $prepared = $link->prepare($sql);
       $ret = $prepared->execute((array($_GET['flight'])));
       $row= $prepared->fetch();
       $sql="DELETE FROM  flight WHERE flightnum=?";
       $prepared = $link->prepare($sql);
       $ret = $prepared->execute((array($_GET['flight'])));
       $row= $prepared->fetch();
       echo "DELETION SUCCESSFUL";
       }

  ?>
 </body>
</html> 
	 



