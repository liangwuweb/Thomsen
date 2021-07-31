@extends('main')

@section('title', 'Create New Post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
    {{-- <link type="text/css" rel="stylesheet" href="css/parsley.css"> --}}
@endsection

@section('content')

    <div class="row" style="margin-bottom: 50px; margin-top: 50px;">
        <div class="col-md-8 offset-md-2">
            <h1>Contact Us</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
            {!! Form::label('title', 'Title') !!}

            {!! Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) !!}

            {!! Form::label('body', 'Content') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) !!}
            {!! Form::submit('Submit', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 2rem']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection

@endsection
