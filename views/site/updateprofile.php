<?php
use yii\widgets\ActiveForm;
?>
<style media="screen">
  .btn{
    margin-bottom: 20px;
  }
</style>
<title>Профиль-Редактирование</title>
<h3 class="text-center">Редактирование профиля</h3>
<?php $form = ActiveForm::begin() ?>
  <div class="col-4 r float-left">
    <?php if($model->image){?>
    <img src="/uploads/<?= $model->image?>" alt="" class="edit_img">
  <?php }else{ ?>
    <img src="../<?=Yii::$app->user->identity->img_profile?>" alt="" class="edit_img">
  <?php } ?>
  <?= $form->field($model, 'image')->fileInput()->label('') ?>
  <button type="submit" name="add_img" class="btn btn-primary text-center">Загрузить</button>
<?php ActiveForm::end() ?>
  </div>
<form class="" action="/site/updateprofile" method="post">
  <div class="col-8 r float-left">
    <strong class="float-left w-25 labels">Фамилия</strong>
    <input type="text" name="lastname" value="<?=Yii::$app->user->identity->lastname?>" class="form-control w-75 float-left inputs">
    <strong class="float-left w-25 labels">Имя</strong>
    <input type="text" name="firstname" value="<?=Yii::$app->user->identity->firstname?>" class="form-control w-75 float-left inputs">
    <strong class="float-left w-25 labels">Дата рождения</strong>
    <input type="text" name="date_birth" value="<?=Yii::$app->user->identity->date_birth?>" class="form-control w-75 float-left inputs">
    <strong class="float-left w-25 labels">Email</strong>
    <input type="text" name="email" value="<?=Yii::$app->user->identity->email?>" class="form-control w-75 float-left inputs">
    <strong class="float-left w-25 labels">О себе</strong>
    <input type="text" name="about" value="<?=Yii::$app->user->identity->about?>" class="form-control w-75 float-left inputs">
    <button type="submit" name="save" class="btn btn-primary float-right">Сохранить</button>
  </div>
</form>
