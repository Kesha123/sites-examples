<html>
<head>
</head>
<body>
<form action='adprice.php' method='post'>
<input name='position' type='text' placeholder='Позиция'/>
<input name='cost' type='text' placeholder='Стоимость'/>
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
  if (isset($_POST['position']) && isset($_POST['cost'])){

// Переменные с формы
$position = $_POST['position'];
$cost = $_POST['cost'];

// Параметры для подключения
$db_table = "price"; // Имя Таблицы БД

// Подключение к базе данных
$link = mysqli_connect($host, $user, $password, $database) ;

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($link->connect_error) {
die('Ошибка : ('. $link->connect_errno .') '. $link->connect_error);
}

$result = $link->query("INSERT INTO ".$db_table." (position,cost) VALUES ('$position','$cost')");
}

}
else
{
  echo "Вас поймали за руку, как дешёвку, при попытке входа в аккаунт администратора";
  header("Location: admin.php");
}
?>
