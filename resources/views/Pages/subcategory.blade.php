@extends('main')
@section('title', 'Subcategory')

@section('content')

    <div class="container category my-6">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 mx-n4">

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


        <div class="row mt-5">   
            
            <hr class="w-100 mb-5"/>
            {{-- <p><span class="text-uppercase font-weight-bold">THOMSEN GROUP LLC. Sanitary Process Pumps</span> have 60 years of dependable performence and experience. Thomsen pumps are a workhorse of the sanitary pump industry and 3A certified offering reliable operation and flow capabilities this pump is easy to use provides maximun up time.</p>
            <ul class="text-uppercase list-group list-group-flush">
                <li class="list-group-item">volute - impeller - back plate all 316 stainless</li>
                <li class="list-group-item">stainless motor adapter</li>
                <li class="list-group-item">long life durable seals</li>
                <li class="list-group-item">several elastomer choices</li>
            </ul> --}}
            {{-- {!! $category->description !!} --}}

        </div>
    </div>

@endsection
