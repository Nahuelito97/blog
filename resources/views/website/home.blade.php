@extends('layouts.front-end')

@section('title', 'Posts')




@section('content')
    <!-- Sección Slider -->
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
    <!-- Fin Sección Slider -->
    <br>
    <!-- Main -->
    <div class="container">
        <h1 class="mb-0 text-center h2 text-secondary text-uppercase">publicaciones recientes</h1>
        <br>
        <div class="row">
            @foreach ($firstPosts2 as $post)
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="shadow h-100">
                            <div class="shadow card h-100">
                                <img src="{{ $post->image }}" class="card-img-top" width="480"
                                alt="Curso intensivo de Laravel y Android">

                            <div class="card-body">
                                <span class="badge badge-primary text-uppercase">{{ $post->title }}.</span>
                                <span class="badge badge-danger text-uppercase">{{ $post->category->name }}
                                </span>

                                <p class="card-text">{{ $post->created_at->format('M d, Y') }}</p>
                                <a href="{{ route('website.post', ['slug' => $post->slug]) }}"
                                    class="btn btn-outline-info">Leer más...</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Aside -->
            <div class="col-12 col-md-3">
                <div class="mb-2" style="text-align:left">
                    <div class="text-center alert alert-primary" role="alert">
                        <strong class="text-uppercase">Categorías y tags </strong>
                    </div>
                    <div class="text-center card">
                        <div class="card-block">
                            <blockquote class="card-blockquote">
                                @foreach ($categories as $category)
                                    <a href="{{ route('website.category', ['slug' => $category->slug]) }}">
                                        <span class="badge badge-success text-uppercase">
                                            <br>
                                            {{ $category->name }}
                                        </span>
                                    </a>
                                @endforeach
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Aside -->
        </div>
        <br>
    </div>
    <!-- Fin Main -->
    <h1 class="mb-0 text-center h2 text-secondary text-uppercase">ÚLTIMOS artículos</h1>
    <br>
    <div class="container">
        <div class="row">
            @foreach ($recentPosts as $post)
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
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{ $recentPosts->links() }}
            </ul>
        </nav>
    </div>
@endsection
