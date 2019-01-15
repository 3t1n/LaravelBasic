<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Laravel Basic - @yield('title') </title>


    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link rel="shortcut icon" href="{!! asset('img/faviconlogo.ico') !!}" />

    @section('styles')
    @show


</head>
<body>

@if(Auth::check())
    <body>
    <div id="wrapper">
        @include('layouts.navigation')
        <div id="page-wrapper" class="white-bg">
            @include('layouts.topnavbar')
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>
    </body>

@else

    <body class="gray-bg">
    <div>
        @yield('content')
    </div>
    </body>

@endif


<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

@section('scripts')
@show

</body>
</html>
