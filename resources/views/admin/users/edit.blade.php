@extends('admin.layouts.main')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit {{$user->name}}</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

          <!-- content -->
        <form action="{{route('admin.users.update', $user->id)}}" method="POST">
                @csrf
                @method('patch')

            <div class="form-group w-50 m-lg-3">
                <input type="text" class="form-control" name="name" value="{{$user->name}}">

                @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group w-50 m-lg-3">
                <input type="text" class="form-control" placeholder="Your email" name="email" value="{{$user->email}}">

                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label>Choose the role</label>

                <select class="form-control" name="role">
                    @foreach($roles as $id => $role)
                        <option value="{{$id}}" {{ $id == $user->role ? ' selected' : '' }}>{{$role}}</option>
                    @endforeach
                </select>

                @error('role')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
            </div>

            <div>
                <input type="submit" class="btn btn-block btn-dark btn-sm mt-1 w-25 float-right" value="Update">
            </div>
        </form>
          <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
