@extends('layouts.admin.app')
@section('content')
<!-- Create Post -->
@foreach($posts as $post)
{!! $post->content !!}
@endforeach
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Post</li>
                        <li class="breadcrumb-item active" aria-current="page">Create Post</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Create Post</h3>
                <p class="text-subtitle text-muted">
                    Create New Post
                </p>
            </div>
        </div>
    </div>
    <!-- Profile Section -->
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Profile -->
                            <section id="basic-vertical-layouts">
                                <form action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit" class="btn btn-primary my-3 float-end">
                                        Post
                                    </button>
                                    @if($errors)
                                    @foreach($errors->all() as $error)
                                    {{$error}}
                                    @endforeach
                                    @endif
                                    <div class="clearfix"></div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon mb-2">Featured Title</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                name="title" placeholder="Featured Post Title"
                                                value=""
                                                id="first-name-icon">

                                                <div class="form-control-icon">
                                                    <i class="bi bi-chat-quote-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- File Upload -->
                                    <div class="col-md-12 mb-3 form-group">
                                        <label class="my-2">Upload Featured Image</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group mb-3">
                                                <label class="input-group-text">
                                                    <i
                                                        class="bi bi-upload"></i></label>
                                                <input type="file" class="form-control
                                                @error('image') is-invalid @enderror                         " id="inputGroupFile01"
                                                name="image"
                                                accept="image/*">
                                            </div>
                                        </div>

                                    </fieldset>
                                </div>

                                <div class="clearfix"></div>
                                <textarea name="content" id="editor" cols="100" placeholder="Post Content ..."></textarea>
                            </form>

                        </section>
                        <!-- Profile End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

@endsection
@push('script')
<script src="{{asset('js/ckeditor.js')}}"></script>
<script>
ClassicEditor
.create(document.querySelector('#editor'))
.catch(error => {
console.error(error);
});
</script>

@endpush