<html>
<head>
</head>
<body>
<form action='adusers.php' method='post'>
<input type='text' placeholder='Логин' class='input' name='login' required><br>
<input type='password' placeholder='Пароль' class='input' name='pswd' required><br>
<input type='submit' value='Добавить' class='button'>
</form>
</body>
</html>
<?php
session_start();
if ($_SESSION['aaa'] == true){
  $user = 'root';
  $password = 'root';
  $database = 'webportal';
  $host = 'localhost';
if (isset($_POST['login']) && isset($_POST['pswd'])) {

// Переменные с формы
$login = $_POST['login'];
$pswd = md5($_POST['pswd']);

// Параметры для подключения
$db_table = "users"; // Имя Таблицы БД

// Подключение к базе данных
$link = mysqli_connect($host, $user, $password, $database) ;


$result = $link->query("INSERT INTO ".$db_table." (login,password) VALUES ('$login','$pswd')");
if ($result)
{
  echo "string";
}
}

}
else
{
  echo "Вас поймали за руку, как дешёвку, при попытке входа в аккаунт администратора";
  header("Location: admin.php");
}
?>
