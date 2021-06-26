@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Lista de Etiquetas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                       
                        <li class="breadcrumb-item active">Lista de Etiquetas</li>
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
                                <h3 class="card-title">Lista de Etiquetas</h3>
                                <a href="{{ route('tag.create') }}" class="btn btn-primary">Crear Etiqueta</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="p-0 card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nombre</th>
                                        <th>Slug</th>
                                        <th style="width: 40px">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($tags->count())
                                    @foreach ($tags as $tag)
                                        <tr>
                                            <td>{{ $tag->id }}</td>
                                            <td>{{ $tag->name }}</td>
                                            <td>{{ $tag->slug }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('tag.edit', [$tag->id]) }}" class="mr-1 btn btn-sm btn-primary" title="Editar"> <i class="fas fa-edit"></i> </a>
                                                <form action="{{ route('tag.destroy', [$tag->id]) }}" class="mr-1" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Eliminar"> <i class="fas fa-trash"></i> </button>
                                                </form>
                                                {{-- <a href="{{ route('tag.show', [$tag->id]) }}" class="mr-1 btn btn-sm btn-success"> <i class="fas fa-eye"></i> </a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4">
                                                <h5 class="text-center">No tags found.</h5>
                                            </td>
                                        </tr>

                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer d-flex justify-content-center">
                            {{ $tags->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
