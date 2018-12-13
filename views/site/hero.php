<style media="screen">
  th,td{
    text-align: center;
    color: white;
    font-weight: 700;
  }
  h3{
    background: #2D2D2D;
    color: #8FBF00;
    margin: 10px;
    padding: 10px;
  }
  .h1{
    font-size: 1.2em;
    padding-left: 15px;
    padding-right: 15px;
  }
</style>
<title><?=$hero->name_hero?> Герои</title>
  <h3 class="text-center"><?=$hero->name_hero?></h3>
  <div class="col-4 float-left">
    <img src="<?=$hero->img_hero?>" alt="" width="350" height="300">
  </div>
  <div class="col-8 float-left">
    <table class="table">
      <thead>
        <th scope="col">Артрибут</th>
        <th scope="col">Значение</th>
      </thead>
      <tbody>
          <tr>
            <th scope="row"><img src="../heroes/strsmall.png" alt=""></th>
            <td><?=$hero->strength?></td>
          </tr>
          <tr>
            <th scope="row"><img src="../heroes/aglsmall.png" alt=""></th>
            <td><?=$hero->agility?></td>
          </tr>
          <tr>
            <th scope="row"><img src="../heroes/intsmall.png" alt=""></th>
            <td><?=$hero->intelect?></td>
          </tr>
          <tr>
            <th scope="row"><img src="../heroes/speedsmall.png" alt=""></th>
            <td><?=$hero->movespeed?></td>
          </tr>
          <tr>
            <th scope="row"><img src="../heroes/defsmall.png" alt=""></th>
            <td><?=$hero->assault?></td>
          </tr>
        </tbody>
    </table>
  </div>
  <div class="clearfix"></div>
  <div class="col-12">
    <h3 class="text-center">История</h3>
    <p class="h1" style="color: rgb(181, 181, 181)"><?=$hero->story?></p>
  </div>
