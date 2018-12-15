<style media="screen">
  input,textarea{
    margin-bottom: 10px;
    margin-left: 10%;
  }
  .col-4,.col-8{
    height: 400px;
    border: 3px solid #8FBF00;
  }
  .edit_img{
    margin: 0;
    padding: 0;
    margin-left: 20px;
    width: 220px;
    height: 220px;
    border-radius: 200px;
  }
</style>
<title>Профиль</title>
<div class="col-4 float-left sign text-center">
  <h3>Пользователь</h3>
  <img src="../<?=Yii::$app->user->identity->img_profile?>" alt="" class="edit_img">
  <h3 class="text-center"><?=Yii::$app->user->identity->lastname?> <?=Yii::$app->user->identity->firstname?></h3>
  <p><?=Yii::$app->user->identity->about?></p>
</div>
<div class="col-8 float-right sign text-center">
  <h3 class="text-left">Профиль</h3>
  <input type="text" class="form-control w-75 text-center" name="" value="<?=Yii::$app->user->identity->lastname?>" readonly>
  <input type="text" class="form-control w-75 text-center" name="" value="<?=Yii::$app->user->identity->firstname?>" readonly>
  <input type="text" class="form-control w-75 text-center" name="" value="<?=Yii::$app->user->identity->date_birth?>" readonly>
  <input type="text" class="form-control w-75 text-center" name="" value="<?=Yii::$app->user->identity->date_sign?>" readonly>
  <textarea class="form-control w-75 text-center c" rows="3" cols="80" readonly><?=Yii::$app->user->identity->about?></textarea>
  <a href="/site/updateprofile" class="btn btn-success">Редактировать профиль</a>
</div>
