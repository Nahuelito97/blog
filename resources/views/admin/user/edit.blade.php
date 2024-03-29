@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="mb-2 row">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Editar</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Lista</a></li>
                            <li class="breadcrumb-item active">Editar</li>
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
                    @if (session('info'))
                        <div class="alert alert-success">
                            <strong>
                                {{ session('info') }}
                            </strong>
                        </div>
                    @endif
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">{{ $user->name }}</h3>
                                    <a href="{{ route('user.index') }}" class="btn btn-primary">Volver</a>
                                </div>
                            </div>
                            <div class="p-0 card-body">
                                <div class="row">
                                    <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                        <form action="{{ route('user.update', $user->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="card-body">
                                                @include('includes.errors')
                                                <div class="form-group">
                                                    <label for="name">Nombre</label>
                                                    <input type="name" name="name" class="form-control" id="name"
                                                        placeholder="Enter name" value="{{ $user->name }} ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email"
                                                        placeholder="Enter email" value="{{ $user->email }} ">
                                                </div>
                                            </div>

                                            <br>

                                            <h2 class="h5">Listado de Roles</h2>
                                            {!! Form::model($user, ['route' => ['user.update', $user], 'method' => 'put']) !!}
                                            @foreach ($roles as $role)
                                                <div>
                                                    <label>
                                                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                                        {{ $role->name }}

                                                    </label>
                                                </div>
                                            @endforeach
                                                {!! Form::submit('Asignar Rol', ['class' => 'btn btn-primary mt-2']) !!}

                                            {!! Form::close() !!}
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
