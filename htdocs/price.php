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
echo '<header><font color=black><b><font size=7><b>Прайс лист</font size=5></font color=black></header><br/>';
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
echo "<form action='index.php'>
    <button type='submit'>Главная страница</button>
</form>";
mysqli_close($link);
?>
