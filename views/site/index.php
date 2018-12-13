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
<h3 class="text-center">ПОСЛЕДНИЕ <span>НОВОСТИ</span></h3>
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
<hr class="my-2">

<!-- статьи -->
<h3 class="text-center">ПОСЛЕДНИЕ <span>СТАТЬИ</span></h3>
<div class="row">
  <div class="card col-sm-4 float-left">
    <img class="card-img-top" src="https://dota2hq.eu/_ph/1/276162889.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="text-left"><a href=""><?=strtoupper("header new header new and some text for news")?></a></h5>
      <img src="https://fakeimg.pl/30x30/6D0E52" alt="" class="rounded"> by <span>Username</span> in <?=date("M d, Y")?>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="read">READ MORE</a>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="card col-sm-4 float-left">
    <img class="card-img-top" src="https://wallpaperscave.ru/images/original/17/12-31/games-dota-2-6413.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="text-left"><a href=""><?=strtoupper("header new header new and some text for news")?></a></h5>
      <img src="https://fakeimg.pl/30x30/6D0E52" alt="" class="rounded"> by <span>Username</span> in <?=date("M d, Y")?>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="read">READ MORE</a>
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- ссылки -->
  <div class="col-sm-4 s">
    <div class="social">
      <h4 class="text-center"><span>WE</span> ARE SOCIAL</h4>
    </div>
    <div class="after_soc">
      <ul>
        <li id="f" class="float-left"><a href=""><span class="navbar-toggler-icon" style="background-image: url('https://banner2.kisspng.com/20180804/xl/kisspng-website-development-drupal-computer-icons-scalable-drupal-svg-png-icon-free-download-427052-onli-5b6544626662e7.0291968815333632984194.jpg')"></span></a></li>
        <li class="float-left"><a href=""><span class="navbar-toggler-icon" style="background-image: url('https://banner2.kisspng.com/20180804/xl/kisspng-website-development-drupal-computer-icons-scalable-drupal-svg-png-icon-free-download-427052-onli-5b6544626662e7.0291968815333632984194.jpg')"></span></a></li>
        <li id="f" class="float-left"><a href=""><span class="navbar-toggler-icon" style="background-image: url('https://banner2.kisspng.com/20180804/xl/kisspng-website-development-drupal-computer-icons-scalable-drupal-svg-png-icon-free-download-427052-onli-5b6544626662e7.0291968815333632984194.jpg')"></span></a></li>
        <li class="float-left"><a href=""><span class="navbar-toggler-icon" style="background-image: url('https://banner2.kisspng.com/20180804/xl/kisspng-website-development-drupal-computer-icons-scalable-drupal-svg-png-icon-free-download-427052-onli-5b6544626662e7.0291968815333632984194.jpg')"></span></a></li>
        <li class=" float-left"><a href=""><span class="navbar-toggler-icon" style="background-image: url('https://banner2.kisspng.com/20180804/xl/kisspng-website-development-drupal-computer-icons-scalable-drupal-svg-png-icon-free-download-427052-onli-5b6544626662e7.0291968815333632984194.jpg')"></span></a></li>
        <li id="f" class="float-left"><a href=""><span class="navbar-toggler-icon" style="background-image: url('https://banner2.kisspng.com/20180804/xl/kisspng-website-development-drupal-computer-icons-scalable-drupal-svg-png-icon-free-download-427052-onli-5b6544626662e7.0291968815333632984194.jpg')"></span></a></li>
        <li class="float-left"><a href=""><span class="navbar-toggler-icon" style="background-image: url('https://banner2.kisspng.com/20180804/xl/kisspng-website-development-drupal-computer-icons-scalable-drupal-svg-png-icon-free-download-427052-onli-5b6544626662e7.0291968815333632984194.jpg')"></span></a></li>
        <li id="f" class="float-left"><a href=""><span class="navbar-toggler-icon" style="background-image: url('https://banner2.kisspng.com/20180804/xl/kisspng-website-development-drupal-computer-icons-scalable-drupal-svg-png-icon-free-download-427052-onli-5b6544626662e7.0291968815333632984194.jpg')"></span></a></li>
      </ul>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
  <div class="clearfix"></div>
  <!-- last and top news -->
  <hr class="my-2 w-75"><hr class="my-2 w-50" style="background: white;">
  <!-- <div class="col-sm-5 latest float-left">
      <h3 class="text-center latest-h3">Последние добавленные</h3>
      <div class="short">
        <img src="https://wallpaperscave.ru/images/original/17/12-31/games-dota-2-6413.jpg" alt="" class="float-left" width="100" height="100">
        <div class="inshort">
          <h6 class="text-justify"><a href=""><?=strtoupper("header new header new and some text for")?></a></h6>
          <span><?=date("M d, Y")?></span>
          <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="short">
        <img src="https://wallpaperscave.ru/images/original/17/12-31/games-dota-2-6413.jpg" alt="" class="float-left" width="100" height="100">
        <div class="inshort">
          <h6 class="text-justify"><a href=""><?=strtoupper("header new header new and some text for")?></a></h6>
          <span><?=date("M d, Y")?></span>
          <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="short">
        <img src="https://wallpaperscave.ru/images/original/17/12-31/games-dota-2-6413.jpg" alt="" class="float-left" width="100" height="100">
        <div class="inshort">
          <h6 class="text-justify"><a href=""><?=strtoupper("header new header new and some text for")?></a></h6>
          <span><?=date("M d, Y")?></span>
          <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
  </div>
  <div class="col-sm-5 latest float-right">
      <h3 class="text-center latest-h3" style="color: white;">Последние добавленные</h3>
      <div class="short">
        <img src="https://wallpaperscave.ru/images/original/17/12-31/games-dota-2-6413.jpg" alt="" class="float-left" width="100" height="100">
        <div class="inshort">
          <h6 class="text-justify"><a href=""><?=strtoupper("header new header new and some text for")?></a></h6>
          <span><?=date("M d, Y")?></span>
          <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="short">
        <img src="https://wallpaperscave.ru/images/original/17/12-31/games-dota-2-6413.jpg" alt="" class="float-left" width="100" height="100">
        <div class="inshort">
          <h6 class="text-justify"><a href=""><?=strtoupper("header new header new and some text for")?></a></h6>
          <span><?=date("M d, Y")?></span>
          <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="short">
        <img src="https://wallpaperscave.ru/images/original/17/12-31/games-dota-2-6413.jpg" alt="" class="float-left" width="100" height="100">
        <div class="inshort">
          <h6 class="text-justify"><a href=""><?=strtoupper("header new header new and some text for")?></a></h6>
          <span><?=date("M d, Y")?></span>
          <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
  </div> -->
<div class="clearfix"></div>
