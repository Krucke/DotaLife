<style media="screen">
h3{
  background: #2D2D2D;
  margin: 10px;
  margin-left: 0;
  margin-right: 0;
  padding: 10px;
}
</style>
<title>Герои</title>
<h2 class="text-center" style="color: white;font-weight:700;">Герои</h2>
<h3 class="text-left"><img src="../heroes/strsmall.png" alt="">Сила</h3>
<div class="block_for_images_hero">
  <?php
    foreach ($heroesS as $hero) {
  ?>
  <a href="/site/hero?id=<?=$hero['id_hero']?>"><img src="<?=$hero['img_hero']?>" alt="" class="small_img_hero"></a>
  <?php } ?>
</div>
<h3 class="text-left" style="color: rgb(0, 180, 45);"><img src="../heroes/aglsmall.png" alt="">Ловкость</h3>
<div class="block_for_images_hero">
  <?php
    foreach ($heroesA as $hero) {
  ?>
  <a href="/site/hero?id=<?=$hero['id_hero']?>" class="s"><img src="<?=$hero['img_hero']?>" alt="" class="small_img_hero"></a>
  <?php } ?>
</div>
<h3 class="text-left" style="color: rgb(60, 74, 196)"><img src="../heroes/intsmall.png" alt="">Интелект</h3>
<div class="block_for_images_hero">
  <?php
    foreach ($heroesI as $hero) {
  ?>
  <a href="/site/hero?id=<?=$hero['id_hero']?>"><img src="<?=$hero['img_hero']?>" alt="" class="small_img_hero"></a>
  <?php } ?>
</div>
