<?php

$section = page('home/what-we-do');

?>

<div class="container align-center">
  <header>
    <?= markdown($section->header())?>
  </header>

  <div class="row">

    <?php foreach($section->children() as $column):?>

    <div class="4u 12u(medium)">
      <span class="icon fa-5x <?= $column->icon()?>"></span>
      <h3><?= $column->title()?></h3>
      <?= markdown($column->text())?>
    </div>

    <?php endforeach?>

  </div>

  <footer>
    <?= markdown($section->footer())?>
  </footer>

</div>
