@extends('layouts.front-end')

@section('title', 'Detalles')

@section('content')
    <div class="jumbotron big-banner mb-0 jumbotron-fluid" style="height: 500px; padding-top: 150px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="col-md-4 text-light">
                        <div class="text-container">
                            <h1 class="mt-5 text-white">Detalles del Post</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Fin Sección Slider -->
    <!-- Main -->
    <div class="container">

        <div class="row">

            <!-- Sección detalles de un post -->
            <div class="mb-5 col-12 col-lg-9">
                <div class="shadow h-100">
                    <div class="card-header">
                        <h1 class="tdb-title-text">{{ $post->title }}</h1>
                        <strong class="text-uppercase"></strong>
                        <br>
                        <span class="badge badge-danger text-uppercase">Categorias: </span>
                        <span class="badge badge-success text-uppercase">{{ $post->category->name }}
                        </span>
                        @if ($post->tags()->count() > 0)
                            <span class="badge badge-danger text-uppercase">Tags: </span>
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('website.tag', ['slug' => $tag->slug]) }}"> <span
                                        class="badge badge-warning text-uppercase">#{{ $tag->name }}</span></a>
                            @endforeach
                        @endif
                        <br>
                    </div>

                    <img src="{{ $post->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="badge badge-primary text-uppercase">{{ $post->created_at->format('M d, Y') }}</span>
                        <div class="blog-quote" <p class="card-text">{{ $post->description }}</p>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <!-- Preguntas y dudas -->
                        <div class="mb-2">
                            <div class="card">
                                <div class="shadow h-100">
                                    <div class="container">
                                        <br>
                                        <img src="{{ asset('front-end/assets/img/logo/brand.png') }}"
                                            class="rounded-circle" alt="Cinque Terre" width="50" height="40">
                                        <span>
                                            ¿Tienes alguna duda?
                                            Si algo no te quedó claro o tienes alguna sugerencia, escribe un comentario aquí
                                            debajo🙂!.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin dudas -->
                        <!-- Comentarios -->
                        <div class="mb-2">
                            <div class="text-center card">
                                <div class="shadow h-100">
                                    <div class="container">
                                        <br>
                                        <h3>Comentarios</h3>
                                        <div id="disqus_thread"></div>
                                        <script>
                                            /**
                                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                            /*
                                            var disqus_config = function () {
                                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                            };
                                            */
                                            (function() { // DON'T EDIT BELOW THIS LINE
                                                var d = document,
                                                    s = d.createElement('script');
                                                s.src = 'https://nahucoodes.disqus.com/embed.js';
                                                s.setAttribute('data-timestamp', +new Date());
                                                (d.head || d.body).appendChild(s);
                                            })();
                                        </script>
                                        <noscript>Please enable JavaScript to view the <a
                                                href="https://disqus.com/?ref_noscript">comments
                                                powered by Disqus.</a></noscript>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin dudas -->

                    </div>

                </div>

            </div>

            <!-- Aside -->
            <div class="col-12 col-md-3">
                <!-- Cards -->

                <div class="mb-2">
                    <div class="text-center card">
                        <div class="shadow h-100">
                            <div class="text-center alert alert-primary" role="alert">
                                <strong class="text-uppercase">sobre mi </strong>
                            </div>
                            <div class="card-block">
                                <blockquote class="card-blockquote">

                                    <div class="sidebar-box">
                                        <div class="text-center bio">

                                        <img src="@if ($post->user->image) {{ $post->user->image }} @else
                                            {{ asset('website/images/user.png') }} @endif"
                                            class="rounded-circle" alt="Cinque Terre" width="100" height="100">
                                            <div class="bio-body">
                                                <br>
                                                <strong class="text-uppercase">{{ $post->user->name }}</strong>
                                                <p class="mb-4">{{ $post->user->description }}</p>
                                            </div>
                                        </div>
                                    </div>

                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fin Cards -->
                <div class="mb-2">
                    <div class="text-center card">
                        <div class="shadow h-100">
                            <div class="text-center alert alert-primary" role="alert">
                                <strong class="text-uppercase">Publicaciones populares </strong>
                            </div>
                            @foreach ($lastRelatedPost as $post)
                                <div class="card-body">
                                    <div class="card">
                                        <img src="{{ $post->image }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <span class="badge badge-success text-uppercase">{{ $post->category->name }}
                                            </span>
                                            <span class="badge badge-success text-uppercase">
                                                {{ Str::limit($post->title, 10) }}.. </span>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <a href="{{ route('website.post', ['slug' => $post->slug]) }}"
                                            class="btn btn-outline-success">Leer
                                            Más</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Aside -->
        </div>
    </div>
    <!-- Fin Main -->

@endsection

@section('script')
    <script>
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
                s = d.createElement('script');
            s.src = 'https://laravel-blog-tutorial-series.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <script id="dsq-count-scr" src="//laravel-blog-tutorial-series.disqus.com/count.js" async></script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
            Disqus.</a></noscript>
@endsection
