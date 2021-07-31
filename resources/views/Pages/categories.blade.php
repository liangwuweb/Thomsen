@extends('main')
@section('title', 'Category')

@section('content')
    @include('partials._banner', ['title' => 'Main Categories', 'image' => '/images/fittings.jpg'])
    <div class="container category my-6">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
            @foreach ($parentCategories as $category)
                {{-- <div class="col-md-4">
                    <a href="{{ url('subcategory/' . $category->id) }}">{{ $category->name }}</a>
                    <img class="img-fluid" src="{{ asset($category->image) }}" alt="">
                </div> --}}

                <div class="col">
                    <a href="{{ url('subcategory/' . $category->id) }}" class="card h-100">
                        <div class="image-wrap">
                            <img src="{{ asset($category->image) }}" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">{{ $category->name }}</h5>
                        </div>
                    </a>
                </div>

                {{-- @if (count($category->subcategory)) 
                    @include('Pages.subCategoryList', ['subcategories' => $category->subcategory])
                  @endif --}}
            @endforeach
        </div>
    </div>

@endsection
