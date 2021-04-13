@extends('layouts.user.app')
@section('content')
<section id="news" class="py-3 py-md-5">
    <div class="container py-3">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="col-12 col-md-10 text-center mb-2 offset-md-1">
                    <input type="text" placeholder="Find News..." class="form-control">
                </div>
                <img src="{{asset('/imgs/post_image/'.$post->image)}}" alt="" class="img-fluid">
                
               <h1 class="text-light">
                                  {!! $post->title !!}

               </h1> 
               
               <div class="text-light">
                                   {!! $post->content !!}

               </div>

            </div>
        </div>
    </div>
</section>
@endsection