<?php

$news = page('news')->children()->visible();

?>


<?php foreach($news as $newsArticle):?>
<div class="box">

  <a href="<?= $newsArticle->url()?>" class="align-center">
    <?= $newsArticle->title()?>
  </a>
  
</div>

<?php endforeach?>
