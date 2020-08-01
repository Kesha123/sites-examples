<html>
<head>
</head>
<body>
<form method="POST" action="updatecontacts.php">
<input name="id" type="text" placeholder="ID"/>
<input name="unit" type="text" placeholder="Подразделение"/>
<input name="phone" type="text" placeholder="Телефон"/>
<input name="email" type="text" placeholder="Электронная почта"/>
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

if(isset($_POST['id'])){

$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));
$id = $_POST['id'];
$unit = $_POST['unit'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$query ="UPDATE contacts SET unit = '$unit', phone = '$phone', email = '$email' WHERE id = '$id'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

}

}
else
{
  echo "Вас поймали за руку, как дешёвку, при попытке входа в аккаунт администратора";
  header("Location: admin.php");
}
?>
