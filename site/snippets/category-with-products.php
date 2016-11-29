<?php

if(isset($target)) $category = $target;
if(isset($productsLimit)) $products = $category->children()->visible()->limit($productsLimit);

?>

<div class="row 50%">

  <header class="12u$">
    <h3>
      <?= $category->title()?>
    </h3>
  </header>

  <?php foreach($products as $product):?>
  
  <div class="3u 6u(medium) 12u(small)">

    <a href="<?= $product->url() ?>" class="product-link">
      
      <?php if($image = $product->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
        <img  src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $product->title()?>" class="image fit" />
      <?php endif ?>
    
      <div class="product-caption">
        <h4 class="product-title"><?= $product->title()?></h4>
      </div>
    
    </a>
    
  </div>

  <?php endforeach?>

</div>