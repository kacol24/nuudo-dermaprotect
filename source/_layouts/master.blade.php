<!DOCTYPE html>
<html lang="{{ $page->language ?? 'id' }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="favicon.svg"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
    <meta name="apple-mobile-web-app-title" content="Nuudo Dermaprotect"/>
    <link rel="manifest" href="site.webmanifest"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.2.5/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css">
    <link rel="stylesheet" href="../{{ mix('/css/main.css', 'assets/build') }}">
    @stack('after_styles')
    <base href="{{ $page->baseUrl }}">
</head>
<body class="antialiased font-gotham-rounded text-body">
<header class="rounded-b-3xl bg-primary fixed top-0 z-20 w-full">
    <div class="container mx-auto px-4">
        <div class="flex py-4 items-center gap-x-4">
            <img src="assets/images/logo@2x.png" alt="" class="h-9 md:h-16" data-aos="fade-right">
            <div class="font-bold text-base md:text-2xl" data-aos="fade-right" data-aos-delay="100">
                • For sensitive, dry, atopic skin
            </div>
        </div>
    </div>
</header>
@yield('content')
<footer class="bg-[#9ea4ac] py-8 text-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:gap-x-4 md:grid-cols-4 gap-y-8">
            <div class="col-span-1 text-center md:flex md:flex-row items-center md:gap-x-8"
                 data-aos="fade-down"
                 data-aos-offset="-100">
                FOLLOW US
                <div class="mt-2 flex flex-row justify-center gap-x-4 md:mt-0 md:gap-x-8">
                    @foreach($page->socials as $social)
                        <a href="{{ $social->url }}" class="w-6" target="_blank"
                           data-aos="fade-right"
                           data-aos-offset="-100"
                           data-aos-delay="{{ 100 * $loop->index }}">
                            <img src="{{ $social->icon }}" alt="{{ $social->title }}"
                                 class="w-6 mx-auto">
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-span-1 text-center md:flex md:flex-row items-center md:gap-x-8"
                 data-aos="fade-down"
                 data-aos-offset="-100"
                 data-aos-delay="200">
                FIND US
                <div class="mt-2 flex flex-row justify-center gap-x-4 md:mt-0 md:gap-x-8">
                    @foreach($page->marketplaces as $marketplace)
                        <a href="{{ $marketplace->url }}" class="w-6" target="_blank"
                           data-aos="fade-right"
                           data-aos-offset="-100"
                           data-aos-delay="{{ 100 * $loop->iteration }}">
                            <img src="{{ $marketplace->icon }}" alt="{{ $marketplace->title }}"
                                 class="w-6 mx-auto">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="fixed z-30 bottom-4 right-4">
    <div
            data-aos="zoom-in-left">
        <a href="{{ $page->fab->wa }}" target="_blank">
            <img src="assets/images/icons/icon-whatsapp.png" alt="icon whatsapp" class="w-12">
        </a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11.2.5/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.js"></script>
<script>
  AOS.init({
    duration: 1000
  });
</script>
@stack('after_scripts')
</body>
</html>
