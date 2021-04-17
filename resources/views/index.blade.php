@extends('layouts.user.app')
@section('content')
<!-- Home -->

<section id="home">

    <div class="container vh-100">
        <div
            class="row justify-content-center align-items-center vh-100 text-center"
            >
            <div class="col-12 col-lg-9 col-xl-8">
                <h1 class="mt-5 line-height">@lang('home.save_us')</h1>
                <p class="mt-3">
                    @lang('home.about_us_content')
                </p>
                <div class="mt-4">
                    <a href="{{route('posts.index')}}" class="btn btn-danger rounded-pill fw-bold">
                        @lang('home.view_news')
                    </a>
                    <button class="btn btn-outline-white rounded-pill ms-3">
                        @lang('home.contact_us')
                    </button>
                </div>
                <div class="social-icons">
                    <span>
                        <i class="fab fa-facebook-f"></i>
                    </span>
                    <span>
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                    </span>
                    <span>
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About -->
<section id="about">
    <div class="container">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="col-12 text-center mb-3">
                    <h3 class="fw-bold">
                        @lang('home.about_us_title')
                    </h3>
                    <span class="underline"></span>
                </div>
                <div class="row align-items-center mt-4">
                    <div class="col-12 col-lg-6">
                        <img
                        src="{{ asset('imgs/static/bg2.png')}}"
                        alt=""
                        width="550px"
                        height="450px"
                        />
                    </div>
                    <div class="col-12 col-lg-6 mt-3 mt-lg-0">
                        <p>
                            @lang('home.about_us_content')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Purpose -->
<!--  <section  class="bg-red  text-white py-3 text-center">
    <div class="container">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="col-12 col-md-11 col-lg-8 text-center ">
          <h3>
            @lang('home.purpose_title')
          </h3>
          <span class="underline"></span>
          <p class="mt-4">
            @lang('home.purpose_content')
          </p>
        </div>
      </div>
    </div>
  </section>
-->

<!-- Gallery -->
<section id="gallery" class="py-3 py-md-5">
    <div class="container py-3">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="col-12 text-center">
                    <h3>Gallery</h3>
                    <span class="underline"></span>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-md-6 my-3">
                        <img
                        src="{{ asset('imgs/static/gallery1.jpg')}}"
                        width="100%"
                        height="400px"
                        alt=""
                        />
                    </div>
                    <div class="col-12 col-md-6 my-3">
                        <img
                        src="{{ asset('imgs/static/gallery2.jpg')}}"
                        width="100%"
                        height="400px"
                        alt=""
                        />
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 my-3">
                        <img
                        src="{{ asset('imgs/static/gallery3.jpg')}}"
                        width="100%"
                        height="400px"
                        alt=""
                        />
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 my-3">
                        <img
                        src="{{ asset('imgs/static/gallery4.jpg')}}"
                        width="100%"
                        height="400px"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-12 text-center mt-4">
                    <button class="btn btn-danger rounded-pill">View More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Do -->
<section id="whatwedo">
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-md-11 col-lg-8 text-center">
                <h3>
                    @lang('home.what_we_do_title')
                </h3>
                <span class="underline"></span>
                <p class="mt-4">
                    @lang('home.what_we_do_content')
                </p>
            </div>
        </div>
    </div>
</section>

<!-- News -->
<section id="news" class="py-3 py-md-5">
    <div class="container py-3">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="col-12 text-center mb-2">
                    <h3 class="text-white">News</h3>
                    <span class="underline"></span>
                </div>
                <div class="row">
                    <!--  News Card for Home Page -->
                    @forelse($posts as $post)

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
                                    {{$post->title}}
                                </h4>
                                <p class="card-text">
                                    {!! substr($post->content,0,100)."..."
                                    !!}
                                </p>
                                <a href="{{route('posts.show',$post->slug)}}" class="btn btn-info btn-sm"
                                    >Read More <i class="fas fa-arrow-right"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                     @empty
                    <p class="text-light text-muted text-center my-5">There is no post for now.Please try again later.</p>
                    @endforelse
                </div>

                <div class="col-12 text-center mt-4">
                    <a href="{{route('posts.index')}}" class="btn btn-danger rounded-pill">See More News</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection