<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\TotalView;

class HomeController extends Controller
{

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index() {
        $users = User::where('role', 'admin')->orderBy('id', 'desc')->get();
        $registered_users = User::all()->count();
        $total_views = TotalView::all();
        $posts = Post::all();

        // assign total views count of all posts
        $views = 0;
        foreach ($total_views as $view) {
            $view_count = (int) $view->view_count;
            $views += $view_count;
        }
        return view('home', compact('users','views','posts','registered_users'));
    }
}