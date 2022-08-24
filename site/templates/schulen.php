<head>
<?= css("../assets/css/school.css")?>
</head>


<?php snippet('header') ?>


<div class="schulen-fullpage">
  <div class="schulen-tags">
    <h1>Schulen</h1>
    <hr class="divider" align="left">
    </hr>   
    <!-- articles -->
  

    <!-- sidebar with tagcloud -->
    <aside>
      <h2>Schulform</h2>
      <hr class="divider" align="left">
      </hr>
      <ul class="tags">
        <?php foreach($schulformen as $schulform): ?>
        <li>
          <a href="<?= url($page->url(), ['params' => ['schulform' => $schulform]]) ?>">
            <?= html($schulform) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>

      <h2>Bundesländer</h2>
      <hr class="divider" align="left">
      </hr>
      <ul class="tags">
        <?php foreach($regions as $region): ?>
        <li>
          <a href="<?= url($page->url(), ['params' => ['region' => $region]]) ?>">
            <?= html($region) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>

      <h2>Land</h2>
      <hr class="divider" align="left">
      </hr>
      <ul class="tags">
        <?php foreach($countries as $country): ?>
        <li>
          <a href="<?= url($page->url(), ['params' => ['country' => $country]]) ?>">
            <?= html($country) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </aside>
    </div>
    <div class="schools-grid">       
    <ul class="schools">
        <?php foreach ($page->children() as $school): ?>
            <?php snippet('schulen-grid-item', ['school'=> $school]) ?>
        <?php endforeach ?>
    </ul>
    </div>


<!--   <?php foreach($schulen as $schule): ?>
    <article>
      <h1><a href="<?= $schule->url() ?>"><?= $schule->title()->html() ?></a></h1>
      <?= $schule->text()->excerpt(300) ?>
    </article>
    <?php endforeach ?>
  </div>

-->

  <!-- pagination -->
  <nav class="pagination">
    <?php if($pagination->hasPrevPage()): ?>
    <a href="<?= $pagination->prevPageUrl() ?>">previous posts</a>
    <?php endif ?>

    <?php if($pagination->hasNextPage()): ?>
    <a href="<?= $pagination->nextPageUrl() ?>">next posts</a>
    <?php endif ?>
  </nav>
</div>

<?php snippet('footer') ?> 