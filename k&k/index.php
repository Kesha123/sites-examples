<html>
<style>
     body:before {
      content: '';
      position: fixed; /* Фиксируем на одном месте */
      left: 0; right: 0; /* Вся ширин */
      top: 0; bottom: 0; /* Вся высота */
      z-index: -1; /* Фон ниже текста */
      /* Параметры фона */
      background: url(img/logo.jpg);
      filter: blur(5px); /* Размытие */
     }
     body {
      color: #fff; /* Цвет текста */
     }
</style>
</html>
<?php
session_start();
require ('Hat.php');
require ('Karusel.php');
require ('Footer.php');
?>
