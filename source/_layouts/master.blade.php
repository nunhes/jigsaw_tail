<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

    <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="/favicon.ico">
    <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

    @if ($page->production)
    <!-- Insert analytics code here -->
    @endif

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>

<body class="flex flex-col min-h-screen text-gray-800 leading-normal font-sans">
    <header class="flex items-center shadow bg-white border-b h-20 py-4" role="banner">
        <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
            <div class="flex items-center">
                <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                    <img class="h-8 md:h-10 mr-3" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />

                    <h1 class="text-lg md:text-2xl text-blue-800 font-semibold hover:text-blue-600 my-0">{{ $page->siteName }}</h1>
                </a>
            </div>

            <div id="vue-search" class="flex flex-1 justify-end items-center">
                <!-- search></search -->

                @include('_nav.menu')

                @include('_nav.menu-toggle')
            </div>
        </div>
    </header>

    @include('_nav.menu-responsive')

    <main role="main" class="flex-auto w-full">
        @yield('body')
    </main>

    @include('_partials.footer')

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')
</body>

</html>