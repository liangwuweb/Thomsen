    <header>
        <div class="topnav container d-flex align-items-center justify-content-between">
            <a href="/" class="nav-logo">
                <img class="d-block" src="/images/Logo.png" alt="">
            </a>
            <span class="font-italic uppercase font-weight-bold text-black-50 text-uppercase">Quality Stainless steel
                flow
                equipment</span>
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
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link text-light {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                        <a class="nav-link text-light {{ $page === 'category' ? 'active' : '' }}"
                            href="/category">Category</a>
                        <a class="nav-link text-light {{ Request::is('about') ? 'active' : '' }}"
                            href="/about">About</a>
                        <a class="nav-link text-light {{ Request::is('contact') ? 'active' : '' }}"
                            href="/contact">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
