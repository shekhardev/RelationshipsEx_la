<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Cache\Cache;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {
    	$articles = Cache::remember('articles', 22*60, function() {
        return Article::all();
    });
    	return response()->json($articles);
	}
}
