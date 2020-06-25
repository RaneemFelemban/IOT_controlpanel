

<html> 
<head> 
<title>CONTROL PANEL</title>
<style>
html {  background-image: url(1216317.png);
 
  background-repeat: no-repeat, repeat;
  padding: 100px;
  
  background-size: cover;}
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

h2{text-align: center ; 
color:white;
font-family: "Lucida Console";
font-style: oblique;
 margin: 50;}
</style>
 </head> 
<body>  
<h2> Control Panel</h2>

<?php 
$conn = mysqli_connect('localhost','root','12345678','robot');
 
 if(!$conn){
	
	 die("Connection failed: " . mysqli_connect_error());
	 }
	
?>

 <?php
 

if(isset($_POST['forword']))
{
     $SQL = "INSERT INTO move (movition) VALUES ('F')";
     if(!mysqli_query($conn,$SQL)){
	 
	 echo "NOT UPDATED ";}
	 
	 else{
		 
		 
		 $query ="SELECT movition FROM move ORDER BY id DESC LIMIT 1";
	    if ($r = mysqli_query ($conn, $query)) {
	   while ($row = mysqli_fetch_array ($r)) {		
              print "<h2>{$row['movition']} </h2> ";	}
			  }
		 
	 }
	 
	
}

elseif(isset($_POST['backword']))
{$SQL = "INSERT INTO move (movition) VALUES ('B')";
     if(!mysqli_query($conn,$SQL)){
	 
	 echo "NOT UPDATED";}
	 
	 else{
		 
		 $query ="SELECT movition FROM move ORDER BY id DESC LIMIT 1";
	    if ($r = mysqli_query ($conn, $query)) {
	   while ($row = mysqli_fetch_array ($r)) {		
              print "<h2>{$row['movition']} </h2>";	}
			  }
		 
		 
	 }}
	 
elseif(isset($_POST['left']))
{               $SQL = "INSERT INTO move (movition) VALUES ('L')";
     if(!mysqli_query($conn,$SQL)){
	 
	 echo "NOT  UPDATED";}
	 
	 else{
	 
	 
	 $query ="SELECT movition FROM move ORDER BY id DESC LIMIT 1";
	    if ($r = mysqli_query ($conn, $query)) {
	   while ($row = mysqli_fetch_array ($r)) {		
              print "<h2>{$row['movition']} </h2> ";	}
			  }
	 
	 
	 }
	 }	 
	 
	 elseif(isset($_POST['right']))
{         $SQL = "INSERT INTO move (movition) VALUES ('R')";
     if(!mysqli_query($conn,$SQL)){
	 
	 echo "NOT UPDATED ";}
	 
	 else{
		 
		 
		  $query ="SELECT movition FROM move ORDER BY id DESC LIMIT 1";
	    if ($r = mysqli_query ($conn, $query)) {
	   while ($row = mysqli_fetch_array ($r)) {		
              print "<h2>{$row['movition']} </h2> ";	}
			  }
	 }}
	 
else{
	$SQL = "UPDATE move SET movition='S'";
     if(!mysqli_query($conn,$SQL)){
	 
	 echo "NOT UPDATED ";}
	 
	 
	 
	 else{
		 $query ="SELECT movition FROM move ORDER BY id DESC LIMIT 1";
	    if ($r = mysqli_query ($conn, $query)) {
	   while ($row = mysqli_fetch_array ($r)) {		
              print "<h2>{$row['movition']} </h2>";	}
			  }
	 }
}


header("refresh:3; url=task1_control panel.html");




?>

<?php

mysqli_close($conn);
?>

</body> 
</html> 
