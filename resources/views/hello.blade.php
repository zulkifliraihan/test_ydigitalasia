<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Navigation Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .custom-swiper-button {
            @apply absolute top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md cursor-pointer;
            z-index: 10;
        }
        .custom-swiper-button-next {
            @apply right-0 -mr-6;
        }
        .custom-swiper-button-prev {
            @apply left-0 -ml-6;
        }
    </style>
</head>
<body>
    <div class="container mx-auto py-8 relative">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide bg-gray-300 p-4 rounded-lg">Card 1</div>
                <div class="swiper-slide bg-gray-300 p-4 rounded-lg">Card 2</div>
                <div class="swiper-slide bg-gray-300 p-4 rounded-lg">Card 3</div>
                <div class="swiper-slide bg-gray-300 p-4 rounded-lg">Card 4</div>
                <div class="swiper-slide bg-gray-300 p-4 rounded-lg">Card 5</div>
                <div class="swiper-slide bg-gray-300 p-4 rounded-lg">Card 6</div>
                <div class="swiper-slide bg-gray-300 p-4 rounded-lg">Card 7</div>
                <div class="swiper-slide bg-gray-300 p-4 rounded-lg">Card 8</div>
                <div class="swiper-slide bg-gray-300 p-4 rounded-lg">Card 9</div>
                <div class="swiper-slide bg-gray-300 p-4 rounded-lg">Card 10</div>
            </div>
        </div>
        <!-- Custom Navigation Buttons -->
        <div class="custom-swiper-button custom-swiper-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </div>
        <div class="custom-swiper-button custom-swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.custom-swiper-button-next',
                prevEl: '.custom-swiper-button-prev',
            },
        });
    </script>
</body>
</html>
