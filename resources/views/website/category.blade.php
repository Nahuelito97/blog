@extends('layouts.front-end')

@section('title', 'Categorías')

@section('content')
    <div class="text-white container-fluid slider d-flex flex-column justify-content-center align-items-center">
        <div class="py-5 col-12 col-md-10 col-lg-8">
            <div class="text-center">
                <strong>
                    <h1 class=" text-md-center h2">Bienvenido a NahuCoodes, mi sitio personal en el que podras encontrar
                        información sobre ciencia y tecnologia.</h1>
                    <img src="{{ asset('front-end/assets/img/logo/brand.png') }}" class="rounded-circle"
                        alt="Cinque Terre" width="50" height="40">
                    <span class="badge badge-danger text-uppercase">NahuCoodes</span>
                </strong>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-0 text-center h2 text-secondary text-uppercase">categoría</h1>
                    <br>
                    <div class="text-center alert alert-primary" role="alert">
                        <strong class="text-uppercase">{{ $category->name }}</strong>
                    </div>
                    @if ($category->description)
                        <p>{{ $category->description }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-3">
                    <div class="card h-100">
                        <div class="shadow h-100">
                            <div class="shadow card h-100">
                                <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="{{ $post->image }}" alt="" class="rounded img-fluid">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <span class="badge badge-primary text-uppercase">{{ $post->title }}.</span>
                                    <img src="@if ($post->user->image) {{ $post->user->image }}
                                @else
                                    {{ asset('website/images/user.png') }} @endif"
                                    class="rounded-circle" alt="Cinque Terre" width="50" height="40">
                                    <span class="badge badge-warning text-uppercase">By
                                        {{ $post->user->name }}</span>
                                </div>
                                <div class="card-footer text-muted">
                                    <a href="{{ route('website.post', ['slug' => $post->slug]) }}"
                                        class="btn btn-outline-success">Leer
                                        Más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
    </div>

@endsection
