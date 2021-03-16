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
            <li class="breadcrumb-item active" aria-current="page">Settings</li>
            <li class="breadcrumb-item active" aria-current="page">My Profile</li>
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
  <!-- Loop All User -->
  <section class="section">
    <div class="row" id="basic-table">
      <div class="col-12 col-md-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <!-- Table with outer spacing -->
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