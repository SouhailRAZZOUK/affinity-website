<nav id="nav">

  <?php foreach($pages->visible() as $item): ?>
    <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
  <?php endforeach ?>

</nav>