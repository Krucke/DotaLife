<style media="screen">
  .a{
    margin: 0;
    margin-left: 10px;
    color: black;
  }
  a:hover{
    color: #8FBF00;
  }
  .card{
    margin-bottom: 15px;
  }
  .btn{
    margin-left: 16px;
    margin-bottom: 5px;
  }
  .form{
    margin-left: 200px;
  }
</style>
<title>Новости</title>
<h3 class="text-center">Новости</h3>
<form class="form" action="/site/find?text=<?$_POST['find_area']?>" method="post">
  <input type="text" name="find_area" value="" class="form-control w-75 float-left" required placeholder="Поиск...">
  <button type="submit" name="find" class="btn btn-success float-left"><i class="fa fa-search" aria-hidden="true"></i></button>
  <div class="clearfix"></div>
</form>
<a href="/site/addnew" class="btn btn-success">Добавить новость</a>
<div class="col-12">
<?php
  if($news == null){
    echo "Нихуя не найден долбаеб блять!";
  }
  else {
  foreach($news as $new){
?>
<div class="card">
  <img class="card-img-top" src="<?=$new['img_new']?>" alt="Card image cap">
  <div class="card-body">
    <h3><?=$new['title_new']?></h3>
    <p class="card-text"><?=$new['pre_text']?></p>

  </div>
  <div class="card-footer text-muted">
   <p class="card-text float-left"><?=$new['date_create']?></p>
   <?php if(!Yii::$app->user->isGuest and Yii::$app->user->identity->isadmin == 1): ?>
     <div class="a float-left">
       <a href="/site/updatenew?id=<?=$new['id_new']?>" class="a"><i class="fa fa-pencil" aria-hidden="true"></i></a>
       <a href="/site/deletenew?id=<?=$new['id_new']?>" class="a"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
     </div>
   <?php endif;} ?>
   <a class="float-right" href="/site/readallnew?id=<?=$new['id_new']?>">Читать полностью...</a>
 </div>
</div>
<?php } ?>
</div>
