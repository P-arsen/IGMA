@extends('layouts.appfront')

@section('content')


<!-- header-y stexx -->

<section class="bg-white py-4">
    <div class="container_width">
        <div class="relative w-full">

            <h1 class="title_h1 lg:mb-8 mb-4 mt-4">Անշարժ գույք</h1>
            <!-- productneri ev filtri wrapper  -->
            <div class="flex lg:flex-row flex-col lg:gap-6 gap-2 ">

                <!-- filter section -->
                 <!-- es taki div-n u button-i haytnvum en poqri jamanak -->
                <div class="w-full py-1 lg:hidden block border-t pt-2">
                    <button id="openFilter" class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 512 512"><path d="M3.9 54.9C10.5 40.9 24.5 32 40 32l432 0c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9 320 448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6l0-79.1L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"/></svg> Ֆիլտրեր</button>
                </div>

                <!-- himnakan filtri container  -->
                <div id="filterContainer" class="w-full h-full lg:relative absolute top-0 bg-white z-40 lg:max-w-[300px] lg:translate-x-0 md:-translate-x-[calc(100%+40px)] -translate-x-[calc(100%+16px)] transition-all duration-300">
                    <div class="w-full h-14 bg-white border-b pb-2 flex justify-between lg:hidden">
                        <button id="closeFilter" class="text-48 -translate-y-1 text-blue-600">&times;</button>
                        <button id="logFiltersButton" class="text-blue-600 text-16 font-medium">Կիրառել</button>
                    </div>
                    <h3 class="text-xl font-bold lg:mt-0 mt-4">Ֆիլտրեր</h3>
                    <div class="relative border-b pb-4 mt-4 lg:shadow-none shadow-sm lg:rounded-none rounded-md lg:p-0 p-2">
                        <button
                            class="w-full text-left bg-white rounded-lg shadow-sm px-4 py-2 flex items-center justify-between focus:outline-none"
                            id="filterButton"
                            aria-expanded="false">
                            <span>Տարածաշրջան</span>
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div id="filterDropdown" class="hidden absolute z-10 mt-1 w-full bg-white rounded-lg shadow-lg">
                            <div class="p-4 max-h-64 overflow-y-auto">
                                <!-- Region 1: Երևան -->
                                <div>
                                    <label class="block font-semibold text-gray-700">
                                        <input type="checkbox" class="mr-2 rounded text-blue-600 focus:ring-blue-500 region-checkbox" data-region="yerevan" value="yerevan">
                                        Երևան
                                    </label>
                                    <div class="pl-6 mt-2">
                                        <label class="block text-gray-700">
                                            <input type="checkbox" class="mr-2 rounded text-blue-600 focus:ring-blue-500 subregion-checkbox" data-region="yerevan" value="kentron">
                                            Կենտրոն
                                        </label>
                                        <label class="block text-gray-700">
                                            <input type="checkbox" class="mr-2 rounded text-blue-600 focus:ring-blue-500 subregion-checkbox" data-region="yerevan" value="ajapnyak">
                                            Աջափնյակ
                                        </label>
                                        <label class="block text-gray-700">
                                            <input type="checkbox" class="mr-2 rounded text-blue-600 focus:ring-blue-500 subregion-checkbox" data-region="yerevan" value="arabkir">
                                            Արաբկիր
                                        </label>
                                    </div>
                                </div>
                                <!-- Region 2: Արարատ -->
                                <div class="mt-4">
                                    <label class="block font-semibold text-gray-700">
                                        <input type="checkbox" class="mr-2 rounded text-blue-600 focus:ring-blue-500 region-checkbox" data-region="ararat" value="ararat">
                                        Արարատ
                                    </label>
                                    <div class="pl-6 mt-2">
                                        <label class="block text-gray-700">
                                            <input type="checkbox" class="mr-2 rounded text-blue-600 focus:ring-blue-500 subregion-checkbox" data-region="ararat" value="masis">
                                            Մասիս
                                        </label>
                                        <label class="block text-gray-700">
                                            <input type="checkbox" class="mr-2 rounded text-blue-600 focus:ring-blue-500 subregion-checkbox" data-region="ararat" value="artashat">
                                            Արտաշատ
                                        </label>
                                    </div>
                                </div>
                                <!-- Добавь остальные регионы и подрегионы здесь -->
                            </div>
                            <div class="flex justify-between p-4 border-t border-gray-300">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none" id="selectButton">Ընտրել</button>
                                <button class="text-gray-500 px-4 py-2 rounded-lg hover:text-gray-700 focus:outline-none" id="clearButton">Ջնջել</button>
                            </div>
                        </div>
                    </div>

                    <!-- Radio Buttons Section -->
                    <div class="mt-4 w-full lg:shadow-none shadow-md lg:rounded-none rounded-md lg:p-0 p-2">
                        <h3 class="text-xl font-bold">Ընտրություն</h3>
                        <div class="w-full flex flex-col gap-2 mt-3">
                            <label class="inline-flex items-center ">
                                <input type="radio" class="form-radio text-blue-600 choice-radio" name="choice" value="Անհատ">
                                <span class="ml-2">Անհատ</span>
                            </label>
                            <label class="inline-flex items-center ">
                                <input type="radio" class="form-radio text-blue-600 choice-radio" name="choice" value="Գործակալություն">
                                <span class="ml-2">Գործակալություն</span>
                            </label>
                        </div>
                    </div>

                    <!-- Price Section -->
                    <div class="w-full lg:max-w-[300px] mt-4 lg:shadow-none shadow-md lg:rounded-none rounded-md lg:p-0 p-2">
                        <h3 class="text-xl font-bold">Գին</h3>
                        <div class="flex items-center gap-2 mt-2">
                            <input type="number" class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Սկսած" id="priceFrom">
                            <input type="number" class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Մինչև" id="priceTo">
                        </div>
                        <div class="mt-2">
                            <label class="text-gray-700 flex justify-between items-center gap-4">
                                Տարադրամ
                                <select class="mt-1 w-full px-2 py-1 border-b rounded-sm bg-transparent" id="currencySelect">
                                    <option value="USD">$ (USD)</option>
                                    <option value="AMD">֏ (AMD)</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="mt-4 lg:flex hidden justify-between gap-2 border-b pb-4">
                        <button id="clearAllFiltersButton" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 focus:outline-none">
                            maqrel
                        </button>
                        <button id="logFiltersButton" class="bg-blue-600 text-white px-3 py-1 rounded-md hover:bg-blue-700 focus:outline-none transition-all">
                            Ֆիլտրեl
                        </button>
                    </div>

                    <!-- Bajinner -->

                    <div class="w-full flex flex-col gap-2 mt-4 shadow-md lg:p-0 p-2">
                        <!-- amen bajiny ira anunov u linkerov -->
                        <div class="flex flex-col gap-1">
                            <h3 class="title_h3">Bajni anun</h3>
                            <a href="#" class="hover_links">Linky</a>
                            <a href="#" class="hover_links">Linky</a>
                            <a href="#" class="hover_links">Linky</a>
                            <a href="#" class="hover_links">Linky</a>
                            <a href="#" class="hover_links">Linky</a>
                            <a href="#" class="hover_links">Linky</a>
                            <a href="#" class="hover_links">Linky</a>

                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="title_h3">Bajni anun</h3>
                            <a href="#" class="hover_links">Linky</a>
                            <a href="#" class="hover_links">Linky</a>
                            <a href="#" class="hover_links">Linky</a>
                            <a href="#" class="hover_links">Linky</a>
                            <a href="#" class="hover_links">Linky</a>
                            <a href="#" class="hover_links">Linky</a>
                            <a href="#" class="hover_links">Linky</a>

                        </div>
                    </div>
                </div>
                <!-- productneri wrapper-->
                <div class="w-full flex flex-col">

                <!-- productneri hatvats stex vor es taki divy ira amboxjutyamb nuyny nkares aranc class= bg-green-100-i kstacvi sovorakan haytararutyunneri hamar  -->
                    <div class="w-full flex flex-col gap-2 bg-green-100 rounded-md sm:p-4 p-1">
                        <h3 class="title_h3">Թոփ հայտարարություններ</h3>
                            <!-- products container -->
                            <div class="w-full grid md:grid-cols-minmax220 grid-cols-12 sm:gap-4 gap-2">
                                <!-- product card  -->


                                <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                        </div>
                                        <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                   <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                    </div>
                                </a>



                                <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                        </div>
                                        <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                   <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                    </div>
                                </a>
                                <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                        </div>
                                        <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                   <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                    </div>
                                </a>
                                <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                        </div>
                                        <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                        <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                    </div>
                                </a>
                                <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                        </div>
                                        <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                   <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                    </div>
                                </a>
                                <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                        </div>
                                        <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                   <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                    </div>
                                </a>
                                <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                        </div>
                                        <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                   <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <div class="w-full flex flex-col gap-2 rounded-md sm:p-4 p-1">
                        <h3 class="title_h3">հայտարարություններ</h3>
                        <!-- products container -->
                        <div class="w-full grid md:grid-cols-minmax220 grid-cols-12 sm:gap-4 gap-2">
                            <!-- product card  -->


                            <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                <div class="w-full h-full">
                                    <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                </div>
                                <div class="w-full h-fit">
                                    <p class="md:text-24 text-16 font-semibold">1550 </p>
                                    <div class="flex gap-2 flex-wrap">
                                        <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                        <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                    </div>
                                    <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                    <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                </div>
                            </a>



                            <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                <div class="w-full h-full">
                                    <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                </div>
                                <div class="w-full h-fit">
                                    <p class="md:text-24 text-16 font-semibold">1550 </p>
                                    <div class="flex gap-2 flex-wrap">
                                        <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                        <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                    </div>
                                    <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                    <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                </div>
                            </a>
                            <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                <div class="w-full h-full">
                                    <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                </div>
                                <div class="w-full h-fit">
                                    <p class="md:text-24 text-16 font-semibold">1550 </p>
                                    <div class="flex gap-2 flex-wrap">
                                        <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                        <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                    </div>
                                    <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                    <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                </div>
                            </a>
                            <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                <div class="w-full h-full">
                                    <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                </div>
                                <div class="w-full h-fit">
                                    <p class="md:text-24 text-16 font-semibold">1550 </p>
                                    <div class="flex gap-2 flex-wrap">
                                        <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                        <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                    </div>
                                    <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                    <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                </div>
                            </a>
                            <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                <div class="w-full h-full">
                                    <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                </div>
                                <div class="w-full h-fit">
                                    <p class="md:text-24 text-16 font-semibold">1550 </p>
                                    <div class="flex gap-2 flex-wrap">
                                        <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                        <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                    </div>
                                    <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                    <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                </div>
                            </a>
                            <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                <div class="w-full h-full">
                                    <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                </div>
                                <div class="w-full h-fit">
                                    <p class="md:text-24 text-16 font-semibold">1550 </p>
                                    <div class="flex gap-2 flex-wrap">
                                        <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                        <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                    </div>
                                    <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                    <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                </div>
                            </a>
                            <a href="{{route('product')}}" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-md overflow-hidden flex flex-col">
                                <div class="w-full h-full">
                                    <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                </div>
                                <div class="w-full h-fit">
                                    <p class="md:text-24 text-16 font-semibold">1550 </p>
                                    <div class="flex gap-2 flex-wrap">
                                        <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                        <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-md rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                    </div>
                                    <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                    <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>



