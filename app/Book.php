<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'text','price'];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
