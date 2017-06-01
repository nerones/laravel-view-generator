<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--{!! SEO::generate(true) !!}--}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rev="favicon" rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="wrap">
    @include('layouts.partial.header')
    <div id="main-container">
        @yield('content')
    </div>
    @include('layouts.partial.footer')
</div>
<!-- Scripts -->
<script src="{{ asset('/js/app.js') }}"></script>
@yield('pageScript')
</body>
</html>
