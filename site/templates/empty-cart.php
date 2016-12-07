<?php s::remove('cart'); ?>
<?php snippet('header') ?>

<main id="paid" class=" wrapper main black" role="main">

  <header>
		<h1><?php echo $page->subtitle()->or($page->title()) ?></h1>
  </header>
  
	<section class="inner align-center">
		<a class="button special" href="<?php echo url('shop') ?>">Back to Shop</a>
    <hr class="major" />
    <?= markdown($page->text())?>
	</section>

</main>

<?php snippet('footer') ?>