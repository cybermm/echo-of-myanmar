<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostEditRequest;
use Illuminate\Support\Str;
use App\Models\Post;

class PostController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index() {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('admin.post.index', compact('posts'));

    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create() {
        $posts = Post::all();
        return view('admin.post.create', compact('posts'));
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

        if ($file->getClientOriginalName() !== null) {
            // Move post images
            $file->move(public_path().'/imgs/post_image/', $file_name);
        }

        // Create Unique  Slug
        $slug = uniqid();

        Post::create([
            'slug' => $slug,
            'title' => [
                "en" => $request->title_en,
                "mmr" => $request->title_mmr,
            ],
            'image' => $file_name,
            'content' =>
            [
                "en" => $request->content_en,
                "mmr" => $request->content_mmr
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
    public function edit($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('admin.post.edit', compact('post'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(PostEditRequest $request, $slug) {

        // Manage Old Image
        $post = Post::where('slug', $slug)->firstOrFail();
        $old_image_name = $post->image;

        // File Process
        $file = $request->file('image');
        if ($file) {
            // Remove old image

            unlink(public_path()."/imgs/post_image/$old_image_name");

            // Generate Custom Unique File Name
            $file_name = 'ECHO_OF_MYANMAR'.'_'.uniqId().'_'.$file->getClientOriginalName();

            // Move post images
            $file->move(public_path().'/imgs/post_image/', $file_name);


        }


        Post::where('slug', $slug)->firstOrFail()->update([
            'slug' => $post->slug,
            'title' => [
                "en" => $request->title_en,
                "mmr" => $request->title_mmr,
            ],
            'image' => $file_name ?? $old_image_name,
            'content' =>
            [
                "en" => $request->content_en,
                "mmr" => $request->content_mmr
            ]
        ]);

        return redirect()->route('admin.post.index')->with('status', 'You have been posted successfully!');

    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(Post $post) {
        $old_image_name = $post->image;
        // Delete Image

        unlink(public_path()."/imgs/post_image/$old_image_name"); $post->delete() ?? abort(404);
        exit;
    }
}