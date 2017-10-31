<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $fillable = ['title', 'body'];
    public function user(){
    	return $this->belongsTo('App\User');
    	// return $this->hasOne('App\Phone');
    }
}
