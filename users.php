<!DOCTYPE html>
<html>
<head>
	<title>Fetch</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<script src="bootstrap/js/jquery.min.js" ></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(bb.jpg);background-repeat: no-repeat;background-size: 100%">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><b>Scala Hospital Management System</b></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="mission.html">Mission</a></li>
      <li><a href="vision.html">Vision</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
  </div>
</nav>
<table class="table">
	<thead><tr>
		<th>id</th>
		<th>Patient Name</th>
		<th>PATIENT ID. NO.</th>
		<th>DISEASE/INJURY/DIAGNOSIS</th>
		<th>NEXT OF KIN</th>
	</tr></thead>

<?php 
	$conn=mysqli_connect('localhost','root','','hosi');
	$fetch=mysqli_query($conn,"SELECT * FROM pdata");
	while ($row=mysqli_fetch_assoc($fetch)) {
		# code...
		extract($row);
		echo "
			<tbody><tr>
			<td>$id<td/>
			<td>$username<td/>
			<td>$pass</td>
			<td>$record</td>
			<td>$nextofkin</td>
			<td><a href='delete.php?id=$id'>Delete</a><td/>
			<tr/></tbody>";
	}	
 ?>
</table>
</body>
</html>