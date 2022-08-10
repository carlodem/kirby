<?php

class ReviewsPage extends Page
{
    public function children()
    {
        $results = [];
        $pages   = [];
        $apiKey  = 'ptS3qfzgaWUQGu4UvwyMgCGGZ9A5gcWD';
        $request = Remote::get('https://api.nytimes.com/svc/movies/v2/reviews/picks.json?api-key=' . $apiKey);

        if ($request->code() === 200) {
            $results = $request->json(false)->results;
        }

        foreach ($results as $key => $review) {
            $pages[] = [
                'slug'     => Str::slug($review->display_title),
                'num'      => $key+1,
                'template' => 'review',
                'model'    => 'review',
                'content'  => [
                    'title'    => $review->display_title,
                    'headline' => $review->headline,
                    'byline'   => $review->byline,
                    'summary'  => $review->summary_short,
                    'date'     => $review->publication_date,
                    'link'     => $review->link->url,
                    'linkText' => $review->link->suggested_link_text,
                    'cover'    => $review->multimedia->src
                ]
            ];
        }

        return Pages::factory($pages, $this);
    }
}