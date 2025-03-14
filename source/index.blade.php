@extends('_layouts.master')

@section('content')
    <section class="mt-10">
        <div class="relative">
            <img src="/assets/images/hero-banner.jpeg" alt="" class="w-full">
            <div class="absolute top-0 left-0 w-full h-full flex items-center">
                <div class="container mx-auto px-4">
                    <h1 class="text-2xl text-white">
                        3 Langkah Perawatan untuk
                        <span class="font-bold text-2xl block" style="text-shadow: 1px 1px rgba(0, 0, 0, .7);">
                            Kulit Sensitif, Kering & Rentan Eksim
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <div style="background: url(/assets/images/bg-ripple.png) no-repeat center bottom;background-size: cover"
         class="pt-10">
        <section>
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-xl font-bold mb-8">
                    Nuudo percaya bahwa tubuh yang sehat dimulai dengan <span
                            class="text-primary">skin barrier yang sehat.</span>
                </h1>
                <p class="text-lg mb-4">
                    Skin barrier adalah lapisan terluar kulit manusia,
                    yang memiliki fungsi utama untuk menjaga kelembapan kulit dan melindungi tubuh dari potensi iritasi.
                </p>
                <img src="/assets/images/skin-barrier.png" alt="" class="mx-auto w-40 mb-4">
                <p class="text-lg mb-4 font-bold">
                    Pada kondisi kulit normal, skin barrier umumnya tidak mudah rusak. Kondisi skin barrier yang mudah
                    rusak
                    sering ditemui pada kulit:
                </p>
            </div>
            <div class="swiper swiper--zoom" id="skin_swiper">
                <div class="swiper-wrapper">
                    @foreach($page->skin_types as $skin)
                        <div class="swiper-slide p-2">
                            <div class="p-4 bg-gradient-to-b from-blue-100 to-white rounded-xl shadow-md text-center">
                                <img src="{{ $skin->image }}" alt="{{ $skin->title }}"
                                     class="size-40 mx-auto mb-4">
                                <h2 class="text-lg font-bold">
                                    {{ $skin->title }}
                                </h2>
                                <p class="text-base mt-2">
                                    {{ $skin->body }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
        <section class="mt-12">
            <div class="container mx-auto px-4">
                <div class="mx-auto max-w-[800px]">
                    <h2 class="text-lg text-center">
                        <strong class="text-primary">Nuudo Dermaprotect</strong> diformulasikan khusus
                        untuk menjaga skin barrier kulit sensitif, kering, dan rentan eksim, menggunakan campuran
                        <strong>plant butter dan oil.</strong>
                    </h2>
                </div>
                <img src="/assets/images/natural-ingredients.png" alt="" class="mx-auto mt-8">
            </div>
            <img src="/assets/images/product-showcase.png" alt="" class="w-full">
        </section>
    </div>
    <div style="background: url(/assets/images/bg-ripple.png) no-repeat center bottom;background-size: cover"
         class="pt-10">
        <section>
            <div>
                showcase carousel
            </div>
            <div class="mt-8">
                <div class="container mx-auto px-4">
                    <div class="rounded-full border-primary border-4 bg-white flex items-center p-2 gap-x-2">
                        <img src="/assets/images/icons/bulb-icon.png" alt="" class="w-20">
                        <div class="text-center flex-grow text-xs">
                            <strong class="block text-base">
                                TAHUKAH ANDA?
                            </strong>
                            Kandungan vegetable glycerin di Nuudo Dermaprotect Gentle Cleanser lebih tinggi dari
                            kandungan
                            air
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-12 pb-8">
            <h3 class="font-bold text-2xl text-center">
                Rasakan Kebaikan Nuudo
            </h3>
            <div>
                testimonial carousel
            </div>
            <div class="container mx-auto px-4">
                <div class="text-center">
                    Nuudo accommodates the needs of all types of skin rom normal, sensitive, dry and atopic skin
                </div>
            </div>
            <h3 class="font-bold text-2xl text-center">
                Other Products:
            </h3>
            <div>
                other products carousel
            </div>
        </section>
    </div>
    <section title="outro">
        <div class="relative">
            <img src="/assets/images/all-products.jpeg" alt="" class="w-full">
            <div class="absolute bottom-0 left-0 w-full text-center py-4">
                <img src="/assets/images/logo-nuudo@2x.png" alt="" class="w-40 mx-auto">
                <h4 class="text-xl mt-2">
                    Where Natural Goodness Meets Everyday Care
                </h4>
            </div>
        </div>
    </section>
@endsection

@push('after_scripts')
    <script>
      new Swiper('#skin_swiper', {
        slidesPerView: 1.5,
        centeredSlides: true,
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
        breakpoints: {
          768: {
            slidesPerView: 2.5,
            spaceBetween: 20
          }
        }
      });
    </script>
@endpush
