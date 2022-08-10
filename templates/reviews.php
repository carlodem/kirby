<?php snippet('header') ?>

<main>
  <header>
    <h1><?= $page->title() ?></h1>
  </header>
  <ul>
    <?php foreach ($page->children() as $review): ?>
    <li>
      <h2><?= $review->title() ?></h2>
      <a href="<?= $review->url() ?>">Read review summary</a>
    </li>
    <?php endforeach ?>
  </ul>
</main>

<?php snippet('footer') ?>