<!DOCTYPE html>
<html lang="{{ $page->language ?? 'id' }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.2.4/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css">
    <link rel="stylesheet" href="{{ mix('/css/main.css', 'assets/build') }}">
    @stack('after_styles')
</head>
<body class="antialiased font-gotham-rounded text-body">
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/swiper@11.2.4/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.js"></script>
<script>
  AOS.init();
</script>
@stack('after_scripts')
</body>
</html>
