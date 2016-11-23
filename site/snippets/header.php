<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/main.css') ?>
  <?= css('assets/vendor/css/font-awesome.css') ?>

</head>
<body>

  <header id="header">
    <div class="inner">

      <a href="<?= url() ?>" rel="home" class="logo"><?= $site->title()->html() ?></a>

      <?php snippet('menu') ?>
      
      <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    </div>
  </header>
