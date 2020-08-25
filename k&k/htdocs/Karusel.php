<html>
<style>
.layer1
{
 margin-left: 25%; /* Отступ слева */
 padding: 10px; /* Поля вокруг текста */
}
.carousel-inner {
height: 400px;
width: 900px;
}

.carousel-inner img {
transform: translateY(0%);
width: 100%;
height: 100%;
}

.carousel-caption {
position: absolute;
top: 50%;
transform: translateY(-80%);
}
</style>
<body>

  <div id="slides" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
  </ul>
  <div class="layer1">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Car/first.jpg" alt="Первый слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Car/second.jpg" alt="Второй слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Car/third.jpg" alt="Третий слайд">
    </div>
  </div>

  <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
</div>
</body>
</html>
