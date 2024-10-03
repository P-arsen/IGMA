@extends('layouts.appfront')


@section('content')

    <main class="w-full flex flex-col gap-4 justify-center items-center mt-16">

        <!-- mobaili jamanak stexa haytnvum avelacnel haytararutyuny u koxqic bacvox menun   -->
        <div class="w-full">
            <div id="mobile_menu" class="w-full h-screen bg-black/50 absolute -translate-x-full z-40 transition-all duration-300">
                <div class='w-full max-w-96 h-full overflow-y-auto pb-6 bg-white'>
                    <div class="w-full flex justify-end px-4">
                        <button id="closeMenu" class="mt-2 translate-x-1">
                            <svg class="w-8 rotate-45" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="448,224 288,224 288,64 224,64 224,224 64,224 64,288 224,288 224,448 288,448 288,288 448,288 "/></svg>
                        </button>
                    </div>
                    <div class="w-full px-4">
                        @foreach($categoriesArray as $categorysingle)
                            <div class="border-b border-gray-200">
                                <button class="accordion-header flex justify-between items-center w-full py-3 text-left font-medium text-gray-700 focus:outline-none">
                                    <div class="w-fit flex items-center gap-1">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-5 h-5 object-cover">
                                        <span>
                                            {{$categorysingle['name_'.$locale]}}
                                        </span>
                                    </div>
                                    <svg class="accordion-icon w-5 h-5 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="accordion-content hidden px-4">

                                    @foreach($categorysingle['children'] as $sub_category)
                                    <div class="w-full flex flex-col gap-1">
                                        <h4 class="title_h4">{{$sub_category['name_'.$locale]}}</h4>
                                        <div class="ml-1 w-full flex flex-col">
                                            @foreach($sub_category['attributes'] as $children)
                                            <a href="#" class="text-blue-600 text-14">{{$children['name_'.$locale]}}</a>
                                            @endforeach
                                        </div>
                                    </div>@endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="container_width flex justify-between gap-2 pt-4">
                <button id="openMenu" class="pasiv_button w-full max-w-40 text-center lg:hidden block">@lang($locale.'.categories')</button>
                <a href="#" class="active_button sm:w-fit w-full sm:max-w-none max-w-40 flex-shrink-0 items-center justify-center gap-1 !px-2  lg:hidden flex">
                    <svg class="w-6" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:4px;}</style></defs><title/><g id="plus"><line class="cls-1" x1="16" x2="16" y1="7" y2="25"/><line class="cls-1" x1="7" x2="25" y1="16" y2="16"/></g></svg>
                    @lang($locale.'.add')
                    <span class="sm:block hidden"> @lang($locale.'.post')</span>
                </a>

            </div>
        </div>

        <!-- headeri taki linker -->
        <section class="w-full">
            <div class="container_width py-1 flex justify-between items-center mt-2 gap-2 overflow-hidden overflow-x-auto scrollbar-hidden">
                @foreach($active_categories as $active_category)
                    <a href="#" class="w-32 h-20 relative bg-neutral-200 transition-all duration-300 rounded-sm hover:scale-[1.05] flex flex-col gap-1 flex-shrink-0 overflow-hidden">
                        <p class="max-w-[90%] text-neutral-900 absolute top-1 left-1 font-medium z-10">{{$active_category['name_'.$locale]}}</p>
                        <img src="{{asset('storage/'.$active_category['icon'])}}" alt="" class="w-[70%] h-[70%] absolute bottom-0 right-0   object-cover">
                    </a>
                @endforeach



            </div>
        </section>

        <!-- biznes ejer  -->

        <section class="w-full">
            <div class="container_width">

                <a href="{{route('business')}}" class="title_h3 mb-2 hover_links w-fit flex gap-2 items-center group/title text-neutral-900">
                    @lang($locale.'.businese_page')
                    <svg class="w-6 h-6 text-gray-500 -rotate-90 stroke-neutral-900      group-hover/title:stroke-primary2 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
            </div>
            <div class="container_width py-1 flex justify-between items-center mt-2 gap-2 overflow-hidden overflow-x-auto scrollbar-hidden">
                @foreach($busineses as $businese)
                    <a href="{{route('business/current', ['id' => $businese->id]) }}" class="w-28 h-28 relative bg-neutral-200 shadow-sm shadow-primary2 transition-all duration-300 rounded-md hover:scale-[1.05] flex-shrink-0 overflow-hidden">
                        <img src="{{asset('storage/'.$businese['image'])}}" alt="" class="w-full h-full object-cover">
                    </a>
                @endforeach
            </div>
        </section>

        <!-- produktnery nerkayacnox section -->
        @foreach($active_attributes as $active_attribute)
            <section class="w-full mt-2">
                <div class="container_width flex flex-col gap-1">
                    <a href="#" class="title_h3 mb-2 hover_links w-fit flex gap-2 items-center group/title text-neutral-900">
                        {{$active_attribute['name_'.$locale]}}
                        <svg class="w-6 h-6 text-gray-500 -rotate-90 stroke-neutral-900      group-hover/title:stroke-primary2 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>

                    <!-- producti containery taki divna: mejy arden qartery -->

                    <div class="w-full grid md:grid-cols-minmax220 grid-cols-12 sm:gap-4 gap-2">

                        <!-- producti qarty: a tegi meja obshi qarty vor href-i mej miangamic linky dnes vor ejy baci -->

                        <a href="#" class="w-full h-fit cart_hover md:col-span-1 col-span-6 bg-neutral-100 border border-primary2 border-opacity-20 p-1 rounded-sm overflow-hidden flex flex-col">
                            <div class="w-full h-full">
                                <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-sm">
                            </div>
                            <div class="w-full h-fit px-1">
                                <p class="md:text-24 text-16 font-semibold text-neutral-900">1550</p>
                                <p class="sm:text-16 text-14 text-neutral-600 line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                            </div>
                        </a>
                        <!--  -->
                        <a href="#" class="w-full h-fit cart_hover md:col-span-1 col-span-6 bg-neutral-100 border border-primary2 border-opacity-20 p-1 rounded-sm overflow-hidden flex flex-col">
                            <div class="w-full h-full">
                                <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-sm">
                            </div>
                            <div class="w-full h-fit px-1">
                                <p class="md:text-24 text-16 font-semibold text-neutral-900">1550 </p>
                                <p class="sm:text-16 text-14 text-neutral-600 line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                            </div>
                        </a>
                        <a href="#" class="w-full h-fit cart_hover md:col-span-1 col-span-6 bg-neutral-100 border border-primary2 border-opacity-20 p-1 rounded-sm overflow-hidden flex flex-col">
                            <div class="w-full h-full">
                                <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-sm">
                            </div>
                            <div class="w-full h-fit px-1">
                                <p class="md:text-24 text-16 font-semibold text-neutral-900">1550 </p>
                                <p class="sm:text-16 text-14 text-neutral-600 line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                            </div>
                        </a>
                        <a href="#" class="w-full h-fit cart_hover md:col-span-1 col-span-6 bg-neutral-100 border border-primary2 border-opacity-20 p-1 rounded-sm overflow-hidden flex flex-col">
                            <div class="w-full h-full">
                                <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-sm">
                            </div>
                            <div class="w-full h-fit px-1">
                                <p class="md:text-24 text-16 font-semibold text-neutral-900">1550 </p>
                                <p class="sm:text-16 text-14 text-neutral-600 line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                            </div>
                        </a>
                        <a href="#" class="w-full h-fit cart_hover md:col-span-1 col-span-6 bg-neutral-100 border border-primary2 border-opacity-20 p-1 rounded-sm overflow-hidden flex flex-col">
                            <div class="w-full h-full">
                                <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-sm">
                            </div>
                            <div class="w-full h-fit px-1">
                                <p class="md:text-24 text-16 font-semibold text-neutral-900">1550 </p>
                                <p class="sm:text-16 text-14 text-neutral-600 line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                            </div>
                        </a>

                    </div>
                </div>
            </section>
        @endforeach



    </main>
            <div class="container_width flex justify-between gap-2 pt-4">
                <button id="openMenu" class="pasiv_button w-full max-w-40 text-center lg:hidden block">@lang($locale . '.categories')</button>
                <a href="#" class="active_button sm:w-fit w-full sm:max-w-none max-w-40 flex-shrink-0 items-center justify-center gap-1 !px-2  lg:hidden flex">
                    <svg class="w-6" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:4px;}</style></defs><title/><g id="plus"><line class="cls-1" x1="16" x2="16" y1="7" y2="25"/><line class="cls-1" x1="7" x2="25" y1="16" y2="16"/></g></svg>
                    @lang($locale.'.add')
                    <span class="sm:block hidden"> {{$locale.'.post'}}</span>
                </a>

            </div>
@endsection
