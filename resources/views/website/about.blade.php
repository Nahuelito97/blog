@extends('layouts.front-end')

@section('title', 'About')

@section('content')

    <div class="text-white container-fluid slider d-flex flex-column justify-content-center align-items-center">
        <div class="py-5 col-12 col-md-10 col-lg-8">
            <div class="text-center">
                <strong>
                    <h1 class=" text-md-center h2">Bienvenido a NahuCoodes.</h1>
                </strong>
            </div>
        </div>
    </div>
    <div class="container">
          <div class="row">
            <!-- Sección de noticias -->
            <div class="mb-5 col-12 col-lg-9">

              <div class="mb-5 row">
                <div class="col-3">
                  <img class="img-fluid" src="@if ($user->image) {{ $user->image }} @else
                  {{ asset('website/images/user.png') }} @endif" alt="">
                </div>
                <div class="col-9">
                    <div class="text-center alert alert-primary" role="alert">
                        <h1 class="mb-0 text-center h2 text-secondary text-uppercase">sobre mi</h1>
                    </div>
                    <h3 class="text-center text-uppercase">{{ $user->name }}.</h3>
                    <div class="blog-quote" <p class="card-text">{{ $user->description }}</p>
                    </div>
                </div>

              </div>
            </div>
          </div>
      </div>
    </div>

@endsection
