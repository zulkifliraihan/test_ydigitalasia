<header id="header" class="px-64 w-full bg-white xs:hidden">
    <div class="grid grid-cols-5 gap-4">
        <div class="w-24 my-auto">
            <img class="w-full my-4" src="https://d3sgbq9gctgf5o.cloudfront.net/general/logo.png?format=auto"/>
        </div>  

        <ul id="menu-bar-desktop" class="col-span-3 flex text-nowrap ">
            <li class="border-menu-active mx-3 flex">
                <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" data-dropdown-trigger="hover" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-600 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0">
                    Company
                    <i class="ml-2 text-orange-500 fa-solid fa-chevron-down"></i>
                </button>
                <div id="mega-menu-dropdown" class="absolute z-10 hidden w-auto text-sm bg-white border border-gray-100 rounded-lg shadow-md">
                    <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                        <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                            <li class="mb-2">
                                <h1 class="text-base text-orange-500 font-bold">Acne Center</h1>
                                <h1 class="text-base text-gray-500">Kulit Jerawat & Bekas Jerawat</h1>
                            </li>
                            <li class="mb-2">
                                <h1 class="text-base text-gray-600 font-bold">Acne Center</h1>
                                <h1 class="text-base text-gray-500">Kulit Kendur & Garis Halus</h1>
                            </li>
                            <li class="mb-2">
                                <h1 class="text-base text-gray-600 font-bold">Acne Center</h1>
                                <h1 class="text-base text-gray-500">Kulit Kusam & Noda Hitam</h1>
                            </li>
                            <li class="mb-2">
                                <h1 class="text-base text-gray-600 font-bold">Acne Center</h1>
                                <h1 class="text-base text-gray-500">Rambut Rontok & Botak</h1>
                            </li>
                            <li class="mb-2">
                                <h1 class="text-base text-gray-600 font-bold">Acne Center</h1>
                                <h1 class="text-base text-gray-500">Bentuk Wajah & Badan Kurang Ideal</h1>
                            </li>
                            <li class="mb-2">
                                <h1 class="text-base text-gray-600 font-bold">Acne Center</h1>
                                <h1 class="text-base text-gray-500">Dermatitis Atopik & Penyakit Kulit</h1>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="border-menu mx-3 flex">
                <a href="google.com" class="place-content-center">
                    <h1 class="text-gray-600 font-semibold">
                        Promo Spesial
                    </h1>
                </a>
            </li>
            <li class="border-menu mx-3 flex">
                <a href="google.com" class="place-content-center">
                    <h1 class="text-gray-600 font-semibold">
                        Kisah ERHA
                    </h1>
                </a>
            </li>
            <li class="border-menu mx-3 flex">
                <a href="google.com" class="place-content-center">
                    <h1 class="text-gray-600 font-semibold">
                        Info Terkini
                    </h1>
                </a>
            </li>
        </ul>
        <div id="logo-menu-bar-desktop" class="place-content-center">
            <div class="flex">
                <div class="w-40 gap-4 mr-4">
                    <input id="trigger-search-bar" type="text" name="search" value="" class="p-0 input-search" placeholder="Pencarian">
                </div>
                <button id="button-trigger-search-bar">
                    <i class="mr-3 text-2xl my-auto content-center fa-solid fa-magnifying-glass"></i>
                </button>
                <i class="text-2xl w-8 h-8 my-auto content-center fa-solid fa-user"></i>
            </div>
        </div>
        
        <!-- Tampilan ketika search icon di klik dan muncul search bar -->
        <div id="search-bar-desktop" class="hidden col-span-3 -ml-20 flex">
            <button id="close-search-bar-desktop">
                <i class="my-auto text-lg mr-4 fa-solid fa-xmark"></i>
            </button>
            <input type="text" class="w-full my-auto pl-0 border-b-1 border-x-0 border-t-0 border-gray-700" placeholder="Pencarian" />
        </div>
        <div id="icon-search-bar-desktop" class="hidden place-content-center">
            <div class="flex">
                <i class="text-2xl w-8 h-8 mr-3 my-auto text-center content-center text-white bg-orange-500 rounded-full fa-solid fa-magnifying-glass"></i>
                <i class="text-2xl w-8 h-8 my-auto content-center fa-solid fa-user"></i>
            </div>                
        </div>
    </div>
</header>