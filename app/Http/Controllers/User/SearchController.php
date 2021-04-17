<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
    public function search(Request $request){
        $searched_results = Post::where('title','LIKE',"%$request->search%")->orderBy('id','desc')->paginate(5);
        return view('user.search')->with('posts',$searched_results);
    }
}
