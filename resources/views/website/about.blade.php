@extends('layouts.front-end')

@section('title', 'About')

@section('content')
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                          <h1 class="mb-0 text-center h2 text-secondary text-uppercase">sobre mi</h1>                        
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <br>
    
        <!-- About-->
    <div id="about" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-container first">
                        <div class="text-center alert alert-primary" role="alert">
                            <h1 class="mb-0 text-center h2 text-secondary text-uppercase">{{ $user->name }}.</h1>                        
                        </div>
                       
                        <div class="col-3">
                            <img src="@if ($user->image) {{ $user->image }} @else
                            {{ asset('website/images/user.png') }} @endif" class="rounded-circle" alt="Cinque Terre" width="50" height="40">
                          </div>
                        <p>{{ $user->description }}
                        </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container second">
                        <div class="time">2021 - PRESENTE</div>
                        <h6>Freelance Web Developer</h6>
                        <p>Trabajando en mi Portafolio y una Tienda en Linea</p>                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
              
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of about -->
@endsection
