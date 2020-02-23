<?php
include_once("bd.php");

define("HOST", "localhost");
define("USER","root");
define("PASSWORD","");
define("DB_NAME", "mirea");

$age  = $_POST['age']; 
$name = $_POST['name']; 
$surname = $_POST['surname']; 


$connect = mysqli_connect("localhost","root", "","mirea");

mysqli_query($connect, "UPDATE user SET age='$age', name='$name', surname= '$surname'  WHERE login='$login'");

$name = mysqli_query($connect, "SELECT * FROM user where login = '" .$_SESSION['login']. "' ");
$name1 = mysqli_fetch_assoc($name);
 mysqli_close($connect);
?>
<!DOCTYPE html>
<html>

	<head>
	<meta charset = "UTF-8"/ >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Изменить</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="sitess.css" rel="stylesheet" type="text/css"/>
	
	</head>
	
	<body>
		<div class = "container">
			<form method="POST" action="">
				<div class="dws-input" style="padding-top: 10px;">
					<input type="text" name="name" placeholder="Имя"  required autofocus="">
				</div>
				<div class="dws-input">
					<input type="text" name="surname" placeholder="Фамилия" required >
				</div>
				<div class="dws-input">
					<input type="text" name="age" placeholder="Возраст" required>
				</div>
				<input class = "dws-submit"type="submit" name="submit" value="Изменить">
			
			</form>
		</div>
	</body>
</html>	