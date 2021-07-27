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
                        <img src="{{ asset('front-end/assets/img/logo/category.png') }}"
                            class="rounded-circle"
                        alt="Cinque Terre" width="80" height="70">
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

    <!-- About-->
    <div id="about" class="basic-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-container first">
                        <h2>Hi there I'm Mark,</h2>
                        <p>And I love to create beautiful and efficient websites for my customers. I love going through the entire process with the customer from concept, to design and then development and launch</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container second">
                        <div class="time">2019 - PRESENT</div>
                        <h6>Freelance Web Developer</h6>
                        <p>Working happily on my own web projects</p>
                        <div class="time">2018 - 2019</div>
                        <h6>Lead Web Developer</h6>
                        <p>Beautiful project for a major digital agency</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container third">
                        <div class="time">2017 - 2018</div>
                        <h6>Senior Web Designer</h6>
                        <p>Inhouse web designer for ecommerce firm</p>
                        <div class="time">2016 - 2017</div>
                        <h6>Junior Web Designer</h6>
                        <p>Junior web designer for small web agency</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of about -->


    <!-- Services -->
    <div id="services" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Offered services</h2>
                    <p class="p-heading">Web design and development have been my bread and butter for more than 5 years. During that time I've discovered that I can help startups and companies with the following services</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="far fa-gem"></i>
                        <h4>DESIGN</h4>
                        <p>Successful online projects start with good design. It establishes a solid foundation for future development and allows for long term growth</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas fa-code"></i>
                        <h4>DEVELOPMENT</h4>
                        <p>I can code my own designs or even use the customer's design as base. My focus is to generate clean code that's well structured for reliability</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas fa-tv"></i>
                        <h4>BASIC SEO</h4>
                        <p>i can setup your project to use basic SEO principles which will push your project to the first page on search engines and save you ads money</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of services -->

    <!-- Details -->
	<div class="split">
		<div class="area-1">
		</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Text Container -->
                        <div class="text-container">
                            <h2>Why Work With Me</h2>
                            <p>I am a great communicator and love to invest the necessary time to understand the customer's problem very well</p>
                            <h5>DESIGN TOOLS</h5>
                            <p>My favorite design tools are Photoshop and Illustrator but I can create designs in Figma, Sketch and Adobe XD too</p>
                            <h5>DEVELOPMENT SKILLS</h5>
                            <p>I am familiar and work on a daily basis with HTML, CSS, JavaScript, Bootstrap and other modern frameworks</p>

                            <div class="icons-container">
                                <img src="images/details-icon-photoshop.png" alt="alternative">
                                <img src="images/details-icon-illustrator.png" alt="alternative">
                                <img src="images/details-icon-html.png" alt="alternative">
                                <img src="images/details-icon-css.png" alt="alternative">
                                <img src="images/details-icon-bootstrap.png" alt="alternative">
                                <img src="images/details-icon-javascript.png" alt="alternative">
                            </div> <!-- end of icons-container -->
                        </div> <!-- end of text-container -->
                        <!-- end of text container -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
		</div> <!-- end of area-2 -->
    </div> <!-- end of split -->
    <!-- end of details -->
@endsection
