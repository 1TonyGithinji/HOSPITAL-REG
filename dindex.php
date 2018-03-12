<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
  <script src="bootstrap/js/jquery.min.js" ></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(bb.jpg);background-repeat: no-repeat;background-size: 100%;text-align: center;">
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
  <h1 style="text-align: center;">Doctor's Area</h1>
<div class="content" style="font-size: 35px">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="dindex.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>	
<h1 style="text-align: center;color: red"><b>ENTER PATIENT DATA</b></h1>
<form method="POST" action="saveit.php" style="text-align: center;font-size: 25px">  
  PATIENT NAME:<br><input type="text" name="username" id="username"><br>
  PATIENT ID. NO.:<br><input type="text" name="pass" id="pass"><br>
  DISEASE/INJURY/DIAGNOSIS:<br><input type="text" name="record" id="record"><br>
  NEXT OF KIN:<br><input type="text" name="nextofkin" id="nextofkin"><br>
  <input type="submit" name="submit" value="submit" id="submit"><br>
  </form>
</body>
</html>