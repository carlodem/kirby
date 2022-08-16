<?php snippet('header') ?>

<main>
  <article class="review">
    <header>
      <h1><?= $page->title() ?></h1>
      <time><?= $page->date()->toDate('d F Y') ?></time>
    </header>

    <h2><?= $page->headline() ?></h2>
    <p>by <?= $page->byline() ?></p>
    <?= $page->summary() ?>

    <?php if ($page->cover()->isNotEmpty()): ?>
    <img src="<?= $page->cover() ?>" alt="">
    <?php endif ?>
  </article>
</main>

<?php snippet('footer') ?>