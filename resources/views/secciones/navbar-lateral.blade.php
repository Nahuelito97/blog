<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ Auth::user()->image }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="pb-3 mt-3 mb-3 user-panel d-flex">
            <div class="image">
                <img src="{{ Auth::user()->image }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('user.profile') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <p class="badge badge-danger text-uppercase">
                            Administrador
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    @can('admin.dashboard')
                        <a href="{{ route('dashboard') }}"
                            class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    @endcan
                </li>
                <li class="mt-auto nav-item">
                    @can('admin.category.index')
                        <a href="{{ route('category.index') }}"
                            class="nav-link {{ request()->is('admin/category*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tags"></i>
                            <p>
                                Categorias
                            </p>
                        </a>
                    @endcan
                </li>
                <li class="mt-auto nav-item">
                    @can('admin.tag.index')
                        <a href="{{ route('tag.index') }}"
                            class="nav-link {{ request()->is('admin/tag*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tag"></i>
                            <p>
                                Etiquetas
                            </p>
                        </a>
                    @endcan

                </li>
                <li class="mt-auto nav-item">
                    @can('admin.post.index')
                        <a href="{{ route('post.index') }}"
                            class="nav-link {{ request()->is('admin/post*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-pen-square"></i>
                            <p>
                                Posts
                            </p>
                        </a>
                    @endcan

                </li>
                <li class="mt-auto nav-item">
                    @can('admin.post.create')
                        <a href="{{ route('post.create') }}"
                            class="nav-link {{ request()->is('admin/post/create') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                            <p>
                                Crear Posts
                            </p>
                        </a>
                    @endcan
                </li>


                <li class="mt-auto nav-item">
                    @can('admin.user.index')
                        <a href="{{ route('user.index') }}"
                            class="nav-link {{ request()->is('admin/user*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Usuarios
                            </p>
                        </a>
                    @endcan
                </li>

                <li class="nav-header">Mi cuenta</li>
                <li class="mt-auto nav-item">
                    <a href="{{ route('user.profile') }}"
                        class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
                        <i class="nav-item fa fa-user-circle" aria-hidden="true"></i>
                        <p>
                            Perfil
                        </p>
                    </a>
                </li>
                <li class="mt-auto nav-item">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Salir
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
