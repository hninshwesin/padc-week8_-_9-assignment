<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
use ScoutElastic\Searchable;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Post extends Model
{

     use Searchable;

    protected $indexConfigurator = PostIndexConfigurator::class;
    protected $searchRules = [
        //
    ];
    // Here you can specify a mapping for model fields
    protected $mapping = [
        'properties' => [
            'title' => [
                'type' => 'text',
                // Also you can configure multi-fields, more details you can find here https://www.elastic.co/guide/en/elasticsearch/reference/current/multi-fields.html
                'fields' => [
                    'raw' => [
                        'type' => 'keyword',
                    ]
                ]
            ],
        ]
    ];


    protected $fillable = ['title', 'content', 'is_published', 'author_id','category_id'];

    protected $casts = [
        'is_published' => 'boolean'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getExcerptAttribute()
    {
        $exploded_string = explode(" ", $this->content);
        return collect($exploded_string)->take(30)->join(' ') . ' ...';
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopePostOwner($query)
    {
        return $query->where('author_id', \Auth::user()->id);
    }

    public function scopeDefaultOrder($query)
    {
        return $query->orderByDesc('created_at');
    }

    // public function scopeSearch($query, $keyword)
    // {
    //     return $query->whereRaw('match(title,content) against (?)',$keyword);
    //     // return $query->where('title', 'like', '%' . $keyword . '%')
    //     //     ->orwhere('content', 'like', '%' . $keyword . '%');
    // }

}
