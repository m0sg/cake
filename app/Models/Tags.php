<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //
    public function articles() {
        return $this->belongsToMany('App\Models\Articles', 'articles2tags');
    }
}
