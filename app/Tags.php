<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //
    protected $fillable = [
        'title',
        'alias',
    ];


    public function articles() {
        return $this->belongsToMany('App\Models\Articles', 'articles2tags');
    }
}
