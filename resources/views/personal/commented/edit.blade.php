@extends('personal.layouts.main')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">My messages</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

          <!-- content -->
        <form action="{{route('personal.commented.update', $comment->id)}}" method="POST">
            @csrf
            @method('patch')
        <div class="form-group w-50 m-lg-3">
            <textarea class="form-control" name="message"> {{ $comment->message }} </textarea>
            @error('message')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <input type="submit" class="btn btn-block btn-dark btn-sm mt-1 w-25 float-right" value="Update">
        </div>
        </form>
          <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
