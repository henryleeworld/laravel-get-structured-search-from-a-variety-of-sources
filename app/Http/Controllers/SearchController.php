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

    public function show() 
    {
        $keyword = 'labore';
        $searchResults = $this->search->registerModel(User::class, 'name')
                                      ->registerModel(Post::class, ['title', 'post_text'])
                                      ->search($keyword);
        echo '搜尋 ' . $keyword . ' 筆數：' . $searchResults->count() . PHP_EOL;
    }
}
