<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    public function category (){
        return $this->belongsTo('App\Models\Categories','category_alias', 'alias');
    }
}
