    <header>
        <div class="topnav container d-flex align-items-center justify-content-between">
            <a href="/" class="nav-logo">
                <img class="d-block" src="/images/Logo.png" alt="">
            </a>
            <span class="font-italic uppercase font-weight-bold text-black-50 text-uppercase">Quality Stainless steel
                flow
                equipments</span>
        </div>
        {{-- old nav bar --}}
        {{-- <div class="navbar">
            <ul class="nav-wrap container">
                <li class="list-item">
                    <a href="/" class="nav-link uppercase font-bold text-white">HOME</a>
                </li>

                <li class="has-dropdown p-relative list-item">
                    <a href="/product" class="nav-link uppercase font-bold text-white">
                        <span>PRODUCTS</span>
                    </a>
                </li>

                <li class="has-dropdown p-relative list-item">
                    <a href="/category" class="nav-link uppercase font-bold text-white">
                        category
                    </a>
                </li>

                <li class="list-item">
                    <a href="/about" class="nav-link uppercase font-bold text-white">about</a>
                </li>

                <li class="list-item">
                    <a href="/posts/create" class="nav-link uppercase font-bold text-white">contact</a>
                </li>
        </div> --}}

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="animated-icon2">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link font-weight-bold text-light {{ Request::is('/') ? 'active' : '' }}"
                            href="/">Home</a>

                        <div class="has-dropdown nav-item">
                            <div class="nav-link font-weight-bold text-light d-flex d-lg-block justify-content-between {{ $page === 'category' ? 'active' : '' }}"
                                data-toggle="dropdown" id="catDropdown"><span>Category</span>
                                <svg class="dropdown-icon {{ $page === 'category' ? 'active' : '' }}"
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                                    fill="#ffffff">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" />
                                </svg>
                            </div>

                            <div class="dropdown-menu" aria-labelledby="catDropdown">
                                <a href="/category">All Categories</a>
                                <div class="line-break"></div>
                                <a href="/subcategory/1">Pump</a>
                                <div class="line-break"></div>
                                <a href="/subcategory/9">Filter Strainer</a>
                                <div class="line-break"></div>
                                <a href="#">valve</a>
                                <div class="line-break"></div>
                                <a href="#">Swivel Joint</a>
                                <div class="line-break"></div>
                                <a href="#">Fittings</a>
                                <div class="line-break"></div>
                                <a href="#">Product Recovery</a>
                                <div class="line-break"></div>
                                <a href="#">Specialty Products</a>

                            </div>
                        </div>

                        <a class="nav-link font-weight-bold text-light {{ Request::is('about') ? 'active' : '' }}"
                            href="/about">About</a>
                        <a class="nav-link font-weight-bold text-light {{ Request::is('contact') ? 'active' : '' }}"
                            href="/contact">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
