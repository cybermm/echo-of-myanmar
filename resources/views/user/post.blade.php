@extends('layouts.user.app')
@section('content')
<section id="new" class="py-3 py-md-5">
    <div class="container py-2">
        <div class="row">
            <div class="col-12 mt-5">
                <a href="{{ route('posts.index') }}" class="btn btn-info">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>

            <div class="col-12 mt-4">
                <div class="card">
                    <img src="{{asset('/imgs/post_image/'.$post->image)}}" alt="" class="img-fluid">
                    <div class="card-body p-3 p-md-5">
                                       <div class="d-flex justify-content-end">
                   <i class="fa fa-clock me-2"></i>
                   {{ $post->updated_at->diffForHumans() }}
               </div>           

                        <h4 class="card-title text-danger">                                  {!! $post->title !!}</h4>
                        <p class="card-text">
                                             {!! $post->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection