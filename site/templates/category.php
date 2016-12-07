<?php

$categories = page('shop/categories')->children()->visible();

?>

<?php snippet('header') ?>

  <main class="main" role="main" class="wrapper">

    <header class="inner">
      
      <h1><?= $page->title()?></h1>
      
      <?= markdown($page->text())?>
    
      <hr class="major" />
    
    </header>

    <section class="inner">
    
      <div class="row">
    
        <div class="4u not-medium not-small not-xsmall">

          <div class="accordion-wrapper">
            <?php snippet('categories-accordion')?>
          </div>
        </div>

        <div class="8u 12u(small)">
            <?php snippet('category-children', ['target' => $page])?>          
        </div>

      </div>

    </section>

  </main>

<?php snippet('footer') ?>