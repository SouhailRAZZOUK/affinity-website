<?php snippet('header') ?>

  <main class="main" role="main">

    <?php foreach($page->children()->visible() as $section):?>
    <section id="<?= $section->uid()?>" class="home-section">
      <?php snippet($section->uid())?>


    </section>
    <?php endforeach;?>

    <hr class="major" />

  </main>

<?php snippet('footer') ?>