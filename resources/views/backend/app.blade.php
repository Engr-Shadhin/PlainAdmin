<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    @include('backend.partials.styles')
</head>

<body>
    {{--  ======== Preloader ===========  --}}
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    {{--  ======== Preloader ===========  --}}

    @include('backend.partials.sidebar')

    <main class="main-wrapper">
        @include('backend.partials.header')



        <section class="section">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>



        @include('backend.partials.footer')
    </main>
    @include('backend.partials.theme_option')

    @include('backend.partials.scripts')
</body>

</html>
