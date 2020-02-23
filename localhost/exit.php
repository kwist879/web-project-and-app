<?php
 include_once("bd.php"); 
 ?>
<!DOCTYPE html>
<html>
<head>
<title>.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head>
<body>
    
<?php
if (empty($_SESSION['login']) or empty($_SESSION['password'])) {
   require("index.php");
}
 
unset($_SESSION['password']);
unset($_SESSION['login']); 
unset($_SESSION['id']);// уничтожаем переменные в сессиях
 
exit("<meta http-equiv='Refresh' content='0; URL=index.php'>");
 mysqli_close();
?>
 
</body>
</html>