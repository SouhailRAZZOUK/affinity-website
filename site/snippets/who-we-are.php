<?php

$section = page('home/who-we-are');

?>

<div class="container align-center">

  <header>
    <?= markdown($section->header())?>
  </header>

  <div class="row">
  
    <div class="4u 6u$(mediul) -4u(medium) ">

      <?php snippet('who-we-are-carousel')?>

    </div>

    <div class="8u 12u(medium) align-left">

      <?= markdown($section->text())?>

    </div>

  </div>

  <footer>
    <?= markdown($section->footer())?>
  </footer>

</div>