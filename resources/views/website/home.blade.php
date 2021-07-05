@extends('layouts.front-end')

@section('title', 'Posts')




@section('content')
        <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large">Nahu Coodes.</h1>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->
    <br>
    <!-- Page content-->
    <div class="container">
        <div class="row">

            @foreach ($firstPosts2 as $post)
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="shadow h-100">
                            <div class="shadow card h-100">
                                <div class="shadow card h-100">
                                    <img src="{{ $post->image }}" class="card-img-top" width="480"
                                        alt="Curso intensivo de Laravel y Android">

                                    <div class="card-body">
                                        <h1 class="h4 text-dark">
                                            <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="text-secondary text-decoration-none">{{ $post->title }}</a>
                                        </h1>
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
                </div>
            @endforeach
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Categories widget-->
                <div class="mb-4 card">
                    <div class="text-center alert alert-primary" role="alert">
                        <strong class="text-uppercase">Categorías</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                @foreach ($categories as $category)
                                    <a href="{{ route('website.category', ['slug' => $category->slug]) }}">
                                        <span class="badge badge-success text-uppercase">
                                            <br>
                                            {{ $category->name }}
                                        </span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <br>
    <div class="text-center alert alert-primary" role="alert">
        <h1 class="mb-0 text-center h2 text-secondary text-uppercase">ÚLTIMOS artículos</h1>
    </div>
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
                                    <h1 class="h4 text-dark">

                                        <span class="text-secondary text-decoration-none" text-uppercase">{{ $post->title }}.</span>

                                    </h1>
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
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{ $recentPosts->links() }}
            </ul>
        </nav>
    </div>
@endsection
