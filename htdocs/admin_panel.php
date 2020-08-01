<html>
<style>
/*th, td {padding: 10px;}*/
header{
  background: #808080;
}
table {
   border: 4px double black; /* Рамка вокруг таблицы */
   border-collapse: collapse; /* Отображать только одинарные линии */
  }
th {
  background: #808080;
  color:  #FFFFFF;
  padding: 5px; /* Поля вокруг содержимого ячеек */
  border: 1px solid black; /* Граница вокруг ячеек */
}

td {
  background:#C0C0C0;
  padding: 5px; /* Поля вокруг содержимого ячеек */
  border: 1px solid black; /* Граница вокруг ячеек */
}
</style>
</body>
</html>

<?php
session_start();
if ($_SESSION['aaa'] == true){
  $user = 'root';
  $password = 'root';
  $database = 'webportal';
  $host = 'localhost';
$link = mysqli_connect($host, $user, $password, $database);
echo "<title>Admin</title>";
echo '<font face=Arial><header><h1><strong>Панель администратора<br></strong></h1></header></font>';

echo "<form action='adcontacts.php'>
    <button type='submit'>Добавление контактов</button>
</form>";
echo "<form action='adprice.php'>
    <button type='submit'>Добавление в прайс-лист</button>
</form>";
echo "<form action='adusers.php'>
    <button type='submit'>Добавление админов</button>
</form>";
echo "<form action='delcontacts.php'>
    <button type='submit'>Удаление контактов</button>
</form>";
echo "<form action='delprice.php'>
    <button type='submit'>Удаление в прайс-листе</button>
</form>";
echo "<form action='delusers.php'>
    <button type='submit'>Удаление админов</button>
</form>";
echo "<form action='updatecontacts.php'>
    <button type='submit'>Обновление контактов</button>
</form>";
echo "<form action='updateprice.php'>
    <button type='submit'>Обновление в прайс-листе</button>
</form>";
echo "<form action='deshevka.php'>
    <button type='submit'>Выход</button>
</form>";
}
/*
if ($_GET['page'] == acontacts)
{
require ('adcontacts.php');
require ('updatecontacts.php');
require ('delcontacts.php');
}
if ($_GET['page'] == aprice)
{
require ('adprice.php');
require ('updateprice.php');
require ('delprice.php');
}
if ($_GET['page'] == ausers)
{
  require ('adusers.php');
  require ('delusers.php');
}
if ($_GET['page'] == aping)
{
  require ('status.php');
}
echo '<font color="black"><ul><a href="http://localhost/admin_panel.php?page=aprice">Редактирование прайс-листов</a></ul></font>';
echo '<font color="black"><ul><a href="http://localhost/admin_panel.php?page=acontacts">Редактирование контактов</a></ul></font>';
echo '<font color="black"><ul><a href="http://localhost/admin_panel.php?page=ausers">Добавление и удаление админов</a></ul></font>';
echo '<font color="black"><ul><a href="http://localhost/admin_panel.php?page=aping">Ping</a></ul></font>';
echo '<font color="black"><ul><a href="http://localhost/deshevka.php">Выход из аккаунта</a></ul></font>';
mysqli_close($link);
}
*/
else
{
  echo "Вас поймали за руку, как дешёвку, при попытке входа в аккаунт администратора";
  header("Location: admin.php");
}
?>
