@extends('main')
@section('title', 'Contact')
@section('content')
    @include('partials._banner', ['title' => 'Contact Us', 'image' => '/images/moutian.jpg'])
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="mt-3 font-weight-bold">Contact</h1>
            <hr>
            <!-- <form action="">
                <div class="form-group">
                    <label for="email" name="email">Email</label>
                    <input type="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="subject" name="subject">Subject</label>
                    <input type="text" id="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content" name="content">Content</label>
                    <textarea id="content" class="form-control">Your Message...</textarea>
                </div>

                <input type="submit" value="Send Message" class="btn btn-success">
            </form> -->
            <h2>Phone: 800-558-4018</h2>
            <h2>Fax: 262-652-3526</h2>
            <h2>Address:</h2>
            <p>1303 43rd street kenosha, WI 53140</p>
        </div>
    </div>
@endsection
