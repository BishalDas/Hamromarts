<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'cid','cat_name','status'
    ];


    public function subcategories()
    {
            return $this->hasMany('App\subcategory');
    }
}
