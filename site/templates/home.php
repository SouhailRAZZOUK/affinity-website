<?php snippet('header') ?>

  <main class="main" role="main">

    <section id="banner">
      <div class="inner">
        <header>
          <h1><?= $page->intro()?></h1>
  				<div >
            <p><?= $page->text()?></p>
          </div>
        </header>

        <footer>
          <a href="#" class="button">Get Started</a>
        </footer>
      </div>
    </section>

    <section id="products-section" class="container align-center">
      <header>
        <h2>Products Categories</h2>
      </header>
      <?php snippet('showcase') ?>
    </section>

  </main>

<?php snippet('footer') ?>