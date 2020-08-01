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
echo '<header><font color=black><b><font size=7><b>Контакты</font size=5></font color=black></header><br/>';
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
echo "<form action='index.php'>
    <button type='submit'>Главная страница</button>
</form>";
mysqli_close($link);
?>
