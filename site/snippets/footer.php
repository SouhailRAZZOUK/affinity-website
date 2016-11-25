<footer id="footer">
				<div class="inner">

					<!--<h3>Get in touch</h3>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>-->

					<div class="copyright">
						<?= html::decode($site->copyright()->kirbytext()) ?>
					</div>

				</div>
			</footer>

  <?= js("assets/vendor/jquery/dist/jquery.js")?>
  <?= js("assets/vendor/skel/dist/skel.min.js")?>
  <?= js("assets/vendor/skel/dist/skel-layout.min.js")?>
  <?= js("assets/vendor/owl.carousel/dist/owl.carousel.js")?>
  <?= js("assets/js/util.js")?>
	<?= js("assets/js/home.js")?>
  <?= js("assets/js/main.js")?>

		
	</body>
</html>