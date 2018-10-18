<!DOCTYPE html>
<html>
<head>
	<link href="front.css" rel="stylesheet" type="text/css">
	
</head>

<body style="margin: 0px;">

  <ul>
    <li id="home"><a href="front.html">Home</a></li>
    <li id="One"><a href="">New Event</a></li>
    <li id="Anim"><a href="">Cancel Event</a></li>
    <li><a href="">Authority Details</a></li>
    <li style="float:right"><a href="logout.php">Logout</a></li>
  
  </ul> 



</body>

</html>


<?php 

session_start();

echo "<h1>Welcome ". $_SESSION['name'];

?>


