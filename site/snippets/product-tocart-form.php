<?php

if(isset($target)) $product = $target;

?>

<?php if($product->soldout() != 'true'): ?>
  <form method="post" action="<?= url('cart') ?>">
    <input type="hidden" name="action" value="add">
    <input type="hidden" name="id" value="<?= $product->uid() ?>">
    <div class="actions fit">
      <button class="button fit" type="submit">Add to Cart</button>
      <?= $site->currency_symbol() ?><?= $product->price() ?>
    </div>
  </form>
<?php else: ?>
  <div class="actions fit">
    <button class="button disabled" type="submit" disabled="">Indisponible</button>
    <?= $site->currency_symbol() ?><?= $product->price() ?>
  </div>
<?php endif ?>