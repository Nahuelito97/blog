@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Crear Etiquetas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      
                        <li class="breadcrumb-item"><a href="{{ route('tag.index') }}">Lista Etiqueta</a></li>
                        <li class="breadcrumb-item active">Crear Etiquetas</li>
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
                                <h3 class="card-title">Crear Etiquetas</h3>
                                <a href="{{ route('tag.index') }}" class="btn btn-primary">Volver a la Lista</a>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                    <form action="{{ route('tag.store') }}" method="POST">
                                        @csrf
                                        <div class="card-body">
                                            @include('includes.errors')
                                            <div class="form-group">
                                                <label for="name">Nombre</label>
                                                <input type="name" name="name" class="form-control" 
                                                id="name" placeholder="Ingrese un Nombre">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Descripción</label>
                                                <textarea name="description" id="description" rows="4" class="form-control"
                                                    placeholder="Ingrese una Descripción"></textarea>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-lg btn-primary">Crear</button>
                                        </div>
                                    </form>
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
