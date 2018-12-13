<?php
  use app\models\Users;
?>
<title><?=$new->title_new?></title>
<div class="row">
  <div class="col-sm-12">
    <h3 style="color: white;"><?=$new->title_new?></h3>
    <img src="<?=$new->img_new?>" alt="" class="col-sm-12">
    <p><?=$new->full_text?></p>
  </div>
  <div class="col-sm-12">
    <h4 class="text-center" style="color: #DD163B; font-weight:700;">Комментарии</h4>
    <?php foreach ($comments as $comment): ?>
      <div class="row">
        <div class="col-sm-12 comment">
          <img src="../<?php $user = Users::findOne($comment['author_id']); echo $user->img_profile;?>" alt="" class="img-responsive float-left" width="70" height="70">
          <h5 class="float-left w-75"style="margin-left:10px"><?php $user = Users::findOne($comment['author_id']);echo $user->username;?></h5>
          <p class="float-left w-75" style="margin-left: 10px;"><?=$comment['message']?></p>
        </div>
      </div>
    <?php endforeach; ?>
    <form class="" action="/site/leavecomment?id=<?=$new->id_new?>" method="post">
      <textarea name="text_comment" rows="3" cols="80" class="form-control w-100 comment-input" placeholder="Оставьте своё мнение здесь..." required></textarea>
      <button type="submit" name="add_comment" class="btn float-right comment-btn">Оставить комменатарий</button>
    </form>
  </div>
</div>
