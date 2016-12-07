<?php snippet('header') ?>

<main class="main" role="main" class="wrapper">

  <header class="inner">
    
    <h1><?= $page->title()?></h1>
        
  </header>

  <section class="inner">
  
    <div class="row uniform">
      <div class="8u 12u$(small)">
        <form method="post" action="<?= url('contact-mail')?>">
          <div class="row uniform">
            <div class="6u 12u$(xsmall)">
              <input type="text" name="name" id="name" value="" placeholder="Name" />
            </div>
            <div class="6u$ 12u$(xsmall)">
              <input type="email" name="email" id="email" value="" placeholder="Email" />
            </div>
            <!-- Break -->
            <div class="12u$">
              <div class="select-wrapper">
                <select name="category" id="category">
                  <option value="">- Category -</option>
                  <option value="1">Manufacturing</option>
                  <option value="2">Shipping</option>
                  <option value="3">Administration</option>
                  <option value="4">Human Resources</option>
                </select>
              </div>
            </div>
            <!-- Break -->
            <div class="4u 12u$(small)">
              <input type="radio" id="priority-low" name="priority" checked>
              <label for="priority-low">Low Priority</label>
            </div>
            <div class="4u 12u$(small)">
              <input type="radio" id="priority-normal" name="priority">
              <label for="priority-normal">Normal Priority</label>
            </div>
            <div class="4u$ 12u$(small)">
              <input type="radio" id="priority-high" name="priority">
              <label for="priority-high">High Priority</label>
            </div>
            <!-- Break -->
            <div class="12u$">
              <input type="checkbox" id="human" name="human" checked>
              <label for="human">I am a human and not a robot</label>
            </div>
            <!-- Break -->
            <div class="12u$">
              <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
            </div>
            <!-- Break -->
            <div class="12u$">
              <ul class="actions">
                <li><input type="submit" value="Send Message" class="button special" /></li>
                <li><input type="reset" value="Reset" class="button" /></li>
              </ul>
            </div>
          </div>
        </form>
      </div>
      <div class="4u 12u$(small)">
        <aside>
          <?= markdown($page->text())?>
        </aside>
        <h3>News:</h3>
        <?php snippet('news-sidebar')?>
      </div>
    </div>

    <hr class="major" />

  </section>

</main>

<?php snippet('footer')?>
