<?php snippet('header') ?>

  <main class="main" role="main" class="wrapper">

    <header>
      <h1>Shop</h1>
      <?php snippet('shop-sub-header')?>
    </header>

    <section class="inner">
      
      <section id="products-section" class="align-center">
        <header>
          <h2>Products Categories</h2>
        </header>
        <?php snippet('categories-carousel') ?>
      </section>

      <?php 
      $page = page('shop/categories');
      foreach($page->children()->visible() as $category):?>
      <section class="box">
        <?php snippet('category-with-products', ['target' => $category, 'productsLimit' => 4]) ?>
      </section>
      <?php endforeach;?>

    </section>

  </main>

<?php snippet('footer') ?>