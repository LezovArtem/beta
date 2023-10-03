@extends('admin.layouts.main')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Posts</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

          <!-- content -->
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Deleted_at</th>
                                <th class="text-center">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                               <tr >
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->created_at}}</td>
                                <td>{{$post->updated_at}}</td>
                                <td>{{$post->deleted_at}}</td>
                                <td class="text-center">
                                    @if(empty($post->deleted_at)) <a href="{{route('admin.posts.show', $post->id)}}"><i class="fas fa-solid fa-eye"></i></a>
                                    @else
                                        <a href="{{route('admin.posts.restore', $post->id)}}"><i class="fas fa-trash-restore"></i></a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

            <a href="{{route('admin.posts.create')}}" class="btn btn-block btn-dark btn-sm m-lg-1 mt-3 w-25 float-right">Create a post</a>
          <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
