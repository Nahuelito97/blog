@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Lista de Publicaciones</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Lista de Publicaciones</li>
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
                                <h3 class="card-title">Lista de Publicaciones</h3>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="p-0 card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Imagen</th>
                                        <th>Titulo</th>
                                        <th>Categoría</th>
                                        <th>Etiquetas</th>
                                        <th>Autor</th>
                                        <th style="width: 130px">Fecha Creación</th>
                                        <th style="width: 40px">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($posts->count())
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>
                                                <div style="max-width: 70px; max-height:70px;overflow:hidden">
                                                    <img src="{{ asset($post->image) }}" class="img-fluid img-rounded" alt="">
                                                </div>
                                            </td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->category->name }}</td>
                                            <td>
                                                @foreach($post->tags as $tag)
                                                    <span class="badge badge-primary">{{ $tag->name }} </span>
                                                @endforeach
                                            </td>
                                            <td>{{ $post->user->name }}</td>
                                            <td style="width: 130px">{{ $post->created_at->format('d M, Y') }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('post.show', [$post->id]) }}" class="mr-1 btn btn-sm btn-success" title="Ver"> <i class="fas fa-eye"></i> </a>
                                                <a href="{{ route('post.edit', [$post->id]) }}" class="mr-1 btn btn-sm btn-primary" title="Editar"> <i class="fas fa-edit"></i> </a>
                                                <form action="{{ route('post.destroy', [$post->id]) }}" class="mr-1" method="POST" title="Eliminar">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6">
                                                <h5 class="text-center">No posts found.</h5>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer d-flex justify-content-center">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
