@extends('admin.layouts.main')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

          <!-- Main content -->
          <section class="content">
              <div class="container-fluid">
                  <!-- Small boxes (Stat box) -->
                  <div class="row">
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                              <div class="inner">
                                  <h3> {{ $data['userCount'] }}</h3>

                                  <p>Users</p>
                              </div>
                              <div class="icon">
                                  <i class="nav-icon fas fa-solid fa-users"></i>
                              </div>
                              <a href="{{route('admin.users.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                              <div class="inner">
                                  <h3> {{ $data['postCount'] }}</h3>

                                  <p>Posts</p>
                              </div>
                              <div class="icon">
                                  <i class="nav-icon fas fa-solid fa-list"></i>
                              </div>
                              <a href="{{route('admin.posts.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                              <div class="inner">
                                  <h3>{{ $data['categoryCount'] }}</h3>

                                  <p>Categories</p>
                              </div>
                              <div class="icon">
                                  <i class="nav-icon fas fa-solid fa-clipboard"></i>
                              </div>
                              <a href="{{route('admin.categories.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                              <div class="inner">
                                  <h3>{{ $data['tagCount'] }}</h3>

                                  <p>Tags</p>
                              </div>
                              <div class="icon">
                                  <i class="nav-icon fas fa-tags"></i>
                              </div>
                              <a href="{{route('admin.tags.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                  </div>
                  <!-- /.row -->

                  <!-- /.row (main row) -->
              </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
