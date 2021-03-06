<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="css/app.css" />
        <link rel="stylesheet" href="template/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="template/assets/css/noscript.css" /></noscript>
        @toastr_css
    </head>
    <body class="landing">
        @yield('content')

        <!-- Scripts -->
        <script src="template/assets/js/jquery.min.js"></script>
        <script src="template/assets/js/jquery.scrolly.min.js"></script>
        <script src="template/assets/js/jquery.dropotron.min.js"></script>
        <script src="template/assets/js/jquery.scrollex.min.js"></script>
        <script src="template/assets/js/browser.min.js"></script>
        <script src="template/assets/js/breakpoints.min.js"></script>
        <script src="template/assets/js/util.js"></script>
        <script src="template/assets/js/token.js"></script>
        <script src="template/assets/js/upload.js"></script>

        @toastr_js
        @toastr_render
        
        @stack('scripts')
    </body>
</html>