<style media="screen">
  .row{
    margin-bottom: 85px;
  }
  .col-sm-8{
    margin: 0 auto;
  }
  input,textarea{
    margin-bottom: 15px;
  }
</style>
<title>Добавление статьи</title>
<h3 class="text-center">Добавление статьи</h3>
<div class="row text-center">
  <div class="col-sm-8">
    <form class="" action="/site/addnew" method="post">
      <input type="text" name="title" value="" placeholder="Заголовок статьи" required maxlength="100" class="form-control w-100">
      <input type="text" name="pre_text" value="" placeholder="Вводный текст" required maxlength="100" class="form-control w-100">
      <textarea name="full_text" rows="5" cols="80" class="form-control w-100" placeholder="Текст статьи" required></textarea>
      <button type="submit" name="addnew" class="btn  btn-success float-right">Добавить</button>
    </form>
  </div>
</div>
