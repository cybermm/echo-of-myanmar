<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostCreateRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index() {
        
        return view('admin.post.index');

    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create() {
        $posts = Post::all();
        return view('admin.post.create',compact('posts'));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(PostCreateRequest $request) {

        // File Process
        $file = $request->file('image');

        // Generate Custom Unique File Name
        $file_name = 'ECHO_OF_MYANMAR'.'_'.uniqId().'_'.$file->getClientOriginalName();

        // Move admin face images
        $file->move(public_path().'/imgs/post_image/', $file_name);

        Post::create([
            'title' => [
                "en" => $request->title,
                "mmr" => '',
            ],
            'image' => $file_name,
            'content' =>
            [
                "en" => $request->content,
                "mmr" => ''
            ]
        ]);

        return redirect()->route('admin.home')->with('status', 'You have been posted successfully!');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id) {
        //
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