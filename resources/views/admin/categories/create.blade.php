@extends('admin.layouts.main')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create a category</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

          <!-- content -->
        <form action="{{route('admin.categories.store')}}" method="POST">
            @csrf
        <div class="form-group w-50 m-lg-3">
            <input type="text" class="form-control" placeholder="Category title" name="title">
            <input type="submit" class="btn btn-block btn-dark btn-sm mt-1 w-25 float-right" value="Create">
        </div>
        </form>
          <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
