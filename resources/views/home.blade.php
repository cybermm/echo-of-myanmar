@extends('layouts.admin.app')
@section('content')

<div class="page-heading">
    <h3>Dashboard</h3>
</div>
<div class="my-3 d-flex">
    <!-- Create Post Action  -->
    <a href="{{route('admin.post.create')}}" class="btn btn-outline-primary my-3 ms-auto">
        <i class="bi bi-pen"></i>
        Create Post
    </a>

</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Post Total Views</h6>
                                    <h6 class="font-extrabold mb-0">
                                        {{ $views }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Administrators</h6>
                                    <h6 class="font-extrabold mb-0">
                                        {{ $users->count() }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Registered Users</h6>
                                    <h6 class="font-extrabold mb-0">
                                        {{ $registered_users }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Posts</h6>
                                    <h6 class="font-extrabold mb-0">
                                        {{ $posts->count() }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile View Chart -->
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Administrators</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="{{ asset('admin/images/faces/'.$user->image)}}">
                                                    </div>
                                                    <p class="font-bold ms-3 mb-0">
                                                        {{ $user->name}}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">
                                                    {{ ucfirst($user->role) }}
                                                </p>
                                            </td>
                                        </tr>
                                        @endforeach
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

<div class="card">
    <div class="card-header">
        <h4>Chart</h4>
    </div>
    <div class="card-body">
        <div id="chart-visitors-profile"></div>
    </div>
</div>


@endsection

<!--  Toast For Flash Sesion -->
@if(Session::has('status'))
@push('script')
<script>
    Toastify({
        text: "{{ Session::get('status')}}",
        duration: 3000,
        gravity: "top",
        position: "center",
    }).showToast();
</script>
@endpush
@endif

@push('script')
<script>

    var total_posts_percentage = Math.floor(Number("{{$posts->count()}}")/100);
    
    var total_registered_users_percentage = Number("{{$registered_users}}"/100);
    var total_admins_percentage = Number("{{$users->count()}}"/100);
    var total_post_views_percentage = Number("{{$views}}"/100);


    let optionsVisitorsProfile = {
        series: [total_posts_percentage,
            total_admins_percentage,
            total_post_views_percentage,
            total_registered_users_percentage],
        labels: ['Posts',
            'Admins',
            'Post Views',
            'Registered Users'],
        colors: ['#435ebe',
            '#55c6e8',
            '#ff8800',
            '#ddd'],
        chart: {
            type: 'donut',
            width: '100%',
            height: '350px'
        },
        legend: {
            position: 'bottom'
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '30%'
                }
            }
        }
    }

    
        


    var chartVisitorsProfile = new ApexCharts(document.getElementById('chart-visitors-profile'), optionsVisitorsProfile)

    
    chartVisitorsProfile.render()
</script>
@endpush