<section class="mt-20">
    <div class="container_width">
        <div class="grid grid-cols-12 gap-6 py-2 mt-5">
            <div class="col-span-12 lg:flex flex-wrap justify-center hidden gap-2 border-neutral-200">
                <div class="w-fit flex gap-1 items-center p-1 rounded-sm bg-primary1 border border-primary1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-5 object-cover rounded-full">
                    <a href="{{ route('cabinet.home') }}" class="text-neutral-50"> @lang($locale.'.posts') </a>
                </div>
                <div class="w-fit flex gap-1 items-center p-1 border rounded-sm border-primary1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-5 object-cover rounded-full">
                    <a href="{{route('cabinet.tickets.index')}}" class="hover_links"> @lang($locale.'.messages') </a>
                </div>
                <div class="w-fit flex gap-1 items-center p-1 border rounded-sm border-primary1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-5 object-cover rounded-full">
                    <a href="{{route('cabinet.favorites.index')}}" class="hover_links"> @lang($locale.'.favorites') </a>
                </div>
                <div class="w-fit flex gap-1 items-center p-1 border rounded-sm border-primary1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-5 object-cover rounded-full">
                    <a href="#" class="hover_links"> @lang($locale.'.comments')</a>
                </div>
                <div class="w-fit flex gap-1 items-center p-1 border rounded-sm border-primary1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-5 object-cover rounded-full">
                    <a href="#" class="hover_links"> @lang($locale.'.wallet')</a>
                </div>
                <div class="w-fit flex gap-1 items-center p-1 border rounded-sm border-primary1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-5 object-cover rounded-full">
                    <a href="{{ route('cabinet.profile.home') }}" class="hover_links"> @lang($locale.'.settings') </a>
                </div>
            </div>

            <!-- esi mobili jamanak  -->

            <div class="col-span-12 lg:hidden block">
                <div class="relative mt-5">
                    <button id="userProductsDropdownButton" class="flex items-center gap-4 bg-white sm:text-24 text-16 font-bold py-2 rounded-sm">
                        <!-- vor bajnum linenq et bajni anuny -->
                        Հայտարարություններ
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div id="userProductsDropdownMenu" class="absolute left-0 mt-2 w-fit px-2 bg-white z-40 border rounded-sm border-gray-200 hidden">
                        <a href="#" class="flex items-center gap-1 px-4 py-2 text-14">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="icon" class="w-6 h-6"> @lang($locale.'.posts')
                        </a>
                        <a href="#" class="flex items-center gap-1 px-4 py-2 text-14">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="icon" class="w-6 h-6"> @lang($locale.'.messages')
                        </a>
                        <a href="#" class="flex items-center gap-1 px-4 py-2 text-14">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="icon" class="w-6 h-6"> @lang($locale.'.comments')
                        </a>
                        <a href="#" class="flex items-center gap-1 px-4 py-2 text-14">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="icon" class="w-6 h-6"> @lang($locale.'wallet')
                        </a>
                        <a href="#" class="flex items-center gap-1 px-4 py-2 text-14">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="icon" class="w-6 h-6"> @lang($locale.'.settings')
                        </a>
                    </div>
                </div>
            </div>
