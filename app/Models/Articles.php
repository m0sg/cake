<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //
    public function tags() {
        return $this->belongsToMany('App\Models\Tags', 'articles2tags');
    }
}
