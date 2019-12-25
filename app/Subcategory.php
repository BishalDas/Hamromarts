<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
        protected $fillable = [
                'id', 'cid'
            ];

    public function categories()
    {
            return $this->belongsTo('App\category');
    }

    public function subsubcategories()
    {
            return $this->hasMany('App\subcategory');
    }

}
