  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

        <a class="navbar-brand" href="{{ route('website') }}">
            <img src="{{ asset('front-end/assets/img/logo/brand.png') }}" width="30" height="30"
                class="align-top d-inline-block" alt="">            
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
                <a class="nav-link active" aria-current="page" target="_blank"
                    href="{{ route('website.about') }}">About</a>
            </ul>
        </div>
    </div>
</nav>
