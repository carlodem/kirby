<?php snippet('header') ?>

<main>
  <header>
    <h1><?= $page->title() ?></h1>
  </header>
  <ul>
    <?php foreach ($page->children() as $quote): ?>
    <li>
      <h2><?= $quote->name() ?></h2>
      <a href="<?= $quote->url() ?>">Read quote summary</a>
    </li>
    <?php endforeach ?>
  </ul>
</main>

<?php snippet('footer') ?>