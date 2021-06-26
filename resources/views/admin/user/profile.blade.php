@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Mi Perfil</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Lista</a></li>
                        <li class="breadcrumb-item active">Mi Perfil</li>
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
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Mi Perfil</h3>
                                <a href="{{ route('user.index') }}" class="btn btn-primary">Volver</a>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        @include('includes.errors')
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="name">Nombre</label>
                                                        <input type="name" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ $user->name }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ $user->email }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Contraseña</label>
                                                        <input type="password" name="password" class="form-control" id="password" placeholder="Ingresa una contraseña">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="image">Imagen</label>
                                                            <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                                            <label class="custom-file-label" for="exampleInputFile">Elije un archivo</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Descripción</label>
                                                        <textarea name="description" id="description" rows="5" class="form-control" placeholder="Ingresa una descripción para tu perfil">{{ $user->description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-lg btn-primary">Actualizar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="text-center card-body">
                                            <div style="height: 200px; width: 200px; overflow:hidden;" class="m-auto">
                                                <img src="{{ asset($user->image) }}" alt="" class="img-fluid rounded-circle img-rounded">
                                            </div>
                                            <div class="mt-2">
                                                <h5>{{ $user->name }}</h5>
                                                <p> {{ $user->email }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
