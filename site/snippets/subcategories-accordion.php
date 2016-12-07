<?php

if(isset($target)) $subcategories = $target->children()->visible();

?>

<ul class="submenu">

  <?php foreach($subcategories as $subcategory):?>
  <li>
    <a href="<?= $subcategory->url()?>"><?= $subcategory->title()?></a>
  </li>
  <?php endforeach?>

</ul>