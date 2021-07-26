@extends('layouts.front-end')

@section('title', 'About')

@section('content')
    <div class="jumbotron big-banner mb-0 jumbotron-fluid" style="height: 500px; padding-top: 150px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="col-md-4 text-light">
                        <div class="text-container">
                            <h1 class="mt-5 text-white">Acerca de mi y el Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            {{ asset('website/images/user.png') }} @endif" class="rounded-circle"
                            alt="Cinque Terre" width="50" height="40">
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
                <div class="col-lg-3">
                    <div>
                        <span style="margin-top: 8px; margin-left:7px; color: black; font-size:20px">
                            <span class="text-danger">{</span><span class="text-uppercase"> nahu
                            </span><span class="text-danger">}</span>
                        </span>
                        <sup class="slogan text-danger font-weight-lighter">Coodes</sup>
                        <br>
                        <span>¿Qué es Nahu Coodes?
                            <br>
                            Nahu Coodes es un blog
                            para promover el conocimiento informático,
                            compartir tips, noticias y articulos relacionados al mundo de la informatica
                            desarrollo web y demas..

                        </span>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of about -->
@endsection
