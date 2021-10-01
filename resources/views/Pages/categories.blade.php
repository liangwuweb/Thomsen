@extends('main')
@section('title', 'Category')

@section('content')
    @include('partials._banner', ['title' => 'Main Categories', 'image' => '/images/fittings.jpg'])

    <div class="container category my-6">
        {{ Breadcrumbs::render('category') }}
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
            @foreach ($parentCategories as $category)
                {{-- <div class="col-md-4">
                    <a href="{{ url('subcategory/' . $category->id) }}">{{ $category->name }}</a>
                    <img class="img-fluid" src="{{ asset($category->image) }}" alt="">
                </div> --}}

                <div class="col mb-4">
                    <a href="{{ url('subcategory/' . $category->id) }}" class="card h-100">
                        <div class="image-wrap">
                            <img src="{{ asset($category->image) }}" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-capitalize font-weight-bold">{{ $category->name }}</h5>
                        </div>
                    </a>
                </div>

                {{-- @if (count($category->subcategory)) 
                    @include('Pages.subCategoryList', ['subcategories' => $category->subcategory])
                  @endif --}}
            @endforeach

            <div class="col mb-4">
                <a href="#" class="card h-100 bg-primary category-item">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <h5 class="card-title text-capitalize text-light font-weight-bold">Product Recovery</h5>
                    </div>
                </a>
            </div>
        </div>

        <h2 class="font-weight-bold text-capitalize my-5">Specialty Products</h2>
        <div class="row row-cols-2 row-cols-3 row-cols-lg-4 specialty-product">
            <div class="col mb-4">
                <a href="#" class="card h-100">
                    <div class="image-wrap">
                        <img src="{{ asset('images/Rectangle.svg') }}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-capitalize font-weight-bold">Sight Glass</h5>
                    </div>
                </a>
            </div>

            <div class="col mb-4">
                <a href="#" class="card h-100">
                    <div class="image-wrap">
                        <img src="{{ asset('images/Rectangle.svg') }}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-capitalize font-weight-bold">hose hooks</h5>
                    </div>
                </a>
            </div>

            <div class="col mb-4">
                <a href="#" class="card h-100">
                    <div class="image-wrap">
                        <img src="{{ asset('images/Rectangle.svg') }}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-capitalize font-weight-bold">tube hanger</h5>
                    </div>
                </a>
            </div>

            <div class="col mb-4">
                <a href="#" class="card h-100">
                    <div class="image-wrap">
                        <img src="{{ asset('images/Rectangle.svg') }}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-capitalize font-weight-bold">aluminum wrench</h5>
                    </div>
                </a>
            </div>

            <div class="col mb-4">
                <a href="#" class="card h-100 disabled">
                    <div class="image-wrap">
                        <img src="{{ asset('images/Rectangle.svg') }}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-capitalize font-weight-bold">dipper</h5>
                    </div>
                </a>
            </div>

        </div>
    </div>

@endsection
