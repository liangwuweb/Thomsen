@extends('main')
@section('title', 'Subcategory')

@section('content')

    <div class="container category my-6">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">

            @foreach ($subcategories as $subcategory)
                {{-- <a href="{{ url('subcategory/' . $subcategory->id) }}">{{ $subcategory->name }}</a> --}}
                {{-- <a
                    href="{{ count($subcategory->subcategory) ? url('subcategory/' . $subcategory->id) : url('product/' . $subcategory->id) }}">{{ $subcategory->name }}</a> --}}


                <div class="col">
                    <a href="{{ count($subcategory->subcategory) ? url('subcategory/' . $subcategory->id) : url('product/' . $subcategory->id) }}"
                        class="card h-100">
                        <div class="image-wrap">
                            <img src="{{ asset($subcategory->image) }}" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">{{ $subcategory->name }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
