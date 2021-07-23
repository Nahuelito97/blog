@extends('layouts.front-end')

@section('title', 'Posts')


@section('content')
    <div class="jumbotron big-banner mb-0 jumbotron-fluid" style="height: 500px; padding-top: 150px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="col-md-4 text-light">
                        <div class="text-container">
                            <h1 class="mt-5 text-white">ARTÍCULOS Y CONSEJOS PRÁCTICOS DE PROGRAMACIÓN</h1>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form class="form-inline my-2 my-lg-0 text-rigth" action="{{ route('website') }}" method="GET">
                            <input class="form-control form-control-lg mr-sm-0 col-8
                                                                             border-right-0"
                                style="border-radius: 5px 0px 0px 5px; "
                                type="text"
                                name="search"
                                placeholder="BÚscar Publicaciones..">

                            <button class="btn btn-light btn-lg my-2 my-sm-0 col-2 border-left-0"
                                style="border-radius: 0px 5px 5px 0px;" type="submit"><i
                                    class="fas text-danger fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content-->
    <div class="container">
        <br>
        <h3>
            <small class="text-muted">
                <span class="text-white  text-center"></span> { <span
                class="slogan text-danger" style="font-size: 38px">Ultimos  Artículos</span> } <span
                class="text-white"></span>
            </small>
        </h3>
        <br>
        <div class="row">
            <!-- Sección de noticias -->
            <div class="col-12 col-lg-9 mb-5">
                <!-- Artículos -->
                @foreach ($firstPosts2 as $post)
                    <div class="row mb-5">
                        <div class="col-3">
                            <p class="lead text-muted text-center">{{ $post->created_at->format('M d, Y') }}</p>
                            <img class="img-fluid" src="{{ $post->image }}" alt="">
                        </div>
                        <div class="col-9">
                            <h5 class="h4">
                                < /><a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="text-danger">
                                    {{ $post->title }}
                                </a>
                            </h5>

                            <span class="badge badge-danger text-uppercase">{{ $post->category->name }}
                            </span>
                            <p>{{ Str::limit($post->description, 30) }}...</p>
                            <a href="{{ route('website.post', ['slug' => $post->slug]) }}"
                                class="btn btn-outline-warning btn-sm">Leer más...</a>
                        </div>
                    </div>
                @endforeach
                <!-- Fin Artículos -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                <div class="blog-sidebar">
                    <div class="blog-catagory">

                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Categorías
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @foreach ($categories as $category)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('website.category', ['slug' => $category->slug]) }}">
                                            <span class="badge badge-success text-uppercase">
                                                {{ $category->name }}
                                            </span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <h2 class="text-center text-danger font-weight-bolder">{ Todas las Publicaciones }</h2>

            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($recentPosts as $post)

                            <div class="col-lg-4 col-sm-4">
                                <div class="blog-item">
                                    <div class="bi-pic">
                                        <span class="badge  badge-warning w-50 mt-2" style="position: absolute; z-index: 3">
                                            {{ $post->category->name }}
                                        </span>
                                        <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="rb-item">
                                            <div class="rb-pic">
                                                <img src="{{ $post->image }}" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="bi-text">
                                        <a href="{{ route('website.post', ['slug' => $post->slug]) }}"
                                            class="text-secondary text-decoration-none">
                                            <h6>{{ Str::limit($post->title, 30) }}.. </h6>
                                        </a>
                                        <img src="@if ($post->user->image) {{ $post->user->image }}
                                    @else
                                        {{ asset('website/images/user.png') }} @endif"
                                        class="rounded-circle" alt="Cinque Terre" width="50" height="40">
                                        {{ $post->user->name }} - {{ $post->created_at->format('M d, Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                {{ $recentPosts->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
@endsection
