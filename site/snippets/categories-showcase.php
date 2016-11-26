<?php

$categories = page('shop/categories')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $categories = $categories->limit($limit);

?>

<div id="products-carousel" class="owl-carousel owl-theme">

  <?php foreach($categories as $categorie): ?>
  
    <div class="item product">

      <a href="<?= $categorie->url() ?>" class="product-link">
      
        <?php if($image = $categorie->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
          <img  src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $categorie->title()->html() ?>" class="image fit" />
        <?php endif ?>
      
        <div class="product-caption">
          <h3 class="product-title"><?= $categorie->title()->html() ?></h3>
        </div>
      
      </a>

    </div>

  <?php endforeach ?>

</div>