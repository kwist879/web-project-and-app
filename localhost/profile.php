<?php
include_once("bd.php");

define("HOST", "localhost");
define("USER","root");
define("PASSWORD","");
define("DB_NAME", "mirea");

$connect = mysqli_connect("localhost","root", "","mirea");
$name = mysqli_query($connect, "SELECT * FROM user where login = '" .$_SESSION['login']. "' ");
$name1 = mysqli_fetch_assoc($name);
//$surname =;
//$age = ;
 mysqli_close($connect);
?>
<!DOCTYPE html>
<html>
<head>
<title>Профиль</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link href='https://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://www.bitstorm.org/jquery/color-animation/jquery.animate-colors-min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>

<link rel="stylesheet" type="text/css" href="profile.css">
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
}
else{
echo "<b style='color:white;font-family: Arial;'>Привет,</b> <a href='profile.php'><strong style='color:white;'>".$login."</strong></a> | <a style='background-color:#C90004; color:white; padding: 4px; border-radius: 11%;' href='exit.php'>Выход</a>";
}
?>
        
      </div>
    </div>
  </header>


<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                               
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);"><?php echo $name1['login'] ?></a></h2>
                                </div>
                               
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Информация</a>
                                    </li>
                                   
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Имя</label>
                                            </div>

                                            <div class="col-md-8 col-6">
                                                <?php echo $name1['name']?> 
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Фамилия</label>
                                            </div>

                                            <div class="col-md-8 col-6">
                                                <?php echo $name1['surname']?> 
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Возраст</label>
                                            </div>

                                            <div class="col-md-8 col-6">
                                                <?php echo $name1['age']?> 
                                            </div>
                                        </div>
                                        <hr />
                                        <input TYPE="button" VALUE="Изменить" ONCLICK="NewWindow()">
                                        <script>
                                        function NewWindow()
                                        {
                                          window.open("change.php","","width=500px, height=500px");
                                        }
                                        </script>
                                        <input TYPE="button" VALUE="Обновить" ONCLICK="ReloadButton()">
                                        <script>
                                        function ReloadButton()
                                        {
                                          location.reload();
                                        }
                                        </script>
                                                            
                                    </div> 
                                   
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <script type="text/javascript">
    $('.my').change(function() {
    if ($(this).val() != '') $(this).prev().text('Выбрано файлов: ' + $(this)[0].files.length);
    else $(this).prev().text('Выберите файлы');
});
  </script>
</body>
</html>