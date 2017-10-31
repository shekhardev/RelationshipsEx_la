<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct(){
    	$this->middleware('guest');
    }
    public function showArticle($id){
    	$storage = Redis::Connection();
    	$views = $storage->incr('article:' .$id. ':views');
    	return "This is an article with id:" .$id . " has " .$views. "views";
    }
}
