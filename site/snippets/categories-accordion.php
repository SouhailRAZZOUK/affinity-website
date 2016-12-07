<?php

$categories = page('shop/categories')->children()->visible();

?>

<h3>Products Categories</h3>

<ul class="accordion">

  <?php foreach($categories as $category):?>
  <li class="<?= r($category->isOpen(), 'is-expanded')?>">
    <a href="javascript:void(0)" class="js-accordion-trigger"><?= $category->title()?></a>
    <?php snippet('subcategories-accordion', ['target' => $category])?>
  </li>
  <?php endforeach?>
  
</ul>
