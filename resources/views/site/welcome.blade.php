@extends('layout.app')

@section('content')
    <!-- Navbar Start -->
    @include('layout.navbar')
    <!-- Navbar End -->

    <!-- Header Home Start -->
    @include('layout.headerHome')
    <!-- Header Home End -->

    <!-- Service Start -->
    @include('layout.serviceStart')
    <!-- Service End -->

    <!-- what we do? -->
    @include('layout.serviceTwo')
    <!-- End -->

    <!-- Web Info Start -->
    @include('layout.webInfo');
    <!-- Web Info End -->

    <!-- Work Process Start -->
    @include('layout.workProcess')
    <!-- Work Process End -->

    <!-- testimonials Start -->
    @include('layout.testimonials')
    <!-- testimonials End -->

    <!-- Web Info-2 Start - We take care of everything for you  -->
    @include('layout.webInfo2')
    <!-- Web Info-2 End -->

    <!-- Contact Start -->
    @include('layout.contact')
    <!-- Contact End -->

@endsection
