<!DOCTYPE html>
<html class="lg:!overflow-auto overflow-x-hidden scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="google" content="notranslate">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - Carol's Events</title>
    <meta property="og:locale" content="{{ app()->getLocale() }}"/>
    <meta property="og:site_name" content="Au Chœur des voix">
    <meta property="og:title" content="@yield('title') - Au Chœur des voix"/>
    <meta property="og:description" content="@yield('meta_description')"/>
    <meta property="og:type" content="website"/>
    <meta name="description" content="@yield('meta_description')"/>
    <meta name="keywords" content="@yield('meta_keywords')"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5"/>
    <meta property="og:image" content="@yield('meta_og:image', asset('/images/share.jpg'))">

    <link rel="canonical" href="{{ url()->current() }}">

    {{--<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">--}}

    {{-- Style --}}
    @stack('style_stack')

    @vite(['resources/js/app.js', 'resources/css/app.css'])

    @section('style')
    @show
    {{-- End style --}}

    @stack('head_scripts')
</head>

<body>
{{-- header --}}
{{--@section('header')
    @include('layouts.main.partials.header', ['isReversed' => isset($isReversed)])
@show--}}
{{-- end header --}}

{{-- content --}}
<div class="-z-50 flex flex-col">
    {{-- main content --}}
    @yield('content')
    {{-- main content --}}
</div>

{{-- Footer --}}
{{--@section('footer')
    @include('layouts.main.partials.footer')
@show--}}
{{-- footer --}}

@stack('script_stack')
{{-- End script --}}
</body>
</html>
