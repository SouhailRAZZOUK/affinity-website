<?php

$categories = page('categories')->children()->visible();

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

$i = 0;

?>

<div class="row">

  <?php foreach($categories as $categorie): $i++;?>
  
  <div class="3u 4u(medium) 6u(small) 12u(xsmall) product">
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