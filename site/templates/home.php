<?php snippet('header') ?>

<header class="jumbotron jumbotron-fluid jumbotron-home">
  <div class="jumbotron-title text-center">
    <h1>Nathan Chapman</h1>
    <span>Film &amp; Broadcast</span>
  </div>
</header>


<?php foreach($pages->visible() as $section): ?>
<?php snippet('home-'.$section) ?>
<?php endforeach ?>





<?php snippet('footer') ?>
