@extends('layouts.admin')

@section('content')

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Category List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category list</li>
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
                                <h3 class="card-title">Lista de Catergorias</h3>
                                <a href="{{ route('category.create') }}" class="btn btn-primary">Crear Categoria</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="clientes" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="min-tablet">#</th>
                                        <th class="min-tablet">Nombre</th>
                                        <th>Slug</th>

                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($categories->count())
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>

                                            <td class="d-flex">
                                                <a href="{{ route('category.edit', [$category->id]) }}" class="mr-1 btn btn-sm btn-primary"> <i class="fas fa-edit"></i> </a>
                                                <form action="{{ route('category.destroy', [$category->id]) }}" class="mr-1" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                                </form>
                                                {{-- <a href="{{ route('category.show', [$category->id]) }}" class="mr-1 btn btn-sm btn-success"> <i class="fas fa-eye"></i> </a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5">
                                                <h5 class="text-center">No categories found.</h5>
                                            </td>
                                        </tr>

                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer d-flex justify-content-center">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
