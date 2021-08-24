@extends('main')
@section('title', 'Product')

@section('content')
<main role="main">
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide mb-7" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="trans-layer"></div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/fittings.jpg') }}" class="d-block w-100" alt="one">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/pump.jpg') }}" class="d-block w-100" alt="two">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/filter-option3.jpg') }}" class="d-block w-100" alt="three">
            </div>
        </div>
        <div class="hero-wrap d-flex justify-content-center text-light">
            <div class="d-flex flex-column justify-content-center hero-container">
                <h1 class="text-center font-weight-bold">THOMSEN GROUP</h1>
                <p class="lead text-center">
                    proidentsunt in culpa qui officia deserunt
                </p>
                <a class="btn btn-lg btn-red mx-auto mt-4" href="#" role="button">LEARN
                    MORE</a>
            </div>
        </div>
    </div><!-- Carousel Ends-->
</main>
@endsection

@section('scripts')
    <script>
        $('.carousel').carousel({
            interval: 5000,
            pause: false
        });
    </script>
@endsection

