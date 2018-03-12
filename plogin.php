<?php include('pserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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
</nav><br><br><br><br>
<h1 style="text-align: center;color: red">Patient Login</h1><br>
  <form method="post" action="plogin.php" style="text-align: center;font-size: 25px">
  	<?php include('perrors.php'); ?>
  		Username:<br><input type="text" name="username"><br>
  		Password:<br><input type="password" name="password"><br>
  	   <button type="submit" class="btn" name="login_user">Login</button><br>
  	<p><b>
  		Not yet a member? <a href="pregister.php">Sign up</a><br>
  	</b></p>
  </form>
</body>
</html>