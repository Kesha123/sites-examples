<?php
session_start();

if ($_SESSION['aaa'] == true)
{

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


  /*echo '<font color="black"><ul><a href="http://localhost/admin_panel.php?page=aprice">Редактирование прайс-листов</a></ul></font>';
  echo '<font color="black"><ul><a href="http://localhost/admin_panel.php?page=acontacts">Редактирование контактов</a></ul></font>';
  echo '<font color="black"><ul><a href="http://localhost/admin_panel.php?page=ausers">Добавление и удаление админов</a></ul></font>';
  echo '<font color="black"><ul><a href="http://localhost/admin_panel.php?page=aping">Добавление и удаление админов</a></ul></font>';
  require ('adcontacts.php');
  require ('updatecontacts.php');
  require ('delcontacts.php');
  require ('adprice.php');
  require ('updateprice.php');
  require ('delprice.php');
  require ('adusers.php');
  require ('delusers.php');*/
}
else
{
  echo "<form action='admin.php' method='post'>
  <input type='text' placeholder='Логин' class='input' name='login' required><br>
  <input type='password' placeholder='Пароль' class='input' name='pswd' required><br>
  <input type='submit' value='Войти' class='button'>
  </form>";
  echo "</head>";
$login = $_POST['login'];
$pswd = md5($_POST['pswd']);
$check = False;
$user = 'root';
$password = 'root';
$database = 'webportal';
$host = 'localhost';
$link = mysqli_connect($host, $user, $password, $database);
$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);
$rows = mysqli_num_rows($result);
for ($i = 0 ; $i < $rows ; ++$i)
{
  $row = mysqli_fetch_row($result);
  if (($login == $row[1]) & ($pswd == $row[2]))
  {
    $check = True;
  }
}
if ($check == True)
{
  $_SESSION['aaa'] = true;
  header ("Location: admin_panel.php");

}
else {
#echo "Вас поймали за руку, как дешёвку, при попытке входа в аккаунт администратора";
#header("Location: deshevka.php");
}

mysqli_close($link);
}
?>
