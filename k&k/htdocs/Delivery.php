<?php
session_start();
require ('Hat.php');
?>
<html>
<style>
   .layer1
   {
    margin-left: 20%; /* Отступ слева */
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
        <div class="col-md-9" style="background-color: white">
          <h1 class="font-weight-bold">Доставка</h1><br><br>
          <h4 class="font-weight-bold">Наша компания осуществляет доставку через частные и <br> государственные службы доставки на выбор клиента как до <br> пунктов выдачи, так и курьером до квартиры\подъезда.</h4><br>
          <h5>Доставка осуществляется по странам:</h5><br>
          <h5>Российская Федерация, Республика Беларусь, Казахстан, Армения.<br>*О Доставке в иные страны уточняйте у менеджеров.</h5>
          <h5>Мы работаем с службами доставки: CDEK, DPD, Деловые линии, ПЭК, Dostavista,<br> Boxberry, Доставка Club, Доставка Guru, Яндекс доставка, Почта России, EMS.</h5><br><br>
          <h4 class="font-weight-bold">Варианты доставки:<h4>
            <ol>
              <h5><li>Доставка по г. Москва, Московской область — возможна день в день по<br> готовности системного блока через службу Яндекс Доставка при условии<br> полной предоплаты (подробнее в разделе оплата).</li></h5>
              <h5><li>Курьерская доставка на дом по г. Москва, Московской область, г. Санкт-<br>Петербург, Ленинградская область возможна через два дня после готовности<br> заказа к отправке с возможностью оплаты при получении основной суммы<br> заказа. (подробнее в разделе оплата).</li></h5>
              <h5><li>Доставка в пункты выдачи и на дом по всей территории России, Беларуси,<br> Казахстана возможна службой доставки СДЭК, отправка заказа<br> осуществляется на следующий день после получения доплаты или готовности<br> заказа с условием оплаты основной суммы заказа при получении.<br> (подробнее в разделе оплата).</li></h5>
              <h5><li>Доставка в пункты выдачи и на дом по всей территории России, возможна<br> службами доставки: DPD, Деловые линии, ПЭК, Boxberry, Почта России, EMS,<br> при условии оплаты дополнительного сбора в размере 1000 рублей за одно<br> отправление. </li></h5>
            </ol><br>
            <h4 class="font-weight-bold">Стоимость доставки:<h4><br>
              <ol>
                <h5><li>Примерную стоимость доставки вы можете уточнить у наших менеджеров<br> при оформлении заказа, или на сайтах удобных для вас служб доставки,<br> менеджер предоставит примерные габариты отправления по вашему<br> запросу.</li></h5>
                <h5><li>Конечная стоимость доставки фиксируется транспортной накладной,<br> предоставляемой вам нашими менеджерами после отправления посылки.</li></h5>
                <h5><li>Оплата за доставку осуществляется после отправления в службу доставки и<br> предоставления фото\скана транспортной накладной с указанием трек-<br>номера для отслеживания отправления, стоимости, пункта назначения, веса<br> и реквизитов получателя\отправителя.</li></h5>
              </ol><br>
              <h5>Безопасность и сохранность заказа в момент доставки один из главных наших<br> приоритетов. </h5><br>
              <h5>Любые отправления нашим клиентам страхуются в обязательном порядке на<br> полную стоимость отправления вне зависимости от типа отправления и адреса<br> получателя заказа.</h5><br>
              <h5>Упаковка происходит силами наших сотрудников, системные блоки<br> прокладываются мягким упаковочным материалом.</h5><br>
              <h5>Системный блок, коробка с коробками из под комплектующих, (и если в заказе<br> присутствует периферия\иные товары) все отправляется одним отправлением<br> (одним местом) скрепленные несколькими слоями упаковочной черной стрейч<br> пленкой. </h5>
            </div>
          </div>
        </div>
      </div>
<?php require ('Footer.php'); ?>
</body>
</html>