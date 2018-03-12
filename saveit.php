<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<?php 
if (isset($_POST['username'])) {
	# code...
	$conn=mysqli_connect('localhost','root','','hosi');
	if (!$conn) {
		# code...
		echo "Failed to connect to database";
	} else{
		extract($_POST);
		$insertme="INSERT INTO `pdata`(`id`,`username`,`pass`,`record`,`nextofkin`) VALUES (NULL,'$username','$pass','$record','$nextofkin')";
	  	$me=mysqli_query($conn,$insertme);
	  	if ($me) {
	  		# code...
	  		echo "Saved Successfully";
	  	}
	}
}
 ?>
 <div>
 	<a href="users.php" style="text-align: center;font-size: 45px;color: red">CLICK TO VIEW PATIENT DATA</a>
 </div>
</body>
</html>
