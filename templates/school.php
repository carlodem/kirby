<?php snippet('header') ?>

<article class="school">
  <h1 class="school-scientific-name"><?= $page->title() ?></h1>
  <p class="school-common-name">Common name: <?= $page->commonName() ?></p>
  <div class="school-description">
    <?= $page->description()->kt() ?>
  </div>
</article>

<?php snippet('footer') ?>