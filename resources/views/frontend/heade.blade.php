<!-- Menú de navegación -->
<div class="container-fluid bg-inverse fixed-top">
    <nav class="container navbar navbar-toggleable-sm navbar-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ route('website') }}">
            <img src="{{ asset('front-end/assets/img/logo/brand.png') }}" width="30" height="30"
                class="align-top d-inline-block" alt="">
                <span class="text-uppercase">NahuCodes</span>
        </a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">


        </div>
        <div class="text-right col-12 col-md-4">
            <div class="container-fluid">
                <form action="#">
                    <div class="input-group" data-children-count="1">
                        <input name="search" type="text" class="form-control ui-autocomplete-input" id="search"
                            placeholder="Bucar un artículo" aria-label="" aria-describedby="basic-addon1"
                            autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="button">Buscar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </nav>
</div>
<!-- Fin Menú de navegación -->
