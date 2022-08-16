<?php

class QuotePage extends Page
{
    public function children()
    {
        $results = [];
        $pages   = [];
        $request = Remote::get('https://aufbruchcms.ey.r.appspot.com/api/api-zitat');

        if ($request->code() === 200) {
            $results = $request->json(false);
        }

        foreach ($results as $key => $quote)  { 
            $pages[] = [
                'slug'     => Str::slug($quote->name),
                'template' => 'quote',
                'model'    => 'quote',
                'num'      => 0,
                'content'  => [
                    'name'     => $quote->name ,
                    'position' => $quote->position ,
                    'zitat'    => $quote->zitat ,
                    'image'    => $quote->image ,
                 ]
            ];
        }

        return Pages::factory($pages, $this);
    }
}