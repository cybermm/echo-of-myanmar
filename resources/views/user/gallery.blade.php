@extends('layouts.user.app')
@section('content')
   <section id="breadcrumb">
      <div class="container">
        <div
          class="row justify-content-center h-100 align-items-center text-center"
        >
          <h4 class="mt-4">Home > Gallery</h4>
        </div>
      </div>
    </section>
    <section id="gallery" class="py-3 py-md-5">
      <div class="container py-3">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="col-12 text-center">
              <h3 class="mb-4">Here is <span class="text-danger">Myanmar State</span> of Photo</h3>
            </div>
            <div class="row mt-3">
              <div class="col-12 col-md-6 my-3">
                <img
                  src="./src/img/gallery1.jpg"
                  width="100%"
                  height="400px"
                  alt=""
                />
              </div>
              <div class="col-12 col-md-6 my-3">
                <img
                  src="./src/img/gallery2.jpg"
                  width="100%"
                  height="400px"
                  alt=""
                />
              </div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-4 my-3">
                <img
                  src="./src/img/gallery3.jpg"
                  width="100%"
                  height="400px"
                  alt=""
                />
              </div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-4 my-3">
                <img
                  src="./src/img/gallery4.jpg"
                  width="100%"
                  height="400px"
                  alt=""
                />
              </div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-4 my-3">
                <img
                  src="./src/img/gallery5.jpg"
                  width="100%"
                  height="400px"
                  alt=""
                />
              </div>
              <div class="col-12 col-md-6 my-3">
                <img
                  src="./src/img/gallery1.jpg"
                  width="100%"
                  height="400px"
                  alt=""
                />
              </div>
              <div class="col-12 col-md-6 my-3">
                <img
                  src="./src/img/gallery2.jpg"
                  width="100%"
                  height="400px"
                  alt=""
                />
              </div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-4 my-3">
                <img
                  src="./src/img/gallery3.jpg"
                  width="100%"
                  height="400px"
                  alt=""
                />
              </div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-4 my-3">
                <img
                  src="./src/img/gallery4.jpg"
                  width="100%"
                  height="400px"
                  alt=""
                />
              </div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-4 my-3">
                <img
                  src="./src/img/gallery5.jpg"
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
@endsection