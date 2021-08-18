@extends('main')
@section('title', 'Product')

@section('content')
    {{-- <h1>{!! $product->part->content !!}</h1> --}}
    <div class="container my-6">
        <div class="row">
            <div class="col-md-12">
                <h1 class="font-weight-bold text-capitalize text-danger">{{ $product->description()->first()->title }}</h1>
            </div>
            <div class="col-md-7">
                {!! $product->description()->first()->content !!}
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="{{ asset($product->description()->first()->image) }}" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-6">
                <div class="tab-group">
                    @if(!is_null($product->part))
                        <input class="toggle" id="tabOne" name="tabs" data-label="labelOne" data-target="dataOne"
                            type="checkbox" />
                        <div onclick="changeTab(this)" id="labelOne" data-for="tabOne" class="tab text-light text-capitalize">
                            <span>parts</span>
                        </div>
                    @endif

                    @if(!is_null($product->seal_kit))
                        <input class="toggle" id="tabTwo" name="tabs" data-label="labelTwo" data-target="dataTwo"
                            type="checkbox" />
                        <div onclick="changeTab(this)" id="labelTwo" data-for="tabTwo" class="tab text-light text-capitalize">
                            <span>seal kit</span>
                        </div>
                    @endif

                    @if(!is_null($product->tech_info))
                        <input class="toggle" id="tabThree" name="tabs" data-label="labelThree" data-target="dataThree"
                            type="checkbox" />
                        <div onclick="changeTab(this)" id="labelThree" data-for="tabThree"
                            class="tab text-light text-capitalize"><span>Tech info</span></div>
                    @endif
                    
                    @if(!is_null($product->curve))
                        <input class="toggle" id="tabFour" name="tabs" data-label="labelFour" data-target="dataFour"
                            type="checkbox" />
                        <div onclick="changeTab(this)" id="labelFour" data-for="tabFour" class="tab text-light text-capitalize">
                            <span>Curves</span>
                        </div>
                    @endif

                    @if(!is_null($product->download))
                        <input class="toggle" id="tabFive" name="tabs" data-label="labelFive" data-target="dataFive"
                            type="checkbox" />
                        <div onclick="changeTab(this)" id="labelFive" data-for="tabFive" class="tab text-light text-capitalize">
                            <span>Downloads</span>
                        </div>
                    @endif
                    
                    @if($product->video->has_video === true)
                        <input class="toggle" id="tabSix" name="tabs" data-label="labelSix" data-target="dataSix"
                            type="checkbox" />
                        <div onclick="changeTab(this)" id="labelSix" data-for="tabSix" class="tab text-light text-capitalize">
                            <span>Video</span>
                        </div>
                    @endif

                    @if(!is_null($product->misc))
                        <input class="toggle" id="tabSeven" name="tabs" data-label="labelSeven" data-target="dataSeven"
                        type="checkbox" />
                        <div onclick="changeTab(this)" id="labelSeven" data-for="tabSeven" class="tab text-light text-capitalize">
                            <span>Misc</span>
                        </div>
                    @endif
                </div>

                <div class="dropdown-wrap">
                    @if(!is_null($product->part))
                        <div id="dataOne" class="data-group">
                            <div class="info text-black">
                                <h3 class="font-weight-bold text-capitalize">Part list title</h3>
                                {{-- <div class="row mb-4">
                                    <div class="col-md-8">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                            finibus nisi et
                                            risus
                                            auctor
                                            malesuada. Quisque egestas ac mauris id pulvinar. Nunc at iaculis quam. Orci varius
                                            natoque
                                            penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Sed et massa iaculis, interdum
                                            metus
                                            vel, pretium
                                            est.</p>
                                    </div>
                                </div>

                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col mb-3">
                                        <h4 class="text-capitalize">#4 part list</h4>
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

                                    <div class="col mb-3">
                                        <h4 class="text-capitalize">#5 part list</h4>
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
                                    <div class="col mb-3">
                                        <h4 class="text-capitalize">#6 part list</h4>
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

                                    <div class="col mb-3">
                                        <h4 class="text-capitalize">#8 part list</h4>
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
                                </div> --}}
                                {!! $product->getRelationValue('part')->content !!}
                                {!! $product->part()->first()->content !!}
                                {{-- {!! $product->part->getRelationValue('content') !!} --}}
                            </div>
                        </div>
                    @endif

                    @if(!is_null($product->seal_kit)) 
                        <div id="dataTwo" class="data-group">
                            <div class="info text-black">
                                <h3 class="font-weight-bold text-capitalize">Seal Kit title</h3>
                                {{-- <div class="row mb-4">
                                    <div class="col-md-8">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                            finibus nisi et
                                            risus
                                            auctor
                                            malesuada. Quisque egestas ac mauris id pulvinar. Nunc at iaculis quam. Orci varius
                                            natoque
                                            penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Sed et massa iaculis, interdum
                                            metus
                                            vel, pretium
                                            est.</p>
                                    </div>
                                </div>

                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col mb-3">
                                        <h4 class="text-capitalize">#4 Seal Kit</h4>
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

                                    <div class="col mb-3">
                                        <h4 class="text-capitalize">#5 Seal Kit</h4>
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
                                    <div class="col mb-3">
                                        <h4 class="text-capitalize">#6 Seal Kit</h4>
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

                                    <div class="col mb-3">
                                        <h4 class="text-capitalize">#8 Seal Kit</h4>
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
                                </div> --}}
                                    {!! $product->seal_kit->content !!}
                            </div>
                            <table class="table table-bordered table-dark table-hover mt-3">
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                                <thead>
                                    <tr>
                                        <th scope="col">XXXX</th>
                                        <th scope="col">XXXX</th>
                                        <th scope="col">XXXXXX</th>
                                        <th scope="col">XXXXX</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>XXXX</td>
                                        <td>1</td>
                                        <td>2 ft. 8 in.</td>
                                        <td>9710B-67</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>4 ft. 6 in.</td>
                                        <td>9710B-67</td>
                                        <td>9710B-67</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>6 ft. 1 in.</td>
                                        <td>9710B-67</td>
                                        <td>9710B-67</td>
                                    </tr>
                                    <tr>
                                        <td>60</td>
                                        <td>6 ft. 1 in.</td>
                                        <td>9710B-67</td>
                                        <td>9710B-67</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endif
                    
                    @if(!is_null($product->tech_info)) 
                        <div id="dataThree" class="data-group">
                            <h3 class="font-weight-bold text-capitalize mb-4">Exploded View</h3>
                            <div class="card-columns mb-6">
                                {{-- <div class="col mb-4 inline-block">
                                    <img class="img-fluid" src="/images/pump2.jpg" alt="">
                                </div>
                                <div class="col mb-4 inline-block">
                                    <img class="img-fluid" src="/images/fittings.jpg" alt="">
                                </div>
                                <div class="col mb-4 inline-block">
                                    <img class="img-fluid" src="/images/pump3.jpg" alt="">
                                </div>
                                <div class="col mb-4 inline-block">
                                    <img class="img-fluid" src="/images/series-200.jpg" alt="">
                                </div>
                                <div class="col mb-4 inline-block">
                                    <img class="img-fluid" src="/images/series-100.jpg" alt="">
                                </div>
                                <div class="col mb-4 inline-block">
                                    <img class="img-fluid" src="/images/pump2.jpg" alt="">
                                </div> --}}
                                
                                    {!! $product->tech_info->explode_view !!}
                            </div>

                            <h3 class="font-weight-bold text-capitalize">Seal Info</h3>
                            {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda necessitatibus
                                alias
                                voluptates corrupti asperiores quisquam molestiae fugiat, aliquid optio sit, aperiam harum,
                                delectus dolorum aspernatur esse eveniet fugit magni pariatur!</p> --}}
                            
                                {!! $product->tech_info->seal_info !!}

                            <h3 class="font-weight-bold text-capitalize">pump info</h3>
                                {!! $product->tech_info->pump_info !!}
                            
                            
                            <h3 class="font-weight-bold text-capitalize">material info</h3>
                                {!! $product->tech_info->material_info !!}
                        </div>
                    @endif

                    @if(!is_null($product->curve))
                        <div id="dataFour" class="data-group">
                            <h3 class="font-weight-bold text-capitalize mb-4 text">Curves</h3>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    {{-- <img class="img-fluid mb-2" src="/images/curve2.png" alt="">
                                    <img class="img-fluid" src="/images/curve1.png" alt=""> --}}
                                        {!! $product->curve->images !!}
                                </div>
                            </div>
                        </div>
                    @endif
                    
                    @if(!is_null($product->download))
                        <div id="dataFive" class="data-group">
                            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
                                {{-- <a href="#" class="col mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-file-earmark" viewBox="0 0 16 16">
                                        <path
                                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                    </svg>
                                    <span class="align-middle">Document one</span>
                                </a>

                                <a href="#" class="col mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-file-earmark" viewBox="0 0 16 16">
                                        <path
                                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                    </svg>
                                    <span class="align-middle">Document two</span>
                                </a>

                                <a href="#" class="col mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-file-earmark" viewBox="0 0 16 16">
                                        <path
                                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                    </svg>
                                    <span class="align-middle">Document five</span>
                                </a>

                                <a href="#" class="col mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-file-earmark" viewBox="0 0 16 16">
                                        <path
                                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                    </svg>
                                    <span class="align-middle">Document six</span>
                                </a> --}}
                                
                                    {!! $product->download->resource !!}
                            </div>
                        </div>
                    @endif
                    
                    @if($product->video->has_video === true)
                        <div id="dataSix" class="data-group">
                            <a href="#" class="text-center d-block w-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="red" class="bi bi-youtube"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                </svg>
                                <p class="lead">Check our Youtube Channel!</p>
                            </a>
                        </div>
                    @endif
                    
                    @if(!is_null($product->misc))
                        <div id="dataSeven" class="data-group">
                                <h3 class="font-weight-bold text-capitalize mb-4">Drawings</h3>
                                <div class="card-columns card-columns-two mb-6">
                                    <div class="col mb-4 inline-block">
                                        <img class="img-fluid" src="/images/draw.png" alt="">
                                    </div>
                                    <div class="col mb-4 inline-block">
                                        <img class="img-fluid" src="/images/draw2.png" alt="">
                                    </div>
                                </div>
                                <h3 class="font-weight-bold text-capitalize mb-4">Charts</h3>
                                <div class="card-columns card-columns-two mb-6">
                                    <div class="col mb-4 inline-block">
                                        <img class="img-fluid" src="/images/draw.png" alt="">
                                    </div>
                                    <div class="col mb-4 inline-block">
                                        <img class="img-fluid" src="/images/draw2.png" alt="">
                                    </div>
                                </div>
                                <h3 class="font-weight-bold text-capitalize mb-4">Graphs</h3>
                                <div class="card-columns card-columns-two mb-6">
                                    <div class="col mb-4 inline-block">
                                        <img class="img-fluid" src="/images/draw.png" alt="">
                                    </div>
                                    <div class="col mb-4 inline-block">
                                        <img class="img-fluid" src="/images/draw2.png" alt="">
                                    </div>
                                </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/script.js') !!}
@endsection
