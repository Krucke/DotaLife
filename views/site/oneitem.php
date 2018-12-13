<style media="screen">
  h3,h4{
    margin: 0;
    padding-left: 10px;
  }
  .row{
    padding: 20px;
    margin-bottom: 420px;
  }
</style>
<title>Предметы - <?=$item->name_item?></title>
<div class="row">
  <div class="col-sm-12">
    <img src="<?=$item['img_item']?>" alt="" class="float-left">
    <div class="w-75 float-left">
      <h3><?=$item['name_item']?></h3>
      <h4><img src="../items/gold.png" alt="" style="margin-top: 10px;"><h4 style="color:white;"><?=$item['cost_item']?></h4></h4>
    </div>
    <div class="float-left w-100">
      <p>Использование: <?=$item['about_item']?></p>
      <p><?=$item['stats_item']?></p>
    </div>
  </div>
</div>
