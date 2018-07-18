<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Products extends Model
{
    //
//    use Searchable;

    protected $fillable = [
        'title',
        'text',
        'desc',
        'alias',
        'img',
        'price',
        'category_alias',
        'home'
    ];

    public function category (){
        return $this->belongsTo('App\Models\Categories','category_alias', 'alias');
    }

}
