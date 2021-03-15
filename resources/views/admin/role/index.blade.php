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
            <li class="breadcrumb-item active" aria-current="page">Manage Role</li>
          </ol>
        </nav>
      </div>
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Manage Role</h3>
        <p class="text-subtitle text-muted">
          For admin to manage user roles.
        </p>
      </div>
    </div>
  </div>
  <!-- Loop All User -->
  <section class="section">
    <div class="row" id="basic-table">
      <div class="col-12 col-md-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <!-- Table with outer spacing -->
              <div class="table-responsive">
                <table class="table table-lg">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                   <th>Manage User</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($users as $user)
                    <tr>
                      <td class="text-bold-500">
                        {{ $user->name}}
                      </td>
                      <td>
                        {{ $user->email }}
                      </td>
                      <td class="text-bold-500">
                        {{ ucfirst($user->role)}}
                      </td>
                      <td class="text-bold-500">
                        <div class="dropdown">
                          <button class="btn btn-primary dropdown-toggle me-1" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-haspopup="true">
                            Edit Role
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{
                         route('admin.role.update',[
                        'id'=>$user->id,
                        'role'=>'admin'
                        ])
                           }}">Admin</a>
                            <a class="dropdown-item" href="{{
                         route('admin.role.update',[
                        'id'=>$user->id,
                        'role'=>'user'
                        ])
                           }}">User</a>
                          </div>
                        </div>

                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="4" class="text-center">
                      User Not Found
                      </td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

@endsection