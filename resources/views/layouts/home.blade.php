<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Get one link for all of your links">
    <meta name="keywords" content="With SiDeli you can simply put all of your links into one and share it on your social media">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="With SiDeli you can simply put all of your links into one and share it on your social media">
    <meta property="og:image" content="{{ asset('static/favicon/android-chrome-192x192.png') }}">
    @include('extensions.favicon')
    @stack('styles')
</head>
<body class="bg-gray-100 overflow-x-hidden">
    <nav class="bg-white w-full h-16 shadow-sm rounded-b-3xl flex items-center justify-center">
        <div class="container flex items-center justify-between px-5">
            <a href="/"><img src="{{ asset('images/sideli.png') }}" alt="{{ config('app.name') }}" class="h-10"></a>
            <div class="flex items-center justify-end">
                <a href="{{ route('terms') }}">{{ __("Terms") }}</a>
                <a href="{{ route('policy') }}" class="ml-5">{{ __("Policy") }}</a>
                <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-primary-600 to-secondary-600 font-normal font-medium text-white transition hover:from-primary-600 hover:to-primary-600 focus:outline-none disabled:opacity-25 px-4 py-2 text-md w-max ml-5">
                    {{ __("Login") }}
                </a>
            </div>
        </div>
    </nav>
    @yield('content')
    @stack('scripts')
    @include('extensions.google')
    @include('extensions.cookie')
</body>
</html>
