<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\TotalView;

class PublicPostController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index() {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('user.news', compact('posts'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request) {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($slug) {

        $post = Post::where('slug', $slug)->firstOrFail();
        $post_id = $post->id;

        $result = TotalView::where('post_id', $post_id)->first();

        if ($result === null) {
            // Create Post Count Row if not exist
            TotalView::create([
                'post_id' => $post_id,
                'view_count' => 1
            ]);
        } else {
            // Update post count views
            $totalViews = TotalView::where('post_id', $post_id)->firstOrFail();
            $view_counts = $totalViews->view_count + 1;
            $totalViews->view_count = $view_counts;
            $totalViews->save();

        }
        return view('user.post', compact('post'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id) {
        //
    }
}