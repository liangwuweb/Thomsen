<!doctype html>
<html lang="en">

<head>
    @include('partials._head')
</head>

<body>
    @include('partials._nav')

    @include('partials._message')

    <div class="wrapper d-flex flex-column h-100">
        <main class="flex-grow-1">
            @yield('content')
        </main>

        @include('partials._footer')
    </div>

    @include('partials._javascript')

    @yield('scripts')
</body>

</html>
