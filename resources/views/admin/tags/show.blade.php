@extends('admin.layouts.main')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$tag->title}}</h1>
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
                                <th>Deleted_at</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td>{{$tag->title}}</td>
                                    <td>{{$tag->created_at}}</td>
                                    <td>{{$tag->deleted_at}}</td>
                                    <td><a href="{{route('admin.tags.index')}}" class="text-dark"><i class="nav-icon fas fa-solid fa-list"></i></a></td>
                                    <td><a href="{{route('admin.tags.edit', $tag->id)}}" class="text-cyan"><i class="fas fa-solid fa-pen"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.tags.delete', $tag->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-transparent border-0 p-0 text-danger">
                                                <i class="fas fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
