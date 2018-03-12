<?php 
$conn=mysqli_connect('localhost','root','','hosi');
if (isset($_GET['id'])) {
	# code...
	extract($_GET);
	mysqli_query($conn,"Delete from users where id=$id");
}
header('location:users.php');
 ?>