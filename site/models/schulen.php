<?php

class SchulenPage extends Page
{

    public function children()
    {
        $csv      = csv($this->root() . '/schools.csv', ';');
        $children = array_map(function ($schule) {
            return [
                'slug'     => Str::slug($schule['Name der Schule']),
                'template' => 'schule',
                'model'    => 'schule',
                'num'      => 0,
                'content'  => [
                    'title'     => $schule['Name der Schule'],
                    'street'    => $schule['Adresse (Straße)'],
                    'city'      => $schule['Adresse (Ort)'],
                    'region'    => $schule['region'],
                    'plz'       => $schule['Adresse (PLZ)'],
                    'country'   => $schule['country'],
                    'website'   => $schule['Webseite der Schule'],
                    'logo'      => $schule['Logo der Schule'],
  /*                  'schulform' => $schule['schulform']*/
                ]
            ];
        }, $csv);

        return Pages::factory($children, $this);
    }

}