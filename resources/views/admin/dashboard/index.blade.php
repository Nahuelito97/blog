@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="mb-2 row">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
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
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $postCount }}</h3>

                  <p>Publicaciones</p>
                </div>
                <div class="icon">
                  <i class="fas fa-pen-square"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $categoryCount }}</h3>

                  <p>Categorias</p>
                </div>
                <div class="icon">
                  <i class="fas fa-tags"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{$tagCount}}</h3>

                  <p>Etiqutas</p>
                </div>
                <div class="icon">
                  <i class="fas fa-tag"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$userCount}}</h3>

                  <p>Usuarios</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user"></i>
                  </div>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header">
                          <div class="d-flex justify-content-between align-items-center">
                              <h3 class="card-title">Lista de Publicaciones</h3>
                              <a href="{{ route('post.index') }}" class="btn btn-primary">Publicaciones</a>
                          </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="p-0 card-body">
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th style="width: 10px">#</th>
                                      <th>Imagen</th>
                                      <th>Titulo</th>
                                      <th>Categoria</th>
                                      <th>Etiquetas</th>
                                      <th>Autor</th>
                                      <th>Fecha de Publicación</th>
                                      <th style="width: 40px">Acciónes</th>
                                  </tr>
                              </thead>
                              <tbody>

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
                                          <td>{{ $post->created_at->format('d M, Y') }}</td>
                                          <td class="d-flex">
                                              <a href="{{ route('post.show', [$post->id]) }}" class="mr-1 btn btn-sm btn-success"> <i class="fas fa-eye"></i> </a>
                                              <a href="{{ route('post.edit', [$post->id]) }}" class="mr-1 btn btn-sm btn-primary"> <i class="fas fa-edit"></i> </a>
                                              <form action="{{ route('post.destroy', [$post->id]) }}" class="mr-1" method="POST">
                                                  @method('DELETE')
                                                  @csrf
                                                  <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                              </form>
                                          </td>
                                      </tr>
                                  @endforeach

                              </tbody>
                          </table>
                      </div>
                      <!-- /.card-body -->
                  </div>
              </div>
          </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
@endsection
