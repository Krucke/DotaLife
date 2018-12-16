<style media="screen">
  h1{
    color:green;
  }
</style>
<title>Новости</title>
<!-- Карусель -->
<div class="row">
  <div class="col-sm-12 mx-auto begin-page">
    <div id="carouselExampleIndicators" class="carousel slide mx-auto" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://wallpaperscave.ru/images/original/17/12-31/games-dota-2-6413.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://wallpaperscave.ru/images/original/17/12-31/games-dota-2-warlock-6399.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://i.ytimg.com/vi/eo58GSsOa9M/maxresdefault.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<hr class="my-2" style="background: white">

<!-- новости -->
<h3 class="text-center">НОВОСТИ</h3>
<div class="row">
  <?php foreach ($news as $new):?>
  <div class="col-sm-12">
    <div class="news-block">
      <img src="<?=$new['img_new']?>" class="rounded float-left col-sm-2" alt="">
      <div class="float-right col-sm-10">
        <h5 class="text-center"><a href="/site/readallnew?id=<?=$new['id_new']?>"><?=$new['title_new']?></a></h5>
        <p class="text-justify"><?=$new['pre_text']?></p>
        <span><?=date("M d, Y")?></span>
        <a href="/site/readallnew?id=<?=$new['id_new']?>" class="float-right read">Читать полностью</a>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
<?php endforeach; ?>
</div>
<!-- статьи -->
  <hr class="my-2" style="background: white">
    <hr class="my-2 w-75" style="background: #DD163B">
<div class="row">
  <div class="col-sm-6 float-left">
    <h3 class="text-center">САМЫЕ <span>ПРОСМАТРИВАЕМЫЕ</span></h3>
    <?php foreach($rated as $rate): ?>
      <div class="col-sm-10 mx-auto">
        <div class="card w-100">
          <img class="card-img-top" src="<?=$rate['img_new']?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?=$rate['title_new']?></h5>
            <p class="text-justify"><?=mb_substr($rate['full_text'],0,150)."..."?></p>
            <a href="/site/readallnew?id=<?=$rate['id_new']?>" class="read">Читать полностью</a>
          </div>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
  <div class="col-sm-6 float-left">
    <h3 class="text-center">НОВИНКИ</h3>
    <?php foreach($latest as $late): ?>
      <div class="col-sm-10 mx-auto">
        <div class="card w-100">
          <img class="card-img-top" src="<?=$late['img_new']?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?=$late['title_new']?></h5>
            <p class="text-justify"><?=mb_substr($late['full_text'],0,150)."..."?></p>
            <a href="/site/readallnew?id=<?=$late['id_new']?>" class="read">Читать полностью</a>
          </div>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
  <!-- ссылки -->
</div>
<div class="clearfix"></div>
