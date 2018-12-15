<style media="screen">
  .row{
    margin-bottom: 55px;
  }
  .col-sm-8{
    margin: 0 auto;
  }
  input,textarea{
    margin-bottom: 25px;
  }
</style>
<title>Редактирование статьи</title>
<h3 class="text-center">Редактирование статьи "<?=$new['title_new']?>"</h3>
<div class="row text-center">
  <div class="col-sm-8">
    <form class="" action="/site/updatenew?id=<?=$new['id_new']?>" method="post">
      <input type="text" name="title" value="<?=$new['title_new']?>" placeholder="Заголовок статьи" required maxlength="100" class="form-control w-100">
      <input type="text" name="pre_text" value="<?=$new['pre_text']?>" placeholder="Вводный текст" required maxlength="100" class="form-control w-100">
      <textarea name="full_text" rows="20" cols="80" class="form-control w-100" placeholder="Текст статьи" required><?=$new['full_text']?></textarea>
      <button type="submit" name="edit" class="btn  btn-success float-right">Сохранить изменения</button>
    </form>
  </div>
</div>
