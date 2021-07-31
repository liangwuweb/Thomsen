@extends('main')
@section('title', 'About')
@section('content')
    @include('partials._banner',['title' => 'About Thomsen', 'image' => '/images/fittings.jpg'])
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>About</h1>
                <p style="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime dolor fugit dolorum non
                    praesentium voluptatem ducimus id nobis recusandae nemo, minima enim ea quas sunt magni corrupti error!
                    Nesciunt, vero.</p>

            </div>
        </div>
    </div>

@endsection
