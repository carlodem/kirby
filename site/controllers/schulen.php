<?php

return function($page) {

// fetch the basic set of pages
$schulen = $page->children()->flip();

// fetch all schulformen
$schulformen = $schulen->pluck('schulform', ',', true);
$regions = $schulen->pluck('region', ',', true);
$countries = $schulen->pluck('country', ',', true);

// add the schulform filter
if($schulform = param('schulform')) {
  $schulen = $schulen->filterBy('schulformen', $schulform, ',');
}

if($region = param('region')) {
  $schulen = $schulen->filterBy('regions', $region, ',');
}

if($country = param('country')) {
  $schulen = $schulen->filterBy('countries', $country, ',');
}

// apply pagination
$schulen   = $schulen->paginate(10);
$pagination = $schulen->pagination();

return compact('schulen', 'schulformen', 'schulform', 'regions', 'region', 'countries', 'country', 'pagination');

};