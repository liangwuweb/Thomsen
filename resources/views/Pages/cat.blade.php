@extends('main')
@section('title', 'Category')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>About</h1>
                <p style="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime dolor fugit dolorum non praesentium voluptatem ducimus id nobis recusandae nemo, minima enim ea quas sunt magni corrupti error! Nesciunt, vero.</p>
                <table class="table">
        <thead>
          <th>Part</th>
          <th>Description</th>
          <th>Style</th>
          <th>Series</th>
          <th>Length</th>
          <th>Size</th>
          <th>Category</th>
          <th>Style2</th>
          <th></th>
          <th></th>
          <th></th>
        </thead>
        <tbody>
            <tr>
              <td>{{ $post->part }}</td>
              <td>{{ $post->description }}</td>
              <td>{{ $post->style }}</td>
              <th>{{ $post->series }}</th>
              <td>{{ $post->length }}</td>
              <td>{{ $post->size }}</td>
              <td>{{ $post->category }}</td>
              <td>{{ $post->style2 }}</td>
              <td>{{ $post->col9 }}</td>
              <td>{{ $post->col10 }}</td>
              <td>{{ $post->col11 }}</td>
            </tr>
        </tbody>
      </table>
                
            </div>
        </div>
    </div>


@endsection
