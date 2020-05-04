<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Shayna Template" />
    <meta name="keywords" content="Shayna, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title') - Klorofil</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="/user/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/themify-icons.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/style.css" type="text/css" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    {{-- Header --}}
    @include('layouts.includes._user_header')
    {{-- End Header --}}

    {{-- Content --}}
    @yield('content')
    {{-- End Content --}}

    {{-- Footer --}}
    @include('layouts.includes._user_footer')
    {{-- End Footer --}}

    <!-- Js Plugins -->
    <script src="/user/js/jquery-3.3.1.min.js"></script>
    <script src="/user/js/bootstrap.min.js"></script>
    <script src="/user/js/jquery-ui.min.js"></script>
    <script src="/user/js/jquery.countdown.min.js"></script>
    <script src="/user/js/jquery.nice-select.min.js"></script>
    <script src="/user/js/jquery.zoom.min.js"></script>
    <script src="/user/js/jquery.dd.min.js"></script>
    <script src="/user/js/jquery.slicknav.js"></script>
    <script src="/user/js/owl.carousel.min.js"></script>
    <script src="/user/js/main.js"></script>
</body>

</html>