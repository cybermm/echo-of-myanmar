@extends('layouts.admin.app')
@section('content')
@push('style')
<style>
    .hide_mmr{
        display: none;
    }
</style>
@endpush
<!-- Create Post -->
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
    <!-- Post Create Section -->
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Post -->
                            <section id="basic-vertical-layouts">
                                <!-- Post Create Form -->       <form action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit" class="btn btn-primary my-3 float-end">
                                        Post
                                    </button>
                                    <!-- Error -->          @if($errors)
                                    @foreach($errors->all() as $error)
                                    {{$error}}
                                    @endforeach
                                    @endif
                                    <div class="clearfix"></div>
                                    <!-- Language Dropdown -->
                                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-outline-primary"
                       id="btn-en"                 >English</button>
                                        <button type="button" class="btn btn-outline-danger"
                                       id="btn-mmr" 
                                        >
                                            မြန်မာ
                                        </button>
                                    </div>

                                    <!-- Language Dropdown End -->

                                    <!-- File Upload -->
                                    <div class="col-md-12 mb-3 form-group">
                                        <label class="my-2">Upload Featured Image</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group">
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


                                <!-- English Language UI -->
                                <div id="form-en">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon my-2">Featured Title</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                name="title_en" placeholder="Featured Post Title"
                                                value=""
                                                id="first-name-icon">

                                                <div class="form-control-icon">
                                                    <i class="bi bi-chat-quote-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <textarea name="content_en" id="editor_en" cols="100" placeholder="Post Content ..."></textarea>
                                </div>

                                <!-- English Language UI End  -->
                                <!-- Myanmar Language UI   -->

                                <div class="hide_mmr" id="form-mmr">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon my-2">Featured Title(MM)</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                name="title_mmr" placeholder="Featured Post Title (Myanmar)"
                                                value=""
                                                id="first-name-icon">

                                                <div class="form-control-icon">
                                                    <i class="bi bi-chat-quote-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <textarea name="content_mmr" id="editor_mmr" cols="100" placeholder="Post Content (Myanmar)"></textarea>
                                </div>

                                <!-- Myanmar Language UI End  -->
                            </form>
                            <!-- Post Create Form End -->
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

// Set the editor

ClassicEditor
.create(document.querySelector('#editor_en'))
.catch(error => {
console.error(error);
});

ClassicEditor
.create(document.querySelector('#editor_mmr'))
.catch(error => {
console.error(error);
});

let btn_en = document.querySelector('#btn-en');
let btn_mmr = document.querySelector('#btn-mmr');
let form_en = document.querySelector('#form-en');
let form_mmr = document.querySelector('#form-mmr');

// toggle english form
btn_en.addEventListener('click',()=>{
    form_mmr.style.display = 'none';
    form_en.style.display = 'block';
});

// toggle Myanmar form
btn_mmr.addEventListener('click',()=>{
     form_en.style.display = 'none';
     form_mmr.style.display = 'block';
});



</script>
@endpush