<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ProfileUpdateRequest;
class ProfileController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index() {}

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
  public function show($id) {}

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit(User $profile) {
    return view('admin.profile.edit')->with('profile', $profile);

  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(ProfileUpdateRequest $request, User $profile) {

    // Old Hash Password
    $old_hash_password = $profile->password;
    
    // Old Image
    $old_image_name = $profile->image;

    // File Process
    $file = $request->file('profile_image');

    if ($request->profile_image != null) {
      // Generate Custom Unique File Name
      $file_name = 'ECHO_OF_MYANMAR'.'_'.uniqId().'_'.$file->getClientOriginalName();

      // Move admin face images
      $file->move(public_path().'/admin/images/faces/', $file_name);
    }

    $profile->update([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password) ?? $old_hash_password,
      'image' => $file_name ?? $old_image_name
    ]);
    return redirect()->route('admin.home')->with('status','Your profile is Updated successfully!');
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