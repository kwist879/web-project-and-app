<?php
include_once("bd.php");
$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name, 'uploads/' .$name);
$connect = mysqli_connect("localhost","root", "","mirea");
mysqli_query($connect, "UPDATE user SET avatar='$name' WHERE login = '" .$_SESSION['login']. "'"); 

header("Location:/profile.php");
mysqli_close($connect);
?>