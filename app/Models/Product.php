<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function subsubcategory()
    {
        return $this->belongsTo('App\Models\Subsubcategory');
    }
}
