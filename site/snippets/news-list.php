<?php foreach($page->children()->visible() as $newsArticle):?>
<div class="12u$">

  <h2 class="align-center">
    <?= $newsArticle->title()?>
  </h2>
  
  <?php snippet('coverimage', $newsArticle)?>
  
  <?= markdown($newsArticle->description())?>

  <a href="<?= $newsArticle->url()?>" class="button special">Read More</a>

  <hr class="major" />

</div>

<?php endforeach?>