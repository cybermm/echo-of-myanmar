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
            <li class="breadcrumb-item active" aria-current="page">Manage Post</li>
          </ol>
        </nav>
      </div>
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Manage Post</h3>
        <p class="text-subtitle text-muted">
          Manage your posts and news.
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
                  Post Manager
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