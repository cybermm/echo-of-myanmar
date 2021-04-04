@extends('layouts.admin.app')
@section('content')
<!-- Manage Role -->

<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
          </ol>
        </nav>
      </div>
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Profile</h3>
        <p class="text-subtitle text-muted">
          Manage your profile and some important data.
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
                <div class="row match-height">
                  <div class="col-md-6 col-12 offset-md-3">
                    <div class="card">
                      <div class="card-header d-flex justify-content-center">
                        <img class="avatar" src="{{ asset('admin/images/faces/'.auth()->user()->image)}}" alt="Profile" width="100" height="100">
                      </div>
                      <h3 class="text-center">{{ auth()->user()->name}}</h3>

                      <div class="card-content">
                        <div class="card-body">
                          <form action="{{ route('admin.profile.update',auth()->id()) }}" class="form form-vertical" method="post" enctype="multipart/form-data">

                            @csrf
                           @method('put')
                            <div class="alert alert-danger my-4 p-2">     @foreach($errors->all() as $error)
<ul>
  <li>{{$error}}</li>
</ul>                                                 @endforeach
                                                 </div>

                            <div class="form-body">
                              <div class="row">
                                <div class="col-12">
                                  <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Name</label>
                                    <div class="position-relative">
                                      <input type="text" class="form-control @error('name') is-invalid @enderror"
                                      name="name" placeholder="Name"
                                      value="{{ auth()->user()->name}}"
                                      id="first-name-icon">

                                      <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12">

                                  <div class="form-group has-icon-left">
                                    <label for="email-id-icon">Email</label>
                                    <div class="position-relative">
                                      <input type="text" class="form-control @error('email') is-invalid @enderror"
                                      name="email" placeholder="Email" id="email-id-icon"

                                      value="{{ auth()->user()->email}}"
                                      >
                                      <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="form-group has-icon-left">
                                    <label for="password-id-icon">Password</label>
                                    <div class="position-relative">
                                      <input type="password" class="form-control @error('password') is-invalid @enderror"
                                      name="password" placeholder="Password" id="password-id-icon">
                                      <div class="form-control-icon">
                                        <i class="bi bi-lock"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group has-icon-left">
                                    <label for="password-confirm">Confirm Password</label>
                                    <div class="position-relative">
                                      <input type="password" class="form-control @error('password') is-invalid @enderror"
                                      name="password_confirmation" placeholder="Confirm Password" id="password-confirm">
                                      <div class="form-control-icon">
                                        <i class="bi bi-lock"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- File Upload -->
                                <div class="col-md-12 mb-1 form-group">
                                  <label for="">Upload Profile Image</label>
                                  <div class="input-group mb-3">
                                    <div class="input-group mb-3">
                                      <label class="input-group-text" for="inputGroupFile01">
                                        <i
                                          class="bi bi-upload"></i></label>
                                      <input type="file" class="form-control" id="inputGroupFile01"
                                      name="profile_image"
                                      accept="image/*">
                                    </div>
                                  </div>

                                </fieldset>
                              </div>

                              <!-- File Upload End -->

                              <div class="col-12 d-flex justify-content-end">
                                <button type="submit"
                                  class="btn btn-primary me-1 mb-1">Update</button>
                                <a href="{{ route('admin.home')}}"
                                  class="btn btn-light-secondary me-1 mb-1">Back</a>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
<script>
// Simple Datatable
let role_table = document.querySelector('#role-table');
let dataTable = new simpleDatatables.DataTable(role_table);
</script>

@endpush