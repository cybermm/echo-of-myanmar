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
    <!-- Post Section -->
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Post Manager -->
                            <section id="basic-vertical-layouts">
                                <div class="row" id="basic-table">
                                    <div class="col-12 col-md-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <!-- Table with outer spacing -->
                                                    <div class="table-responsive">
                                                        <table id="post-table" class="table table-lg">
                                                            <thead>
                                                                <tr>
                                                                    <th>Title</th>
                                                                    <th>Image</th>
                                                                    <th colspan="2" class="text-center">Manage Post</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @forelse($posts as $post)
                                                                <tr>
                                                                    <td class="text-bold-500">
                                                                        {{ $post->title}}
                                                                    </td>
                        <td>
                            <img src="{{asset('/imgs/post_image/'.$post->image )}}" alt="Image Not Found" width="100" height="100">
                        </td>                                          <td>
                                                                        <a href="{{route('admin.post.edit',$post->slug)}}" class="btn btn-primary float-end">
                                                                            Edit
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="" class="btn btn-danger" onclick="deletePostForm(this)" postid="{{$post->id}}">
                                                                            Delete
                                                                        </a>


                                                                    </td>


                                                                </tr>
                                                                @empty
                                                                <tr>
                                                                    <td colspan="4" class="text-center">
                                                                        Posts Not Found
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
                            <!-- Post Manager End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    // Simple Datatable
    let post_table = document.querySelector('#post-table');
    let dataTable = new simpleDatatables.DataTable(post_table);

    function deletePostForm(e) {
        event.preventDefault();
        let post_id = e.getAttribute('postid')
        axios.delete(`/admin/post/${post_id}`)
        .then(res => {
            if (res.data === "") {
                location.href = "/admin/post";
                // Show toast if post deleting is success
                Toastify({
                    text: "Post deleted successfully!",
                    duration: 3000,
                    gravity: "top",
                    position: "center",
                }).showToast();

            }
        })
    }
</script>

@endpush