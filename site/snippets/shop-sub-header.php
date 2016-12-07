<?php $cart = get_cart(); ?>
<?php $count = cart_count($cart); ?>
<div class="row">

  <div class="cart-commands 2u 4u(medium) 12u(small) -4u(xlarge) -4u(large) -2u(medium)">
    <a href="<?= url('empty-cart') ?>">Empty Shopping Cart</a>
    <a href="<?= url('cart') ?>">Go to Checkout</a>
  </div>

  <div class="cart 2u 12u(small)">
    <span class="fa fa-4x fa-shopping-cart"></span>
    <?php if ($count > 0): ?>
      <span class="cart-count badge-success"><?php if ($count > 0) echo $count ?></span>
    <?php endif ?>
  </div>

</div>