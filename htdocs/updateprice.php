<html>
<head>
</head>
<body>
<form method="POST" action="updateprice.php">
<input name="id" type="text" placeholder="ID"/>
<input name='position' type='text' placeholder='Позиция'/>
<input name='cost' type='text' placeholder='Стоимость'/>
<input type='submit' value='Изменить' class='button'>
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
$position = $_POST['position'];
$cost = $_POST['cost'];

if(isset($_POST['id'])){

$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));
$id = $_POST['id'];

$query = "UPDATE price SET position = '$position' WHERE id = '$id'";
$query2 = "UPDATE price SET cost = '$cost' WHERE id = '$id'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

}

}
else
{
  echo "Вас поймали за руку, как дешёвку, при попытке входа в аккаунт администратора";
  header("Location: admin.php");
}
?>
