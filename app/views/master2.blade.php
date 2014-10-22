<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>@yield('page_tittle')</title>
<link rel="stylesheet" href="styles/css/styles.css" />
</head>
    <body>
    @include('partials.nav')


    @yield('content')

    <footer>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    @yield('script')
    </footer>
    </body>
</html>