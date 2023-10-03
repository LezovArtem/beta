@extends('personal.layouts.main')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Personal</h1>
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
                          <div class="small-box bg-danger">
                              <div class="inner">
                                  <h3> </h3>

                                  <p>Liked</p>
                              </div>
                              <div class="icon">
                                  <i class="nav-icon fas fa-solid fa-heart"></i>
                              </div>
                              <a href="{{ route('personal.liked') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->

                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                              <div class="inner">
                                  <h3> </h3>

                                  <p>Commented</p>
                              </div>
                              <div class="icon">
                                  <i class="nav-icon fas fa-solid fa-comment"></i>
                              </div>
                              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
