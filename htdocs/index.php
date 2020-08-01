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

$user = 'root';
$password = 'root';
$database = 'webportal';
$host = 'localhost';
$link = mysqli_connect($host, $user, $password, $database);
echo '<header><font color=black><b><font size=7><b>Главная страница</font size=5></font color=black></header><br/>';

echo "<form action='about.php'>
    <button type='submit'>О компании</button>
</form>";
echo "<form action='price.php'>
    <button type='submit'>Цены</button>
</form>";
echo "<form action='contacts.php'>
    <button type='submit'>Контакты</button>
</form>";
echo "<form action='admin.php'>
    <button type='submit'>Для администратора</button>
</form>";
/*if ($_GET['page'] == about){
echo '<header><font color=black><b><font size=7><b>О компании</font size=5></font color=black></header><br/>';
echo "<form action='about.php'>
    <button type='submit'>О компании</button>
</form>";
echo '<li><a href="http://localhost/index.php?page=about">О компании</a></li>';
echo '<li><a href="http://localhost/index.php?page=price">Прайс лист</a></li>';
echo '<li><a href="http://localhost/index.php?page=contacts">Контакты</a></li>';
echo '<li><a href="http://localhost/index.php?page=admin">Маэстро</a></li>';
}
elseif ($_GET['page'] == price){
  echo "<form action='price.php'>
      <button type='submit'>Цены</button>
  </form>";
echo '<header><font color=black><b><font size=7><b>Прайс лист</font size=5></font color=black></header><br/>';
echo '<li><a href="http://localhost/index.php?page=about">О компании</a></li>';
echo '<li><a href="http://localhost/index.php?page=price">Прайс лист</a></li>';
echo '<li><a href="http://localhost/index.php?page=contacts">Контакты</a></li>';
echo '<li><a href="http://localhost/index.php?page=admin">Маэстро</a></li>';

}
elseif ($_GET['page'] == contacts){
  echo "<form action='contacts.php'>
      <button type='submit'>Контакты</button>
  </form>";
echo '<header><font color=black><b><font size=7><b>Контактыт</font size=5></font color=black></header><br/>';
echo '<li><a href="http://localhost/index.php?page=about">О компании</a></li>';
echo '<li><a href="http://localhost/index.php?page=price">Прайс лист</a></li>';
echo '<li><a href="http://localhost/index.php?page=contacts">Контакты</a></li>';
echo '<li><a href="http://localhost/index.php?page=admin">Маэстро</a></li>';

}
elseif ($_GET['page'] == admin) {
  echo "<form action='admin.php'>
      <button type='submit'>Для администратора</button>
  </form>";
  require ('admin.php');
  echo '<li><a href="http://localhost/index.php?page=about">О компа
  нии</a></li>';
  echo '<li><a href="http://localhost/index.php?page=price">Прайс лист</a></li>';
  echo '<li><a href="http://localhost/index.php?page=contacts">Контакты</a></li>';
  echo '<li><a href="http://localhost/index.php?page=admin">Маэстро</a></li>';
}
else{
echo '<header><font color=black><b><font size=7><b>Лопаты</font size=5></font color=black></header><br/>';
echo '<li><a href="http://localhost/index.php?page=about">О компании</a></li>';
echo '<li><a href="http://localhost/index.php?page=price">Прайс лист</a></li>';
echo '<li><a href="http://localhost/index.php?page=contacts">Контакты</a></li>';
echo '<li><a href="http://localhost/index.php?page=admin">Маэстро</a></li>';

}

if ($_GET['page'] == about) {
  echo 'Наша компания занимается продажей лопат оптом и в розницу.<br/>
  Мы продаём лопаты для любых целей и любых цветов. Возможны индивидуальные исполнения.<br/>
  Мы располагаемся по адресу: Санкт-Петербург, ул. Землекопов дом 4, офис 204.<br/>
  Мы работаем ежедневно с 09:00 до 20:00.<br/>
  Ждём Вас в наших магазинах лопат!<br/>';
}

if ($_GET['page'] == price){
echo "Все указанные в прайс листе изделия доступны для заказа и присутствуют в магазинах.<br/>
Стоимости в прайс листе указаны с учётом НДС20%.<br/>";
$query ="SELECT * FROM price";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    $rows = mysqli_num_rows($result);
    echo "<table><tr><th>Позиция</th><th>Стоимость</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 1 ; $j < 3; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
}
}

if ($_GET['page'] == contacts){
echo "Вы можете связаться с нашими специалистами по телефону или электронной почте:";
$query ="SELECT * FROM contacts";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    $rows = mysqli_num_rows($result);
    echo "<table><tr><th>Подразделение</th><th>Телефон</th><th>Эл. почта</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 1 ; $j < 4; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
}
}*/
mysqli_close($link);

?>
