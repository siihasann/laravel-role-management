<?php

namespace App;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