<script>
   document.addEventListener('DOMContentLoaded', () => {
    const filterButton = document.getElementById('filterButton');
    const filterDropdown = document.getElementById('filterDropdown');
    const selectButton = document.getElementById('selectButton');
    const clearButton = document.getElementById('clearButton');
    const logFiltersButton = document.getElementById('logFiltersButton');
    const clearAllFiltersButton = document.getElementById('clearAllFiltersButton');
    const choiceRadios = document.querySelectorAll('.choice-radio');
    const priceFrom = document.getElementById('priceFrom');
    const priceTo = document.getElementById('priceTo');
    const currencySelect = document.getElementById('currencySelect');
    const filterContainer = document.getElementById('filterContainer');
    const openFilter = document.getElementById('openFilter');
    const closeFilter = document.getElementById('closeFilter');
    const header = document.getElementById('header');

    if (filterButton && filterDropdown) {
        filterButton.addEventListener('click', (e) => {
            e.stopPropagation();
            const expanded = filterButton.getAttribute('aria-expanded') === 'true' || false;
            filterButton.setAttribute('aria-expanded', !expanded);
            filterDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!filterDropdown.classList.contains('hidden') && !filterDropdown.contains(e.target) && !filterButton.contains(e.target)) {
                filterDropdown.classList.add('hidden');
                filterButton.setAttribute('aria-expanded', 'false');
            }
        });

        filterDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });

        filterDropdown.addEventListener('change', (e) => {
            const target = e.target;
            if (target.classList.contains('region-checkbox')) {
                const region = target.dataset.region;
                const relatedSubregions = document.querySelectorAll(`.subregion-checkbox[data-region="${region}"]`);
                relatedSubregions.forEach(subregionCheckbox => {
                    subregionCheckbox.checked = target.checked;
                });
            } else if (target.classList.contains('subregion-checkbox')) {
                const region = target.dataset.region;
                const relatedRegionCheckbox = document.querySelector(`.region-checkbox[data-region="${region}"]`);
                const relatedSubregions = document.querySelectorAll(`.subregion-checkbox[data-region="${region}"]`);
                const allChecked = Array.from(relatedSubregions).every(subregion => subregion.checked);
                relatedRegionCheckbox.checked = allChecked;
            }
        });

        if (selectButton) {
            selectButton.addEventListener('click', () => {
                const selectedRegions = Array.from(document.querySelectorAll('.region-checkbox:checked')).map(cb => cb.value);
                const selectedSubregions = Array.from(document.querySelectorAll('.subregion-checkbox:checked')).map(cb => cb.value);

                console.log('Selected Regions:', selectedRegions);
                console.log('Selected Subregions:', selectedSubregions);

                filterDropdown.classList.add('hidden');
                filterButton.setAttribute('aria-expanded', 'false');
            });
        }

        if (clearButton) {
            clearButton.addEventListener('click', () => {
                const checkboxes = document.querySelectorAll('.region-checkbox, .subregion-checkbox');
                checkboxes.forEach(cb => cb.checked = false);

                console.log('All selections cleared');

                filterDropdown.classList.add('hidden');
                filterButton.setAttribute('aria-expanded', 'false');
            });
        }

        // Обработчик для кнопки логирования фильтров
        if (logFiltersButton) {
            logFiltersButton.addEventListener('click', () => {
                const selectedRegions = Array.from(document.querySelectorAll('.region-checkbox:checked')).map(cb => cb.value);
                const selectedSubregions = Array.from(document.querySelectorAll('.subregion-checkbox:checked')).map(cb => cb.value);
                const selectedChoice = document.querySelector('.choice-radio:checked')?.value;
                const priceStart = priceFrom.value;
                const priceEnd = priceTo.value;
                const selectedCurrency = currencySelect.value;

                console.log('Selected Regions:', selectedRegions);
                console.log('Selected Subregions:', selectedSubregions);
                console.log('Selected Choice:', selectedChoice);
                console.log('Price From:', priceStart);
                console.log('Price To:', priceEnd);
                console.log('Selected Currency:', selectedCurrency);
            });
        }

        // Обработчик для кнопки очистки всех фильтров
        if (clearAllFiltersButton) {
            clearAllFiltersButton.addEventListener('click', () => {
                const checkboxes = document.querySelectorAll('.region-checkbox, .subregion-checkbox');
                checkboxes.forEach(cb => cb.checked = false);

                choiceRadios.forEach(radio => radio.checked = false);

                priceFrom.value = '';
                priceTo.value = '';
                currencySelect.value = 'USD';

                console.log('All filters cleared');

                // Закрываем фильтр
                filterDropdown.classList.add('hidden');
                filterButton.setAttribute('aria-expanded', 'false');
            });
        }

        choiceRadios.forEach(radio => {
            radio.addEventListener('change', (e) => {
                console.log('Selected choice:', e.target.value);
            });
        });

        priceFrom.addEventListener('input', () => {
            console.log('Цена от:', priceFrom.value);
        });

        priceTo.addEventListener('input', () => {
            console.log('Цена до:', priceTo.value);
        });

        currencySelect.addEventListener('change', () => {
            console.log('Выбранная валюта:', currencySelect.value);
        });
    }

    openFilter.addEventListener('click', () => {
        filterContainer.classList.remove('md:-translate-x-[calc(100%+40px)]', '-translate-x-[calc(100%+16px)]');
        // header.classList.add('hidden');
    });

    closeFilter.addEventListener('click', () => {
        filterContainer.classList.add('md:-translate-x-[calc(100%+40px)]', '-translate-x-[calc(100%+16px)]');
        // header.classList.remove('hidden');
    });
});

</script>
@endsection

