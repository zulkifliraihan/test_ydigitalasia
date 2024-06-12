<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solusi Terbaik Transformasi Kulit & Rambut dari ERHA</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <style>
        .floating-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 50;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .border-menu-active {
            border-bottom: 6px solid #f58220;
        }
        
        .border-menu:hover {
            border-bottom: 6px solid #f58220;
        }

        .input-search {
            background: #fff;
            border: none;
            border-bottom: 1px solid #b4b4b4;
            font-family: var(--font-secondary);
            font-size: .95vw;
            width: 100%;
        }

        .bg-image-semi-transparant {
            background: rgba(0, 0, 0, .2);
            /* background-color: transparent;   */
        }

        .bg-white-cream {
            background-color: #fffaf4;
        }

        .bg-card-image-eye {
            background-image: url(https://d3sgbq9gctgf5o.cloudfront.net/clinical-programs/clinical-program-treatment-bg.jpg?format=auto);
            background-color: #f58220 !important;
        }

        .bg-product {
            background: url(https://d3sgbq9gctgf5o.cloudfront.net/backgrounds/desktop/bg-produk.jpg?format=auto);
        }

        .swiper-button-next, .swiper-button-prev {
            color: #000;
        }

        .bg-footer-left {
            background-color: #343434;
        }

        .bg-footer-right {
            background-color: #f58220;
        }

        .bg-footer {
            background: linear-gradient(90deg, #343434 0, #343434 50%, #f58220 0, #f58220);
        }

        .bg-footer-floating {
            background-color: #101820;
        }

        .bg-footer-floating-mobile {
            background-color: #ebebeb;
        }
    </style>
</head>
<body class="w-min-screen">

    @include('headers.desktop')

    @include('headers.mobile')

    <section>
        <div class="w-full">
            <img src="https://d3sgbq9gctgf5o.cloudfront.net/banners/desktop/acne2.png?format=auto" class="xs:hidden" alt="Banner Acne">
            <img src="https://d3sgbq9gctgf5o.cloudfront.net/2-program-kategori-banner-mobile-1.png?format=auto" class="sm:hidden" alt="Banner Acne">

        </div>
        <div class="xs:px-8 px-64 py-16 xs:py-8 bg-white-cream">
            <div class="mb-8 xs:mb-4">
                <nav class="flex justify-between" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center mb-3 sm:mb-0">
                    <li>
                        <div class="flex items-center">
                            <h1 class="text-orange-400">Beranda</h1>
                        </div>
                    </li>
                    <span class="mx-2 text-gray-400">/</span>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <h1 class="text-orange-400">Acne Jerawat</h1>
                        </div>
                    </li>
                    </ol>
                </nav>
  
            </div>
            <div class="mb-12">
                <h1 class="text-4xl font-light text-gray-600">Jenis Jerawat & Bekas Jerawat</h1>
            </div>

            <div class="">
                <div class="xs:hidden inline-flex gap-8 w-3/4 mb-8">
                    <div class="flex items-center bg-neutral-900">
                        <div class="relative">
                            <img src="https://d3sgbq9gctgf5o.cloudfront.net/wikis/desktop/acne-scar.jpg?format=auto" alt="Sample Image" class="w-full h-auto opacity-50">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <p class="text-white text-lg font-bold px-4 py-2 rounded">Caption Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center bg-neutral-900">
                        <div class="relative">
                            <img src="https://d3sgbq9gctgf5o.cloudfront.net/wikis/desktop/comedo.jpg?format=auto" alt="Sample Image" class="w-full h-auto opacity-50">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <p class="text-white text-lg font-bold px-4 py-2 rounded">Caption Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center bg-neutral-900">
                        <div class="relative">
                            <img src="https://d3sgbq9gctgf5o.cloudfront.net/wikis/desktop/jerawat-aktif.jpg?format=auto" alt="Sample Image" class="w-full h-auto opacity-50">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <p class="text-white text-lg font-bold px-4 py-2 rounded">Caption Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center bg-neutral-900">
                        <div class="relative">
                            <img src="https://d3sgbq9gctgf5o.cloudfront.net/wikis/desktop/jerawat-aktif.jpg?format=auto" alt="Sample Image" class="w-full h-auto opacity-50">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <p class="text-white text-lg font-bold px-4 py-2 rounded">Caption Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center bg-neutral-900">
                        <div class="relative">
                            <img src="https://d3sgbq9gctgf5o.cloudfront.net/wikis/desktop/jerawat-aktif.jpg?format=auto" alt="Sample Image" class="w-full h-auto opacity-50">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <p class="text-white text-lg font-bold px-4 py-2 rounded">Caption Text</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="jenisjerawat-mobile" class="sm:hidden mb-8">
                    @include('sliders/jenisjerawat-mobile')
                </div>

                <div class="mb-12">
                    <h1 class="xs:text-sm text-3xl font-semibold text-gray-600 mb-4">
                        Acne Scar/Bekas Jerawat
                    </h1>
                    <p class="xs:text-sm text-xl font-thin text-gray-600">
                        Acne Scar/Bekas Jerawat
                    </p>
                </div>
            </div>
        </div>

        <div class="xs:px-8 px-64 mt-16">
            <div class="sm:w-3/4 sm:mx-auto mb-16 xs:mb-8">
                <h1 class="text-orange-500 text-4xl text-center font-semibold mb-8 xs:mb-2 xs:text-2xl xs:text-left">Kamu sedang mengalami masalah jerawat dan bekas jerawat seperti ini?</h1>
                <p class="font-light text-center text-xl text-gray-600 xs:text-lg xs:text-left">Konsultasikan dengan ahli terpercaya di Acne Center dari ERHA Ultimate!</p>
            </div>
            <div class="grid grid-cols-2 gap-4 xs:grid-cols-1">

                <div class="block w-full bg-card-image-eye bg-blend-multiply text-center px-10 py-16 rounded-lg xs:px-5 xs:py-8">

                    <h1 class="mb-2 text-2xl font-bold text-white xs:text-sm">Program Acne Center</h1>
                    <p class="mb-6 text-2xl font-light text-white xs:text-sm xs:mb-2">Temukan program pilihan untuk menangani berbagai masalah jerawat yang dirancang langsung dari ahlinya</p>

                    <a href="https://erhaultimate.co.id/acne-center/programs">
                        <button class="mt-4 inline-flex bg-black font-bold text-center snap-center place-content-center place-items-center text-white border border-white rounded-full px-9 py-4 group hover:bg-orange-500 xs:px-4 xs:py-2 xs:text-[0.55rem]">
                            LIHAT SEMUA PROGRAM 
                            <span class="w-4 ml-4 xs:ml-1">
                                <i class="fa-solid fa-arrow-right text-orange-500 group-hover:text-white"></i>
                            </span>
                        </button>
                    </a>
                </div>

                <div class="block w-full bg-card-image-eye bg-blend-multiply text-center px-10 py-16 rounded-lg xs:px-5 xs:py-8">

                    <h1 class="mb-2 text-2xl font-bold text-white xs:text-sm">Program Acne Center</h1>
                    <p class="mb-6 text-2xl font-light text-white xs:text-sm xs:mb-2">Temukan berbagai jenis perawatan untuk menangani berbagai masalah jerawat di kulitmu dari ahlinya</p>

                    <a href="https://erhaultimate.co.id/acne-center/treatments">
                        <button class="mt-4 inline-flex bg-black font-bold text-center snap-center place-content-center place-items-center text-white border border-white rounded-full px-9 py-4 group hover:bg-orange-500 xs:px-4 xs:py-2 xs:text-[0.55rem]">
                            LIHAT SEMUA PROGRAM 
                            <span class="w-4 ml-4 xs:ml-1">
                                <i class="fa-solid fa-arrow-right text-orange-500 group-hover:text-white"></i>
                            </span>
                        </button>
                    </a>
                </div>
    
            </div>
        </div>
        <div class="xs:px-8 px-64 mt-16 bg-gray-100 py-24">
            <h1 class="mb-8 text-4xl text-gray-600 text-center xs:text-xl">Testimoni dari Acne Warrior</h1>
            <div class="flex flex-row gap-2 px-8 xs:hidden">
                <div class="w-64 py-10 mx-auto">
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-36 h-36 mb-3 rounded-full" src="https://d3sgbq9gctgf5o.cloudfront.net/testimony/testimoni5-1-150x150.jpg?format=auto" alt="Bonnie image"/>
                        <h5 class="mb-4 text-2xl font-medium text-orange-500">El Rumi, Artis</h5>
                        <span class="text-xl font-light text-zinc-600 text-center">"Buat cowok kayak gue yang cuek sama kulit. ERHA jadi penolong dengan ngasih gue treatment yang mudah di-maintain dengan hasil yang langsung terlihat, terlebih waktu gue lagi jerawatan"</span>
                    </div>
                </div>
                <div class="w-64 py-10 mx-auto">
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-36 h-36 mb-3 rounded-full" src="https://d3sgbq9gctgf5o.cloudfront.net/testimony/testimoni5-1-150x150.jpg?format=auto" alt="Bonnie image"/>
                        <h5 class="mb-4 text-2xl font-medium text-orange-500">El Rumi, Artis</h5>
                        <span class="text-xl font-light text-zinc-600 text-center">"Buat cowok kayak gue yang cuek sama kulit. ERHA jadi penolong dengan ngasih gue treatment yang mudah di-maintain dengan hasil yang langsung terlihat, terlebih waktu gue lagi jerawatan"</span>
                    </div>
                </div>
                <div class="w-64 py-10 mx-auto">
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-36 h-36 mb-3 rounded-full" src="https://d3sgbq9gctgf5o.cloudfront.net/testimony/testimoni5-1-150x150.jpg?format=auto" alt="Bonnie image"/>
                        <h5 class="mb-4 text-2xl font-medium text-orange-500">El Rumi, Artis</h5>
                        <span class="text-xl font-light text-zinc-600 text-center">"Buat cowok kayak gue yang cuek sama kulit. ERHA jadi penolong dengan ngasih gue treatment yang mudah di-maintain dengan hasil yang langsung terlihat, terlebih waktu gue lagi jerawatan"</span>
                    </div>
                </div>

            </div>

            <div id="testimoni-mobile" class="sm:hidden">
                @include('sliders/testimoni-mobile')
            </div>
        </div>
        <div class="sm:hidden">
            <div class="xs:px-8 px-64 sm:py-24 xs:pt-12">
                <h1 class="text-5xl text-gray-800 mb-10 xs:text-xl xs:font-bold sm:hidden">
                    Join Komunitas Acne-Free Universe
                </h1>
            </div>
            <div class="w-full ">
                <img src="https://d3sgbq9gctgf5o.cloudfront.net/banners/desktop/acne-community.jpg"/>
            </div>
            <div class="xs:px-8 px-64 py-24 xs:py-10">
                <p class="mb-8 text-xl text-gray-600 font-light xs:text-sm">
                    <strong class="text-black font-bold">
                        Acne-Free Universe
                    </strong> hadir sebagai tempat berkumpul bagi #AcneWarrior untuk saling berbagi cerita dan berproses bersama mengalahkan musuh kita Galacne a.k.a. Jerawat
                </p>
                <div class="flex">
                    <button class="bg-black w-full hover:bg-orange-500 text-white px-12 py-4 rounded-full xs:px-6 xs:text-nowrap xs:py-4 xs:text-xs :xsmx-auto">
                        INFO SELENGKAPNYA
                    </button>
                </div>
            </div>
        </div>

        <div class="xs:px-8 px-64 py-24 xs:py-12 xs:hidden">
            <div class="grid grid-cols-7 gap-12">
                <div class="col-span-3">
                    <img src="https://d3sgbq9gctgf5o.cloudfront.net/banners/desktop/acne-community.jpg"/>
                </div>
                <div class="col-span-4 py-8 px-8">
                    <h1 class="text-5xl text-gray-800 mb-10">
                        Join Komunitas Acne-Free Universe
                    </h1>
                    <p class="mb-8 text-xl text-gray-700 font-light">
                        <strong class="text-black">
                            Acne-Free Universe
                        </strong> hadir sebagai tempat berkumpul bagi #AcneWarrior untuk saling berbagi cerita dan berproses bersama mengalahkan musuh kita Galacne a.k.a. Jerawat
                    </p>
                    <button class="bg-black hover:bg-orange-500 text-white px-12 py-4 rounded-full">
                        INFO SELENGKAPNYA
                    </button>
                </div>
            </div>
        </div>

        <div class="xs:px-8 px-64 py-24 bg-product xs:py-12">
            <div class="flex mb-8">
                <h1 class="text-4xl text-zinc-600 pb-4 border-4 border-x-0 border-t-0 border-b-orange-500 xs:text-lg">
                    Produk Acne Center
                </h1>
                <button class="ml-auto bg-black hover:bg-orange-500 text-white px-12 py-4 rounded-full xs:hidden">
                    LIHAT SEMUA PRODUK
                </button>            
            </div>
            <div id="products-desktop" class="xs:hidden">
                @include('sliders/products-desktop')
            </div>
            <div id="products-mobile" class="sm:hidden">
                @include('sliders/products-mobile')
            </div>
            <div class="sm:hidden mt-6 text-center">
                <button class="bg-black w-full hover:bg-orange-500 text-white px-12 py-4 rounded-full xs:text-xs xs:px-6 xs:py-4">
                    LIHAT SEMUA PRODUK
                </button>  
            </div>
        </div>

        <div class="xs:px-8 px-64 py-24 xs:py-12">
            <div class="border-y-2 py-12">
                <h1 class="text-center text-base text-zinc-500 xs:text-xs">
                    Acne Center dari ERHA Ultimate adalah klinik perawatan kulit terpercaya di Indonesia dengan spesialisasi mengatasi berbagai masalah jerawat....
                    <a class="italic text-base text-orange-500 underline mx-auto xs:text-xs">Selengkapnya</a>
                </h1>
            </div>
        </div>
    </section>

    @include('footers.desktop')

    @include('footers.mobile')

    <div class="xs:hidden">
        <div class="fixed bottom-0 left-0 w-full bg-footer-floating z-50 shadow-md rounded-t-2xl">
            <div class="flex py-8 text-white">
                <ul class="mx-auto gap-8">
                    <li class="inline-flex gap-2 w-52">
                        <i class=" place-content-center text-orange-500 fa-solid fa-wand-magic-sparkles"></i>
                        <h1>CARI SOLUSI</h1>
                    </li>
                    <li class="inline-flex gap-2 w-52">
                        <img width="18" src="https://d3sgbq9gctgf5o.cloudfront.net/footers/icon-3.png?format=auto" />
                        <h1 class="place-content-center">SKIN WIKI</h1>
                    </li>
                    <li class="inline-flex gap-2 w-52">
                        <i class=" place-content-center text-orange-500 fa-solid fa-calendar-days"></i>
                        <h1>BUAT JADWAL</h1>
                    </li>
                    <li class="inline-flex gap-2 w-52 mr-10">
                        <i class=" place-content-center text-orange-500 fa-solid fa-location-dot"></i>
                        <h1>CARI KLINIK & DOKTER</h1>
                    </li>
                    <li class="inline-flex gap-2 w-52">
                        <i class=" place-content-center text-orange-500 fa-brands fa-whatsapp"></i>
                        <h1>HUBUNGI KAMI</h1>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sm:hidden">
        <div class="fixed bottom-0 left-0 w-full bg-footer-floating-mobile z-40 shadow-md rounded-t-2xl">
            <div class="px-2 py-2">
                <ul class="flex">
                    <li class="flex flex-col gap-2">
                        <i class="text-center text-xs text-orange-500 fa-solid fa-wand-magic-sparkles"></i>
                        <h1 class="text-center text-orange-500 text-xs">CARI SOLUSI</h1>
                    </li>
                    <li class="flex flex-col gap-2 mt-1">
                        <img class="place-self-center" width="10" src="https://d3sgbq9gctgf5o.cloudfront.net/footers/icon-3.png?format=auto" />
                        <h1 class="text-center place-content-center text-orange-500 text-xs">SKIN WIKI</h1>
                    </li>
                    <li class="flex flex-col gap-2">
                        <i class="text-center text-xs text-orange-500 fa-solid fa-calendar-days"></i>
                        <h1 class="text-center text-orange-500 text-xs">BUAT JADWAL</h1>
                    </li>
                    <li class="flex flex-col gap-2">
                        <i class="text-center text-xs text-orange-500 fa-solid fa-location-dot"></i>
                        <h1 class="text-center text-orange-500 text-xs">CARI KLINIK & DOKTER</h1>
                    </li>
                    <li class="flex flex-col gap-2">
                        <i class="text-center text-xs text-orange-500 fa-brands fa-whatsapp"></i>
                        <h1 class="text-center text-orange-500 text-xs">HUBUNGI KAMI</h1>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        tailwind.config = {
            theme: {
                screens: {
                    'xs': { 'min': '240px', 'max': '639px' },
                    'sm': '640px',
                    'md': '768px',
                    'lg': '1024px',
                    'xl': '1280px',
                    '2xl': '1536px',
                }
            }
        }

        let swiper = new Swiper('.swiper-container-first', {
            slidesPerView: 2.5,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next-first',
                prevEl: '.swiper-button-prev-first',
            },
        });

        let swiper2 = new Swiper('.swiper-container-second', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination-second',
            },
        });

        let swiper3 = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        let swiper4 = new Swiper('.swiper-container-mobile', {
            slidesPerView: 2.5,
            spaceBetween: 20,
            loop: true,
        });

        function searchBarDesktop() {
            let header = document.getElementById('header');
        }

        $(document).ready(function() {
            $(window).on('scroll', function() {
                let header = $('#header');
                let headerMobile = $('#header-mobile');
                if ($(this).scrollTop() > 0) {
                    header.addClass("fixed top-0 left-0 z-50 shadow-md");
                    headerMobile.addClass("fixed top-0 left-0 z-50 shadow-md");
                } else {
                    header.removeClass("fixed top-0 left-0 z-50 shadow-md");
                    headerMobile.removeClass("fixed top-0 left-0 z-50 shadow-md");
                }
            });

            $("#trigger-search-bar, #button-trigger-search-bar").on("click", function () {
                $("#menu-bar-desktop").addClass("hidden")
                $("#logo-menu-bar-desktop").addClass("hidden")
                $("#search-bar-desktop").removeClass("hidden")
                $("#icon-search-bar-desktop").removeClass("hidden")
            })

            $("#close-search-bar-desktop").on("click", function () {
                $("#menu-bar-desktop").removeClass("hidden")
                $("#logo-menu-bar-desktop").removeClass("hidden")
                $("#search-bar-desktop").addClass("hidden")
                $("#icon-search-bar-desktop").addClass("hidden")
            })

            $("#trigger-search-bar-mobile").on("click", function () {
                $("#search-bar-mobile").removeClass("hidden")
                $("#logo-mobile").addClass("hidden")
            })

            $("#close-search-bar-mobile").on("click", function () {
                $("#search-bar-mobile").addClass("hidden")
                $("#logo-mobile").removeClass("hidden")
            })
            
            $("#trigger-menu-mobile").on("click", function () {
                $("#logo-mobile").addClass("hidden")
                $("#header-mobile-menu").removeClass("hidden")
            })

            $("#close-menu-mobile").on("click", function () {
                $("#header-mobile-menu").addClass("hidden")
                $("#logo-mobile").removeClass("hidden")
            })

            $("#trigger-submenu-1").on("click", function () {
                $("#logo-submenu-1-down").toggleClass("hidden")
                $("#logo-submenu-1-up").toggleClass("hidden")
                $("#submenu-1").toggleClass("hidden")
            })


        });
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> --}}
</body>
</html>