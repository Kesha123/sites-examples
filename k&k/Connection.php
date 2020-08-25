<?php
session_start();
require ('Hat.php');?>
<html>
<style>
   .layer1
   {
    margin-left: 5%; /* Отступ слева */
    padding: 10px; /* Поля вокруг текста */
   }
   p.dline {
      line-height: 4;
     }
     P {
      line-height: 4em;
     }
     body::before {
      content: '';
      position: fixed; /* Фиксируем на одном месте */
      left: 0; right: 0; /* Вся ширин */
      top: 0; bottom: 0; /* Вся высота */
      z-index: -1; /* Фон ниже текста */
      /* Параметры фона */
      background: url(img/logo.jpg);
      filter: blur(5px); /* Размытие */
     }
</style>
<body>
  <div class="layer1">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-11" style="background-color: white">
          <h1 class="font-weight-bold">Контакты и Наша команда</h1><br><br>
          <h5 class="font-weight-bold">Наш магазин находится по адресу:</h5><br>
          <h5>г. Москва, 1-й Варшавский проезд, 2 стр. 6</h5>
          <h5>На территории производственно-складского комплекса </h5>
          <h5>АО «МосРыбоКомбинат».</h5><br><br>
          <h5 class="font-weight-bold">Как к нам добраться?</h5><br>
          <h5>Ближайшая станция метро: Каширская</h5>
          <h5>Автобус № 607 от метро Каширская до остановки "Молочный комбинат".</h5><br><br>
          <h5>Работаем для вас с понедельника по пятницу <b>с 11:00 до 18:00.</b></h5><br><br>
          <h5><b>За час до приезда</b> требуется уведомить менеджера для заказа пропуска, по телефону: 8 (999) 854-53-03.</h5><br>
          <img src="img/map.jpg" class="rounded mx-auto d-block" alt=""><br>
          <h5 class="font-weight-bold">На скриншоте выше указан путь от метро до нас.</h5><br>
          <img src="img/building.jpg" class="rounded mx-auto d-block" alt=""><br>
          <h5 class="font-weight-bold">Серое двух-этажное здание, вход ворота №2 — далее направо в открытую дверь.</h5><br><br>

          <h3 class="font-weight-bold">Рабочие контакты</h3><br>
          <h5>Руководитель отдела продаж, оптовые закупки, компьютерные клубы и спорные вопросы: </h5>
          <h5>Михаил</h5>
          <h5><a href="https://vk.com/mikhailpianin">https://vk.com/mikhailpianin</a></h5>
          <h5>email: m.pianin@2kcomp.ru</h5><br><br>

          <h5>Руководитель игрового направления:</h5>
          <h5>Александр</h5>
          <h5><a href="https://vk.com/kinggears">https://vk.com/kinggears</a></h5>
          <h5>email: a.bratkov@2kcomp.ru</h5><br><br>

          <h5>Менеджер по продажам:</h5>
          <h5>Виктор</h5>
          <h5><a href="https://vk.com/coldvic">https://vk.com/coldvic</a></h5><br><br>

          <h5>Менеджер по продажам:</h5>
          <h5>Мартин</h5>
          <h5><a href="https://vk.com/skipetor">https://vk.com/skipetor</a></h5><br><br>

          <h5>Руководитель отдела закупок, дистрибьюция и сотрудничество:</h5>
          <h5>Олег</h5>
          <h5><a href="https://vk.com/lfwar">https://vk.com/lfwar</a></h5>
          <h5>email: o.kozlov@2kcomp.ru</h5><br><br>

          <h5>Руководитель Корпоративного отдела:</h5>
          <h5>Иван</h5>
          <h5>email: corp@2kcomp.ru</h5><br><br>

          <h5>Руководитель SMM отдела.</h5>
          <h5>Валерия</h5>
          <h5><a href="https://vk.com/daenerys">https://vk.com/daenerys</a></h5><br><br>

          <h5>Руководитель отдела сервиса и сборки.</h5>
          <h5>Константин</h5>
          <h5><a href="https://vk.com/coolkost9n">https://vk.com/coolkost9n</a></h5><br><br>

          <h5>Сотрудник отдела сборки.</h5>
          <h5>Федор</h5>
          <h5><a href="https://vk.com/frodobaggins97">https://vk.com/frodobaggins97</a></h5><br><br>

          <h5>Сотрудник отдела сборки.</h5>
          <h5>Андрей</h5>
          <h5><a href="https://vk.com/id6406869">https://vk.com/id6406869</a></h5><br><br>

          <h5>Сотрудник отдела сборки и логистики.</h5>
          <h5>Никита</h5>
          <h5><a href="https://vk.com/duneda1n">https://vk.com/duneda1n</a></h5><br><br>




          <h4 class="font-weight-bold">Реквизиты:</h4><br>
          <h4 class="font-weight-bold">Для физических лиц:</h4>
          <h5>Индивидуальный предприниматель Пьянин Михаил Витальевич</h5>
          <h5>ОГРНИП № 318784700406327</h5>
          <h5>ИНН 780629582586 </h5>
          <h5>Юридический адрес:</h5>
          <h5>г. Санкт-Петербург, ул. Белорусская, д. 26 к. 1.</h5>
          <h5>Почтовый адрес:</h5>
          <h5>г. Москва 1-й Варшавский проезд, дом 2, строение 6</h5>
          <h5>Р/С 40802810603500014876</h5>
          <h5>В Точка ПАО Банка "ФК Открытие"</h5>
          <h5>К/С 30101810845250000999</h5>
          <h5>БИК 044525999 </h5>
          <h5>УСН — Доходы\Патент.</h5><br>
          <h4 class="font-weight-bold">Для юридических лиц:</h4>
          <h5>ООО «ПерецМолл» </h5>
          <h5>ОГРН 1197746531927</h5>
          <h5>ИНН 7724488434</h5>
          <h5>КПП 772401001</h5>
          <h5>Юридический адрес: </h5>
          <h5>РФ, 123290, г. Москва Тупик Магистральный 1-й, дом 11, </h5>
          <h5>строение 1, этаж 1, п 2, к 1, о2н.</h5>
          <h5>Почтовый адрес: </h5>
          <h5>РФ, 115201, г. Москва 1-й Варшавский проезд, дом 2, строение 6</h5>
          <h5>Р/С 40702810601300022616</h5>
          <h5>В АО «Альфа-Банк», г. Москва</h5>
          <h5>К/С 30101810200000000593</h5>
          <h5>БИК 044525593</h5>
          <h5>ОСНО</h5>
        </div>
      </div>
    </div>
  </div>
</body>






<?php require ('Footer.php');
?>
