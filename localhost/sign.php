<?php
session_start();

define("HOST", "localhost");
define("USER","root");
define("PASSWORD","");
define("DB_NAME", "mirea");

$connect = mysqli_connect("localhost","root", "","mirea");

$login = $_POST['login'];
$option =['salt' => 'fuckyouallfuckyouall11'];
$password = password_hash($_POST['pass'], PASSWORD_BCRYPT, $option);

if(isset($_POST['login']) && ($_POST['pass'])){
	$sql = mysqli_query($connect,"SELECT count(*) FROM user WHERE `login` = '" .$login."' AND `password` = '".$password."'") or die(mysqli_error());
	$row = mysqli_fetch_assoc($sql);
	if($row['count(*)']>0){
		$_SESSION['login'] = $_POST['login'];

		header("Location: /index.php");exit;
	}else{
			 header("Location: /error.html");
		}
}
?>
<!DOCTYPE html>
<html>

	<head>
	<meta charset = "UTF-8"/ >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Вход</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="sitess.css" rel="stylesheet" type="text/css"/>
	
	</head>
	
	<body>
		<button  onclick="window.location.href='index.php'" class="header__login" type="submit">Вернуться на главную</button>
		<div class = "container">
			<img src="img/ava.png">
			<form method="POST" action="">
				<div class="dws-input">
					<h2 id="signname">Вход</h2>
					<input type="text" name="login" placeholder="Логин" required autofocus="">
				</div>
				<div class="dws-input">
					<input type="password" name="pass" placeholder="Пароль" required>
				</div>
				<input class = "dws-submit"type="submit" name="submit" value="ВОЙТИ">
			
			</form>
		</div>
	</body>
</html>	