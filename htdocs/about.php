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
echo '<header><font color=black><b><font size=7><b>О компании</font size=5></font color=black></header><br/>';
echo 'Наша компания занимается продажей лопат оптом и в розницу.<br/>
Мы продаём лопаты для любых целей и любых цветов. Возможны индивидуальные исполнения.<br/>
Мы располагаемся по адресу: Санкт-Петербург, ул. Землекопов дом 4, офис 204.<br/>
Мы работаем ежедневно с 09:00 до 20:00.<br/>
Ждём Вас в наших магазинах лопат!<br/>';
echo "<form action='index.php'>
    <button type='submit'>Главная страница</button>
</form>";
mysqli_close($link);
?>
