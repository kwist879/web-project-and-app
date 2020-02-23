<?
// Страница регистрации нового пользователя

// Соединямся с БД
$link=mysqli_connect("localhost", "root", "", "mirea");

if(isset($_POST['submit']))
{
    $err = [];

    // проверям логин
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if(strlen($_POST['login']) < 5 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 5-ти символов и не больше 30";
    }

    // проверяем, не сущестует ли пользователя с таким именем
    $query = mysqli_query($link, "SELECT * FROM user WHERE login='".mysqli_real_escape_string($link, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }

    // Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {

        $login = $_POST['login'];
        $option =['salt' => 'fuckyouallfuckyouall11'];
        $password = password_hash($_POST['pass'], PASSWORD_BCRYPT,$option);

        mysqli_query($link,"INSERT INTO user SET login='".$login."', password='".$password."'");
        header("Location: sign.php"); exit();
    }
    else
    {
        echo  "<b style='color:white; font-size:25px;'>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            echo  "<b style='color:white;'>$error</b><br>";
        }
    }
}
?>
<!DOCTYPE html>
<html>

	<head>
	<meta charset = "UTF-8"/ >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Регитрация</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="sitess.css" rel="stylesheet" type="text/css"/>
	
	</head>
	
	<body>
		<button  onclick="window.location.href='index.php'" class="header__login" type="submit">Вернуться на главную</button>
		<div class = "container">
			<img src="img/ava.png">
			<form method="POST" action="">
				
				<div class="dws-input">
                    <h2 id="signname">Регистрация</h2>
					<input type="text" name="login" placeholder="Логин" required>
				</div>
				<div class="dws-input">
					<input type="password" name="pass" placeholder="Пароль" required>
				</div> 
				<input class = "dws-submit"type="submit" name="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ">
			
			</form>
		</div>
	</body>
</html>	