<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
  <nav class="navbar navbar-expand-lg" style="background:rgba(0, 0, 0, 0.8)">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="background-image: url('https://psv4.userapi.com/c848436/u77283679/docs/d14/1600736aafc1/1.png?extra=occ_WrTmZ5TI3UU5yVBRsXg-0yRpdyRvyNAmDjB17-FO1yOudk_06k0RbzIodx_A6wxhi9CuNNV-pbSzHX7pqlq8vXwBkZc5lXdfT_Er6xoHifhSGRaPR9_KHAjpBPOCInR-Y1MbmsI-HLImwXv1Nw')"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/site"><span>D</span>OTA <span>L</span>IFE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/site">ГЛАВНАЯ <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/site/news">НОВОСТИ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/site/contact">КОНТАКТЫ</a>
        </li>
        <li class="nav-item more_items">
          <a class="nav-link" href="/site">БАЗА ЗНАНИЙ</a>
          <ul>
            <li class="nav-item"><a href="/site/heroes" class="nav-link text-center">Герои</a></li>
            <li class="nav-item"><a href="/site/items" class="nav-link text-center">Предметы</a></li>
            <li class="nav-item"><a href="/site/guides" class="nav-link text-center">Гайды</a></li>
          </ul>
        </li>
        <?php if(Yii::$app->user->isGuest): ?>
          <li class="nav-item">
            <a class="nav-link" href="/site/login">ВОЙТИ</a>
          </li>
        <?php endif; ?>
        <?php if(!Yii::$app->user->isGuest): ?>
          <li class="nav-item more_items">
            <a class="nav-link" href="/site/logout">ИГРОК <?=Yii::$app->user->identity->username?></a>
            <ul>
              <li class="nav-item"><a href="/site/profile" class="nav-link text-center">ПРОФИЛЬ</a></li>
              <li class="nav-item"><a href="/site/logout" class="nav-link text-center">ВЫЙТИ</a></li>
            </ul>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>
</div>

    <div class="container">
        <?= $content ?>
    </div>

  <div class="col-sm-12 f w-100">
    <p class="float-left mx-auto">Copyright (C) 2018 <span>Anton</span></p>
  </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
