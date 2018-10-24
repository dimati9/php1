<div class="gallery">
  <?php foreach($articles as $a): ?>


  <div class="image">
      <h2><a href="index.php?page=article&id=<?=$a['id']?>" > <?=$a['name']?>  </a> </h2>


      <img src="<?php echo $a['img'];?>" />
      <p>Цена: <?=$a['prace']?>р</p>
      <p> <a href="index.php?page=article&id=<?=$a['id']?>" class="more"> Смотреть </a> </p>


  </div>


 <?php endforeach ?>
</div>
