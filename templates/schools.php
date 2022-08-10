<?php snippet('header') ?>

<main>
  <h1><?= $page->title() ?></h1>

  <ul class="schools">
    <?php foreach ($page->children() as $school): ?>
        <?php snippet('schulen-grid-item', ['school'=> $school]) ?>
    <?php endforeach ?>
  </ul>

</main>

<?php snippet('footer') ?>