<?php snippet('header') ?>

  <main class="main" role="main">

    <header>
      <h1>Shop</h1>
    </header>
    
    <section id="products-section" class="container align-center">
      <header>
        <h2>Products Categories</h2>
      </header>
      <?php snippet('showcase') ?>
    </section>

    <?php 
    $page = page('shop/categories');
    foreach($page->children()->visible() as $section):?>
    <section id="<?= $section->uid()?>" class="home-section">
      <?= $section->title()?>
    </section>
    <?php endforeach;?>

  </main>

<?php snippet('footer') ?>