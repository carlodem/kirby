<?php snippet('header') ?>



<h1>Blog</h1>

<!-- articles -->
<?php foreach($blogposts as $blogpost): ?>
<article>
  <h1><a href="<?= $blogpost->url() ?>"><?= $blogpost->title()->html() ?></a></h1>
  <?= $blogpost->text()->excerpt(300) ?>
</article>
<?php endforeach ?>

<!-- sidebar with tagcloud -->
<aside>
  <h1>Tags</h1>
  <ul class="tags">
    <?php foreach($schulformen as $schulform): ?>
    <li>
      <a href="<?= url($page->url(), ['params' => ['schulform' => $schulform]]) ?>">
        <?= html($schulform) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>

  <h1>Bundesländer</h1>
  <ul class="tags">
    <?php foreach($regions as $region): ?>
    <li>
      <a href="<?= url($page->url(), ['params' => ['region' => $region]]) ?>">
        <?= html($region) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</aside>

<!-- pagination -->
<nav class="pagination">
  <?php if($pagination->hasPrevPage()): ?>
  <a href="<?= $pagination->prevPageUrl() ?>">previous posts</a>
  <?php endif ?>

  <?php if($pagination->hasNextPage()): ?>
  <a href="<?= $pagination->nextPageUrl() ?>">next posts</a>
  <?php endif ?>
</nav>

<?php snippet('footer') ?>