<head><?= css("../assets/css/school.css")?>
<title><?= $page->title() ?></title>
</head>

<?php snippet('header') ?>

<article class="school">
  <div class="school-page-cover" style="background-image: url('../assets/images/index.jpg')"/></div>
  
  <div class="school-page-head">  
    <div class="school-page-head-logo" style="background-image: url('<?= $page->logo() ?>')"/></div>
  
    <div class="school-page-head-info">
      <h1 class="school-page-name"><?= $page->title() ?></h1> 
      <p class="bundesland-page"><?= $page->region() ?></p>
      <p class="schulform-page"><?= $page->schulform() ?></p>
    </div>
  </div>

  <div class="school-page-body">
    <div class="school-page-body-description">
        <h2>Über uns</h2>
        <p>Hier steht eine Beschreibung von unserer Schule. Hier steht eine Beschreibung von unserer Schule. Hier steht eine Beschreibung von unserer Schule. Hier steht eine Beschreibung von unserer Schule. Hier steht eine Beschreibung von unserer Schule. Hier steht eine Beschreibung von unserer Schule.</p>
        <h2>Unsere Lernformate</h2>
      <div class="lernformat">
        <a>FREI DAY</a>
        <a>Verantwortung</a>
        <a>Lernbüro</a>
      </div>
    </div>  
    <div class="school-page-body-info-box">
      <h4>Adresse</h4>
      <li><?=$page->street()?></li> 
      <li><?=$page->plz()?> <?=$page->city()?></li>
      <li><?=$page->country()?></li> 
      <h4>Website</h4>
      <li><a target="_blank" href="<?=$page->website()?>">Zur Website der Schule</a></li>
    </div>
  </div>
</article>

<?php snippet('footer') ?>