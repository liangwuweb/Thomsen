@extends('main')
@section('title', 'About')
@section('content')
    @include('partials._banner',['title' => 'About Thomsen', 'image' => '/images/fittings.jpg'])
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="font-weight-bold mt-3">About</h1>
                <p style="">For 90 years, L. C. Thomsen has been
supplying high quality products to the
dairy, food and beverage industry. When
you think of THOMSEN®, three words
come to mind: excellence, quality
and teamwork.</p>

                <p>Excellence and quality are best achieved
through teamwork and a shared vision.
At THOMSEN® we strive to:</p>

                <ul>
                    <li>Manufacture the finest quality sanitary equipment in the marketplace.</li>
                    <li>Deliver on time.</li>
                    <li>Concentrate on customer care.</li>
                    <li>Provide the lowest cost possible.</li>
                </ul>

            </div>
        </div>
    </div>

@endsection
