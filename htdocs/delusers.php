<html>
<head>
</head>
<body>
<form method="POST" action="delusers.php">
<input name="id" type="text" placeholder="ID"/>
<input type="submit" value="Удалить"/>
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
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
$id = mysqli_real_escape_string($link, $_POST['id']);

$query ="DELETE FROM users WHERE id = '$id'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

}

if(isset($_GET['id']))
{
$id = htmlentities($_GET['id']);
}
$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);
if($result)
{
$rows = mysqli_num_rows($result);
echo "<table><tr><th>id</th><th>login</th><th>пароль</th></tr>";
for ($i = 0 ; $i < $rows ; ++$i)
{
$row = mysqli_fetch_row($result);
echo "<tr>";
for ($j = 0 ; $j < 3; ++$j) echo "<td>$row[$j]</td>";
echo "</tr>";
}
echo "</table>";
mysqli_free_result($result);
}
mysqli_close($link);
}
else
{
  echo "Вас поймали за руку, как дешёвку, при попытке входа в аккаунт администратора";
  header("Location: admin.php");
}
?>
</body>
</html>
