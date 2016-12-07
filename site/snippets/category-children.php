<?php

if(isset($target)) $category = $target;

?>

<div class="row category">

  <?php foreach($category->children()->visible() as $item):?>

    <div class="product 4u 3u(medium) 6u(small) 12u(xsmall)">

      <a href="<?= $item->url() ?>" class="product-link">

        <?php if($image = $item->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
          <img  src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $item->title()?>" class="image fit" />
        <?php endif ?>
      
        <div class="product-caption">
          <h4 class="product-title"><?= $item->title()?></h4>
        </div>

      </a>

      <?php snippet('product-tocart-form', ['target' => $item]) ?>
      
    </div>
  <?php endforeach?>

</div>