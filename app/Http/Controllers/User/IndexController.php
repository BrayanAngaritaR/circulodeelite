<?php

namespace App\Http\Controllers\User;

use Wink\WinkPost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	$posts = WinkPost::with(['tags', 'author'])
    	->live()
        ->orderBy('publish_date', 'DESC')
        ->take(3)
        ->get();

    	//dd($posts);
    	return view('index', compact('posts'));
    }
}
