<?php

$slides = page('home/who-we-are')->images();

?>

<div id="wwa-carousel" class="owl-carousel owl-theme">

  <?php foreach($slides as $slide): $slide = $slide->crop(300, 300)?>

  <div class="slide">

    <img src="<?= $slide->url()?>" />

  </div>

  <?php endforeach?>

</div>