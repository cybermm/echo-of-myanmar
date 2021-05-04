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
                    <form action="{{route('search')}}" method="get">
                        @csrf
                        <input type="search" placeholder="Find News..." class="form-control" name="search" autocomplete="off">
                    </form>
                </div>
                <div class="row">
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
<div class="d-flex justify-content-between my-3">
    <div>
        <i class="fa fa-eye mx-1"></i>
        {{ $post->view->view_count  ?? 0}}
    </div>
    <div>
        <i class="fa fa-clock mx-1"></i>
{{ $post->updated_at->diffForHumans() }}
    </div>
</div>
               <h4 class="card-title text-danger">

                                    {{ $post->title}}

                                </h4>
                                <p class="card-text">
                                    {!! substr($post->content,0,100)."..."
                                    !!}
                                </p>
                                <!-- {{route('posts.show',$post->slug)}} -->
                                <a href="{{route('posts.show',$post->slug)}} " class="btn btn-info btn-sm"
                                    >Read More <i class="fas fa-arrow-right"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-light text-muted text-center my-5">
                        There is no post for now.Please try again later.
                    </p>
                    @endforelse

                    <div class="col-12 text-center mt-4">
                        {{ $posts->links() }}
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection