<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Post extends Model implements Searchable
{
    use SoftDeletes, HasFactory;

    public $table = 'posts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'post_text',
        'start_date',
        'end_date',
        'ip_address',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getSearchResult(): SearchResult
    {
        return new SearchResult(
            $this,
            $this->title,
            $this->post_text,
        );
    }
}
