<?php

$section = page('home/banner');

?>

<div class="inner">
  <header>
    <?= markdown($section->header())?>
  </header>

  <footer>
    <?= markdown($section->footer())?>
  </footer>
</div>