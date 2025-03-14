@extends('_layouts.master')

@section('content')
    <header class="rounded-b-3xl bg-primary fixed top-0 z-20 w-full">
        <div class="container mx-auto px-4">
            <div class="flex flex-row py-10 items-center gap-x-4">
                <img src="/assets/images/logo@2x.png" alt="" class="h-20">
                <div class="font-bold text-4xl">
                    • For sensitive, dry, atopic skin
                </div>
            </div>
        </div>
    </header>
    <section class="mt-20">
        <div class="relative">
            <img src="/assets/images/hero-banner.jpeg" alt="" class="w-full">
            <div class="absolute top-0 left-0 w-full h-full flex items-center">
                <div class="container mx-auto px-4">
                    <h1 class="text-5xl text-white">
                        3 Langkah Perawatan untuk
                        <span class="font-bold text-6xl block" style="text-shadow: 1px 1px rgba(0, 0, 0, .7);">
                            Kulit Sensitif, Kering & Rentan Eksim
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <div style="background: url(/assets/images/bg-ripple.png) no-repeat center bottom;background-size: cover"
         class="py-20">
        <section class="py-8">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-5xl font-bold mb-8">
                    Nuudo percaya bahwa tubuh yang sehat dimulai dengan <span
                            class="text-primary">skin barrier yang sehat.</span>
                </h1>
                <p class="text-3xl mb-4">
                    Skin barrier adalah lapisan terluar kulit manusia,
                    yang memiliki fungsi utama untuk menjaga kelembapan kulit dan melindungi tubuh dari potensi iritasi.
                </p>
                <img src="/assets/images/skin-barrier.png" alt="" class="mx-auto w-40 mb-4">
                <p class="text-3xl mb-4 font-bold">
                    Pada kondisi kulit normal, skin barrier umumnya tidak mudah rusak. Kondisi skin barrier yang mudah
                    rusak
                    sering ditemui pada kulit:
                </p>
                <div>
                    carousel
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto px-4">
                <div class="mx-auto max-w-[800px]">
                    <h2 class="text-3xl text-center">
                        <strong class="text-primary">Nuudo Dermaprotect</strong> diformulasikan khusus
                        untuk menjaga skin barrier kulit sensitif, kering, dan rentan eksim, menggunakan campuran
                        <strong>plant
                            butter
                            dan oil.</strong>
                    </h2>
                </div>
                <img src="/assets/images/natural-ingredients.png" alt="" class="mx-auto h-40 mt-8">
            </div>
        </section>
    </div>
@endsection
