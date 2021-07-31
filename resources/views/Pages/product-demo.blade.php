@extends('main')
@section('title', 'Product')

@section('content')

    <main class="product container">
        {{-- {!! $test->content !!} --}}
        <div class="section-1">
            <div class="title">
                <h1 class="uppercase font-bold text-white">product name here</h1>
            </div>
            <div class="row d-flex">
                <div class="content text-primary">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus nisi et risus auctor
                        malesuada.
                        Quisque egestas ac mauris id pulvinar. Nunc at iaculis quam. Orci varius natoque penatibus et magnis
                        dis
                        parturient montes, nascetur ridiculus mus. Sed et massa iaculis, interdum metus vel, pretium est.
                    </p>
                    <ul>
                        <li>360 rotation</li>
                        <li>Sanitary 316 Design</li>
                        <li>CIP - Clean In Place</li>
                        <li>Low & High Pressure</li>
                        <li>Clamp, Weld & many other connections avail</li>
                        <li>Seals available in Buna, Vision, EPDM & Silicone</li>
                        <li>32Ra Surface Finish (other finishes available)</li>
                        <li>Temp Range to 360F</li>
                    </ul>
                </div>
                <div class="image-wrap">
                    <img src="images/pump.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="section-2 container">

            <input class="toggle" id="tabOne" name="tabs" type="radio" checked />
            <label id="labelOne" for="tabOne" class="tab text-gray"><span>Tab One Title Here</span></label>

            <input class="toggle" id="tabTwo" name="tabs" type="radio" />
            <label id="labelTwo" for="tabTwo" class="tab text-gray"><span>Longer Tab Two Title Here</span></label>

            <input class="toggle" id="tabThree" name="tabs" type="radio" />
            <label id="labelThree" for="tabThree" class="tab text-gray"><span>Tab Three Title Here</span></label>

            <div class="dropdown-wrap">
                <div id="dataOne" class="data-group">
                    <div class="info text-primary">
                        <h2 class="font-bold uppercase">Product One</h2>
                        <h3 class="font-bold uppercase">Subheading / Text about part here</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus nisi et risus auctor
                            malesuada. Quisque egestas ac mauris id pulvinar. Nunc at iaculis quam. Orci varius natoque
                            penatibus et
                            magnis dis parturient montes, nascetur ridiculus mus. Sed et massa iaculis, interdum metus vel,
                            pretium
                            est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus nisi et risus
                            auctor
                            malesuada. Quisque egestas ac mauris id pulvinar. Nunc at iaculis quam. Orci varius natoque
                            penatibus et
                            magnis dis parturient montes, nascetur ridiculus mus. Sed et massa iaculis, interdum metus vel,
                            pretium
                            est.</p>
                        <h3 class="font-bold uppercase">Subheading / Text about part here</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus nisi et risus auctor
                            malesuada. Quisque egestas ac mauris id pulvinar. Nunc at iaculis quam. Orci varius natoque
                            penatibus et
                            magnis dis parturient montes, nascetur ridiculus mus. Sed et massa iaculis, interdum metus vel,
                            pretium
                            est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus nisi et risus
                            auctor
                            malesuada. Quisque egestas ac mauris id pulvinar.</p>
                    </div>

                    <div class="table-wrap">
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
                                    <td>{{ $product->part }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->style }}</td>
                                    <th>{{ $product->series }}</th>
                                    <td>{{ $product->length }}</td>
                                    <td>{{ $product->size }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td>{{ $product->style2 }}</td>
                                    <td>{{ $product->col9 }}</td>
                                    <td>{{ $product->col10 }}</td>
                                    <td>{{ $product->col11 }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="dataTwo" class="data-group">
                    <div class="info text-primary">
                        <h2 class="font-bold uppercase">Product Two</h2>
                        <h3 class="font-bold uppercase">Subheading / Text about part here</h3>
                        <p>Nam ligula orci, pulvinar a neque id, dignissim accumsan libero. Sed ultricies volutpat mauris.
                            Nunc
                            pellentesque erat lorem, sit amet finibus risus cursus vel. Aenean lacinia velit in lorem
                            facilisis, id
                            facilisis ligula ultrices. Vivamus neque turpis, posuere ac tortor sed, semper consequat mi.
                            Quisque eget
                            finibus lacus. Morbi luctus feugiat lectus in pulvinar. Integer gravida laoreet mi, in posuere
                            lectus
                            blandit sit amet. Curabitur congue pharetra nisl et ultricies. Duis posuere massa dui, vel
                            dictum tellus
                            hendrerit vel. Duis sagittis dui quam, nec volutpat lacus pretium a. Aliquam convallis velit
                            enim, in
                            ultricies nisl placerat in. Phasellus quam metus, pellentesque eget elit at, fringilla aliquam
                            neque.
                            Curabitur nec odio lobortis, commodo nisi a, egestas nunc. Praesent sollicitudin urna eu
                            fermentum
                            euismod.</p>
                    </div>

                    <div class="table-wrap">
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
                                @foreach ($posts as $post)
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="dataThree" class="data-group">
                    <div class="info text-primary">
                        <h2 class="font-bold uppercase">Product Image</h2>
                        <h3 class="font-bold uppercase">Subheading / Text about part here</h3>
                        <div class="image-wrap d-flex align-items-start">
                            <img src="images/pump2.jpg" alt="">
                            <img src="images/pump3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
