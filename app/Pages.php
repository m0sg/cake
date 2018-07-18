<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    //
//    use Searchable;
    protected $fillable = [
        'name',
        'text',
        'alias',
        'img',
        'parent',
    ];

}
