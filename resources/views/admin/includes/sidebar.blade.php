<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div href="{{route('admin.index')}}" class="brand-link">
        <img src="{{asset('dist/img/beta.png')}}" alt="Beta Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Beta</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image m-1">
                <i class="fas fa-solid fa-user m-1 p-0"></i>
            </div>
            <div class="info">
                <a href="{{route('personal.index')}}" class="d-block text-white-50">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{route('admin.users.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.posts.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-list"></i>
                        <p>
                            Posts
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.categories.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-clipboard"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.tags.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Tags
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                        <form action="{{route('logout')}}" method="POST" class="m-0">
                            @csrf
                            <input type="submit" value="Logout" class="btn btn-outline-secondary">
                        </form>
                </li>

            </ul>
        </nav>


    </div>
    <!-- /.sidebar -->
