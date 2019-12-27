<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subsubcategory extends Model
{
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Models\Subcategory');
    }
}
