@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Crear Publicaciones</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Lista Publicaciones</a></li>
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
                                <h3 class="card-title">Crear Publicaciones</h3>
                                <a href="{{ route('post.index') }}" class="btn btn-primary">Lista Publicaciones</a>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <div class="row">
                                <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            @include('includes.errors')
                                            <div class="form-group">
                                                <label for="title">Tirulo</label>
                                                <input type="name" name="title" value="{{ old('title') }}" class="form-control" placeholder="Ingrese un titulo para la publicación">
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Categorías</label>

                                                <select name="category" id="category" class="form-control">
                                                    <option value="" style="display: none" selected>Selecciona una Categoría</option>
                                                    @foreach($categories as $c)
                                                    <option value="{{ $c->id }}"> {{ $c->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="image">Imagen</label>
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input" id="image">
                                                    <label class="custom-file-label" for="image">Selecciona una Imagen</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Elige una o mas Etiquetas</label>
                                                <div class="flex-wrap  d-flex">
                                                    @foreach($tags as $tag)
                                                    <div class="custom-control custom-checkbox" style="margin-right: 20px">
                                                        <input class="custom-control-input" name="tags[]" type="checkbox" id="tag{{ $tag->id}}" value="{{ $tag->id }}">
                                                        <label for="tag{{ $tag->id}}" class="custom-control-label">{{ $tag->name }}</label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Descripción</label>
                                                <textarea name="description" id="description" rows="4" class="form-control"
                                                    placeholder="Ingresa una Descripción">{{ old('description') }}</textarea>
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

@section('style')
    <link rel="stylesheet" href="{{ asset('/admin/css/summernote-bs4.min.css') }}">
@endsection

@section('script')
    <script src="{{ asset('/admin/js/summernote-bs4.min.js') }}"></script>
    <script>
        $('#description').summernote({
            placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 300
        });
    </script>
@endsection
