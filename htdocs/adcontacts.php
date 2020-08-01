<html>
<head>
</head>
<body>
<form method="POST" action="adcontacts.php">
<input name="unit" type="text" placeholder="Подразделение"/>
<input name="phone" type="text" placeholder="Телефон"/>
<input name="email" type="text" placeholder="Электронная почта"/>
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
  if (isset($_POST['unit']) && isset($_POST['phone']) && isset($_POST['email']) && (!empty($_POST['unit'])) && (!empty($_POST['phone'])) && (!empty($_POST['email']))){

// Переменные с формы
$unit = $_POST['unit'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// Параметры для подключения
$db_table = "contacts"; // Имя Таблицы БД

// Подключение к базе данных
$link = mysqli_connect($host, $user, $password, $database) ;

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($link->connect_error) {
die('Ошибка : ('. $link->connect_errno .') '. $link->connect_error);
}

$result = $link->query("INSERT INTO ".$db_table." (unit,phone,email) VALUES ('$unit','$phone','$email')");
}

}
else
{
  echo "Вас поймали за руку, как дешёвку, при попытке входа в аккаунт администратора";
  header("Location: admin.php");
}
?>
