<?php

return function($page) {

// fetch the basic set of pages
$blogposts = $page->children()->flip();

// fetch all schulformen
$schulformen = $blogposts->pluck('schulformen', ',', true);
$regions = $blogposts->pluck('regions', ',', true);

// add the schulform filter
if($schulform = param('schulform')) {
  $blogposts = $blogposts->filterBy('schulformen', $schulform, ',');
}

if($region = param('region')) {
  $blogposts = $blogposts->filterBy('regions', $region, ',');
}

// apply pagination
$blogposts   = $blogposts->paginate(10);
$pagination = $blogposts->pagination();

return compact('blogposts', 'schulformen', 'schulform', 'regions', 'region','pagination');

};