<?php

if(isset($target)) $product = $target;

?>

<?php if($product->soldout() != 'true'): ?>
  <form method="post" action="<?= url('cart') ?>">
    <input type="hidden" name="action" value="add">
    <input type="hidden" name="id" value="<?= $product->uid() ?>">
    <div class="actions fit">
      <div class="product-price">
        <p>
          <?= $product->price()?><?= $site->currency_symbol()?>
        </p>
      </div>
      <button class="button small" type="submit">Add to Cart</button>
    </div>
  </form>
<?php else: ?>
  <div class="actions fit">
    <button class="button disabled" type="submit" disabled="">Indisponible</button>
    <div class="product-price">
      <p>
        <?= $product->price()?><?= $site->currency_symbol()?>
      </p>
    </div>
  </div>
<?php endif ?>