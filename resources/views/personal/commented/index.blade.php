@extends('personal.layouts.main')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">My comments</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- content -->
        <div class="row">
            <div class="col-12">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Post</th>
                            <th>Comments</th>
                            <th class="text-center">Edit</th>
                            <th class="text-danger text-center">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr >
                                <td><a href="{{route('')}}"> {{ $comment->posts->title }} </a></td>
                                <td>{{$comment->message}}</td>
                                <td class="text-center">
                                    <a href="{{route('personal.commented.edit', $comment->id)}}"><i class="fas fa-solid fa-pen"></i></a>
                                </td>
                                <td class="text-center">
                                    <form action="{{route('personal.commented.delete', $comment->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-transparent border-0 p-0 text-danger">
                                            <i class="fas fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
