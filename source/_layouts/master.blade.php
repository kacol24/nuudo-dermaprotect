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
<header class="rounded-b-3xl bg-primary fixed top-0 z-20 w-full">
    <div class="container mx-auto px-4">
        <div class="flex py-4 items-center gap-x-4">
            <img src="/assets/images/logo@2x.png" alt="" class="h-8">
            <div class="font-bold text-base">
                • For sensitive, dry, atopic skin
            </div>
        </div>
    </div>
</header>
@yield('content')
<footer class="bg-[#9ea4ac] py-8 text-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 gap-x-4">
            <div class="col-span-1 text-center">
                FOLLOW US
                <div class="mt-2 flex flex-row justify-center gap-x-4">
                    <a href="" class="w-1/4">
                        <img src="/assets/images/icons/icon-instagram.png" alt="" class="w-6 mx-auto">
                    </a>
                    <a href="" class="w-1/4">
                        <img src="/assets/images/icons/icon-instagram.png" alt="" class="w-6 mx-auto">
                    </a>
                    <a href="" class="w-1/4">
                        <img src="/assets/images/icons/icon-instagram.png" alt="" class="w-6 mx-auto">
                    </a>
                </div>
            </div>
            <div class="col-span-1 text-center">
                FIND US
                <div class="mt-2 flex flex-row justify-center gap-x-4">
                    <a href="" class="w-1/4">
                        <img src="/assets/images/icons/icon-instagram.png" alt="" class="w-6 mx-auto">
                    </a>
                    <a href="" class="w-1/4">
                        <img src="/assets/images/icons/icon-instagram.png" alt="" class="w-6 mx-auto">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@11.2.4/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.js"></script>
<script>
  AOS.init();
</script>
@stack('after_scripts')
</body>
</html>
