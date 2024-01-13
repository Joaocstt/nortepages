<!DOCTYPE html>
<html lang="pt-br" data-mode="light" dir="ltr">

<head>
    <meta charset="utf-8"/>
    <title>Nortepages - Construa seu website com a gente!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Nortepages"/>
    <meta name="keywords" content="Nortepages"/>
    <meta content="NortePages" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Tailwind Css -->
    <link href="{{ asset('assets/css/tailwind.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>

    <!-- link do CDN do animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body class="dark:bg-zinc-800">



@yield('content')




<!-- Footer Start -->
@include('layout.footer')
<!-- Footer End -->

<!-- Se o arquivo smooth-scroll.polyfills.min.js estiver dentro de assets/js -->
<script src="{{ asset('assets/js/smooth-scroll.polyfills.min.js') }}"></script>

<!-- Se o arquivo gumshoe.polyfills.min.js estiver dentro de assets/js -->
<script src="{{ asset('assets/js/gumshoe.polyfills.min.js') }}"></script>

<!-- Se o arquivo modal.js estiver dentro de assets/js -->
<script src="{{ asset('assets/js/modal.js') }}"></script>

<!-- Custom Javascript -->
<script src="{{ asset('assets/js/app.js') }}"></script>



</body>

</html>
