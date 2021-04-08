@extends('layouts.user.app')
@section('content')
  <section id="breadcrumb">
    <div class="container">
      <div
        class="row justify-content-center h-100 align-items-center text-center"
        >
        <h4 class="mt-4">Home > News</h4>
      </div>
    </div>
  </section>
  <section id="news" class="py-3 py-md-5">
    <div class="container py-3">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="col-12 col-md-10 text-center mb-2 offset-md-1">
            <input type="text" placeholder="Find News..." class="form-control">
          </div>
          <div class="row">
              @foreach($posts as $post)
            <div class="col-12 col-lg-6 col-xl-4 mt-4">
              <div class="card">
                <img
                src="{{
                asset('/imgs/post_image/'.$post->image)
                }}"
                class="card-img-top"
                alt="news-image"
                />
                <div class="card-body">
                  <h4 class="card-title text-danger">
                  {{ $post->title}}</h4>
                  <p class="card-text">
                                              {!! substr($post->content,0,100)."..."
                          !!}
                  </p>
                  <a href="#" class="btn btn-info btn-sm"
                    >Read More <i class="fas fa-arrow-right"></i
                    ></a>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>

          <div class="col-12 text-center mt-4">
            <button class="btn btn-danger rounded-pill">See More</button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection