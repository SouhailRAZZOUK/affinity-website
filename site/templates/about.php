<?php snippet('header') ?>

  <main class="main" role="main" class="wrapper">

    <header>
        <h1><?= $page->title()?></h1>      
    </header>

    <section class="inner row">

      <div class="9u">
        <article>
          <?= markdown($page->text())?>
        </article>
      </div>

      <div class"3u not-small not-medium not-xsmall">

        <h3>News:</h3>
        <?php snippet('news-sidebar')?>
      </div>

    </section>

  </main>

<?php snippet('footer') ?>