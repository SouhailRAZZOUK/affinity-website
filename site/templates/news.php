<?php snippet('header') ?>

  <main class="main" role="main" class="wrapper">

    <header>
        <h1><?= $page->title()?></h1>      
    </header>

    <section class="inner row">

      <?php snippet('news-list')?>

    </section>

  </main>

<?php snippet('footer') ?>