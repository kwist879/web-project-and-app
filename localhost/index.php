<?php
include_once("bd.php");

define("HOST", "localhost");
define("USER","root");
define("PASSWORD","");
define("DB_NAME", "mirea");

$connect = mysqli_connect("localhost","root", "","mirea");
$sql = mysqli_query($connect,"SELECT * FROM `articl`");
$row = mysqli_fetch_assoc($sql);
 mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="stl.css">
	<title>Наука</title>
</head>
<body>
	<header class="header">
		<div class="container clearfix">
			<div class="header__left">
				<a class="header__logo" href="index.php">
					МИРЭА
				</a>
				<nav class="header__nav">
					<a href="#" class="header__close">
						<span></span>
						<span></span>
					</a>
					<div class="header__nav__wrapper">
						<ul>
							<li><a href="#">Курсы</a></li>
							<li><a href="#">Методичка</a></li>
							<li><a href="#">Типовики</a></li>
							<li><a href="#">Лабы</a></li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="header__right">
				<a href="#" class="header__burger">
					<span></span>
					<span></span>
					<span></span>
				</a>
				<?php
if(empty($login) and empty($password)){
print <<<HERE
<button  onclick="window.location.href='sign.php'" class="header__login" type="submit">Войти</button>
<button  onclick="window.location.href='registration.php'" class="header__login" type="submit">Регистрация</button>
HERE;
}else{
echo "<b style='color:white;font-family: Arial;'>Привет,</b> <a href='profile.php'><strong style='color:white;'>".$login."</strong></a> | <a style='background-color:#C90004; color:white; padding: 4px; border-radius: 11%;' href='exit.php'>Выход</a>";
}
?>
				
			</div>
		</div>
	</header>
	<section class="hotels">
		<div class="container">
			<div class="hotels__items">
				<?php
				while($row = mysqli_fetch_assoc($sql)){
					?>

				<div class="hotels__item">
					<figure class="hotels__image">
						<img src="img/<?php echo $row['image'] ?>" alt="">
					</figure>
					<div class="hotels__text">
						<h3 class="hotels__tittle"><?php echo $row['title'] ?></h3>
						<div class="hotels__props clearfix">
							<div class="hotels__theme"><?php echo $row['theme'] ?> тем</div>
							<div class="hotels__clock"><?php echo $row['clock'] ?> часов</div>
						</div>
						<button class="hotels__button">Перейти к курсу</button>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</section>
	<div class="footer">
		
	</div>
</body>
</html>