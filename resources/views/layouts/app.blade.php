<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="">
        <div class="page">
            @include('partials.sidebar')
            @include('partials.header')
            <div class="content">
        
                <!-- Start::main-content -->
                <div class="main-content">
            
                    <!-- Page Header -->
                    @yield('breadcrumb')
                    <!-- Page Header Close -->
            
                    {{ $slot }}
                </div>
                <!-- End::row-1 -->
        
            </div>
            <!-- Start::main-content -->
        
        </div>
        @include('partials.search-modal')
         <!-- Back To Top -->
        <div class="scrollToTop">
            <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
        </div>

        <div id="responsive-overlay"></div>
    </body>
</html>
