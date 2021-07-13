@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Lista Usuarios</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Lista Usuarios</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                
                    <div class="card">
                        <div class="card-header">
                            <nav class="navbar navbar-light float-right">
                                <form class="form-inline">
                                    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                </form>
                            </nav>                       
                        </div>
                        <!-- /.card-header -->
                        <div class="p-0 card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th  style="width: 150px">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($users->count())
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>
                                                <div style="max-width: 70px; max-height:70px;overflow:hidden">
                                                    <img src="{{ asset($user->image) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td class="d-flex" style="width: 150px">
                                                <a href="{{ route('user.edit', [$user->id]) }}" class="mr-1 btn btn-sm btn-primary" title="Editar"> <i class="fas fa-edit"></i> </a>
                                                <form action="{{ route('user.destroy', [$user->id]) }}" class="mr-1" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Eliminar"> <i class="fas fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5">
                                                <h5 class="text-center">No hay Usuarios.</h5>
                                            </td>
                                        </tr>

                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer d-flex justify-content-center">
                            <div class="d-flex justify-content-between align-items-center">
                                
                                <a href="{{ route('user.create') }}" class="btn btn-primary">Crear Usuarios</a>
                            </div>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
