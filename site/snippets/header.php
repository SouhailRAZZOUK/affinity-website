<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/vendor/fontawesome/css/font-awesome.css') ?>
  <?= css("assets/vendor/owl.carousel/dist/assets/owl.carousel.css")?>
  <?= css("assets/vendor/owl.carousel/dist/assets/owl.theme.default.css")?>
  <?= css("assets/vendor/owl.carousel/dist/assets/owl.transitions.css")?>
  <?= css('assets/css/main.css') ?>
  <?= css('assets/css/polyfills.css') ?>

</head>
<body class="<?= $page->class()?>">

  <header id="header">
    <div class="inner">

      <a href="<?= url() ?>" rel="home" class="logo"><?= $site->title()->html() ?></a>

      <?php snippet('menu') ?>
      
      <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    </div>
  </header>
