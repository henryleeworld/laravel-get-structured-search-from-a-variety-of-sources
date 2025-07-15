<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    private $search;

    /**
     * Instantiate a new SearchController instance.
     */
    public function __construct(Search $search)
    {
        $this->search = $search;
    }

    /**
     * Display the specified resource.
     */
    public function show() 
    {
        $keyword = __('Gundam');
        $searchResults = $this->search->registerModel(User::class, 'name')
                                      ->registerModel(Post::class, ['title', 'post_text'])
                                      ->search($keyword);
        echo __('Search ') . $keyword . __(' number of records:') . $searchResults->count() . PHP_EOL;
    }
}
