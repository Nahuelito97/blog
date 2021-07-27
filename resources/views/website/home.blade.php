@extends('layouts.front-end')

@section('title', 'Posts')


@section('content')
    <div class="jumbotron big-banner mb-0 jumbotron-fluid" style="height: 500px; padding-top: 150px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="col-md-4 text-light">
                        <div class="text-container">
                            <h1 class="mt-5 text-white">Artículos y consejos prácticos sobre Programación</h1>
                        </div>
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
                <span class="text-white  text-center"></span> { <span class="slogan text-danger"
                    style="font-size: 38px">Ultimos Artículos</span> } <span class="text-white"></span>
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
                                <img src="{{ asset('front-end/assets/img/logo/webdev.png') }}"
                                class="rounded-circle"
                            alt="Cinque Terre" width="40" height="30">
                                <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="text-danger">
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

        </div>
    </div>
    <div class="container-fluid p-0" style="background: black">
        <div class="container pt-5 pb-5">
            <div class="row align-items-center justify-content-center mt- mb-5">
                <div class="col-sm-12 m-4">
                    <h2 class="text-center text-danger font-weight-bolder">{ Categorías }</h2>
                </div>

                <div class="col-sm-4 col-6 mb-4">
                    @foreach ($categories as $category)

                        <a class="btn btn-outline-danger btn-block rounded-pill"
                            href="{{ route('website.category', ['slug' => $category->slug]) }}"
                            title="{{ $category->slug }}">
                            {{ $category->name }}
                        </a>

                    @endforeach
                </div>
            </div>
        </div>
    </div>



    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <h2 class="text-center text-danger font-weight-bolder">{ Todas las Publicaciones }   <img src="{{ asset('front-end/assets/img/logo/webdev.png') }}"
                class="rounded-circle"
            alt="Cinque Terre" width="40" height="30"></h2>

            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        @foreach ($recentPosts as $post)

                            <div class="col-lg-4 col-sm-4">
                                <div class="mb-2">
                                    <div class="text-center card">
                                        <div class="shadow h-100">

                                            <div class="blog-item">
                                                <div class="bi-pic">
                                                    <span class="badge  badge-warning w-50 mt-2"
                                                        style="position: absolute; z-index: 3">
                                                        {{ $post->category->name }}
                                                    </span>
                                                    <a href="{{ route('website.post', ['slug' => $post->slug]) }}"
                                                        class="rb-item">
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
                                                    {{ asset('front-end/assets/img/logo/user03.png') }} @endif"
                                                    class="rounded-circle" alt="Cinque Terre" width="40" height="30">
                                                    |
                                                    {{ $post->user->name }} -
                                                    {{ $post->created_at->format('M d, Y') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                    <br>
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
