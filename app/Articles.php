<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Articles extends Model
{
    //

    protected $fillable = [
        'title',
        'text',
        'desc',
        'alias',
        'img',
    ];


    public function tags() {
        return $this->belongsToMany('App\Tags', 'articles2tags');
    }
}
