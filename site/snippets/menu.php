<nav id="nav">

  <?php foreach($pages->visible() as $item): ?>
    <a href="<?= $item->url() ?>">
      <?= $item->title()->html() ?>
      <?php if($item->intendedTemplate() == 'news'):?>
      <span class="alert-dot"></span>
      <?php endif?>
    </a>
  <?php endforeach ?>

</nav>