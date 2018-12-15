<?php
  use app\models\User;
?>
<style media="screen">
  .card{
    margin-top: 15px;
  }
  .btn{
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .comment{
    padding: 5px;
    border: 1px solid red;
    margin-bottom: 5px;
  }
  .co{
    margin-left: 80px;
  }
  .a{
    text-decoration: none;
    color: #8FBF00;
  }
  .a:hover{
    text-decoration: none;
    color: #8FBF00;
  }
</style>
<title><?=$new->title_new?></title>
<div class="card">
  <img class="card-img-top" src="<?=$new->img_new?>" alt="Card image cap">
  <div class="card-body">
    <h3><?=$new->title_new?></h3>
    <p class="card-text"><?=$new->full_text?></p>
  </div>
  <div class="card-footer text-muted">
   <p class="card-text float-left"><?=$new->date_create?></p>
 </div>
</div>
<?php
  $ses = Yii::$app->session;
  $ses['last_views'];
?>
<div class="col-12">
  <h4 class="text-left">Комментарии</h4>
  <?php foreach ($com as $c) {?>
  <div class="comment">
    <div class="img_com float-left">
      <img src="../<?php $user = User::findOne($c['author_id']);echo $user->img_profile;?>" alt="" width="70" height="70">
    </div>
      <h4 class="co"><?php $user = User::findOne($c['author_id']);echo $user->username; ?></h4>
      <p class="co"><?=$c['message']?></p>
  </div>
<?php } ?>
<?php if(!Yii::$app->user->isGuest){?>
  <form class="" action="/site/addcomment?id=<?=$new->id_new?>" method="post">
    <textarea name="message" rows="2" cols="80" class="form-control" maxlength="254" placeholder="Оставь комментарий" autofocus></textarea>
    <button type="submit" name="add" class="btn btn-primary float-right">Отправить</button>
  </form>
<?php }else{echo "<h4>Для того, чтобы оставить комментарий, необходимо <a class='a' href='/site/login'>авторизироваться</a>.</h4>";} ?>
</div>
