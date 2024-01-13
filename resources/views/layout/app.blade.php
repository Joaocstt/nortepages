<!DOCTYPE html>
<html lang="pt-br" data-mode="light" dir="ltr">

<head>
    <meta charset="utf-8"/>
    <title>NortePages - Construa seu website conosco!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="NortePages - Sua escolha para construção de websites profissionais e impactantes. Desenvolvemos soluções digitais personalizadas para destacar sua presença online."/>
    <meta name="keywords" content="NortePages, construção de websites, desenvolvimento web, presença online, sites profissionais"/>
    <meta content="NortePages" name="author"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />

    <!-- Tailwind CSS -->
    <link href="{{ asset('assets/css/tailwind.css') }}" rel="stylesheet"/>

    <!-- Icons CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet"/>

    <!-- Link do CDN do animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="NortePages - Construa seu website conosco!"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="#"/>
    <meta property="og:image" content="{{ asset('assets/images/nortepages-preview.jpg') }}"/>
    <meta property="og:description" content="NortePages - Sua escolha para construção de websites profissionais e impactantes. Desenvolvemos soluções digitais personalizadas para destacar sua presença online."/>

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="NortePages - Construa seu website conosco!"/>
    <meta name="twitter:description" content="NortePages - Sua escolha para construção de websites profissionais e impactantes. Desenvolvemos soluções digitais personalizadas para destacar sua presença online."/>
    <meta name="twitter:image" content="{{ asset('assets/images/favicon.ico') }}"/>

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
