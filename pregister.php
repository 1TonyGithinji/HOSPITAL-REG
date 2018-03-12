<?php include('pserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
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
      <h1 style="text-align: center;color: red">Patient Registration</h1>
      <form method="post" action="pregister.php" style="text-align: center;font-size: 25px">
  	   <?php include('perrors.php'); ?>
  	   Username:<br><input type="text" name="username" value="<?php echo $username; ?>"><br>
  	   Email:<br><input type="email" name="email" value="<?php echo $email; ?>"><br>
  	   Password:<br><input type="password" name="password_1"><br>
  	   Confirm password:<br><input type="password" name="password_2"><br>
  	   <button type="submit" class="btn" name="reg_user">Register</button><br>
  	   <p><b>Already a member? <a href="plogin.php">Sign in</a></b></p><br>
  </form>
</body>
</html>