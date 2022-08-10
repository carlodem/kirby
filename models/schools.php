<?php

class SchoolsPage extends Page
{

    public function children()
    {
        $csv      = csv($this->root() . '/schools.csv', ';');
        $children = array_map(function ($school) {
            return [
                'slug'     => Str::slug($school['Name der Schule']),
                'template' => 'school',
                'model'    => 'school',
                'num'      => 0,
                'content'  => [
                'title'         => $school['Name der Schule'],
                    'street'    => $school['Adresse (Straße)'],
                    'city'      => $school['Adresse (Ort)'],
                'region'        => $school['Adresse (Bundesland)'],
                'plz'           => $school['Adresse (PLZ)'],
                    'country'   => $school['Adresse (Land)'],
                    'website'   => $school['Webseite der Schule'],
                    'logo'      => $school['Logo der Schule'],
                    'schulform' => $school['Schulform'],
                ]
            ];
        }, $csv);

        return Pages::factory($children, $this);
    }

}