@extends('layouts.appfront')

@section('content')
    @vite('resources/css/app.css')


    <section class="w-full mt-10">
        <div class="container_width">
            <div class="w-full grid grid-cols-12 gap-2">
                <p class="col-span-12 text-14 text-neutral-700">@lang($locale.'.choose_category')</p>
                <div class="col-span-3 md:block hidden">
                    <ul class="px-2 py-2 flex flex-col gap-1 w-full border-r" >
                        @foreach($categoriesArray as $category)
                            @if($category['parent_id']==null)
                        <li id='{{$category['id']}}' class="w-full flex justify-between hover_links cursor-pointer" onclick="toggleDivShow(this)">
                            <p class="text-16 font-medium">{{$category['name_'.$locale]}}</p>
                            <svg class="w-5 h-5 -rotate-90 translate-y-[2px]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </li>@endif
                        @endforeach
                    </ul>

                </div>
                <div class="col-span-9 md:block hidden">
                    @foreach($categoriesArray as $category)
                    <div class="show-div w-full hidden flex-wrap gap-4" hover-div="hover-div" id="{{$category['id']}}">
                        @foreach($category['children'] as $children)
                        <div class="h-fit max-w-48">
                            <h4 class="title_h4">{{$children['name_'.$locale]}}</h4>
                            <div class="w-fit h-fit flex flex-col gap-1 mt-1">
                                @foreach($children['attributes'] as $attribute)
                                <a href="{{route('post')}}?id={{$attribute['id']}}" class="hover_links text-14 font-light text-neutral-700">{{$attribute['name_'.$locale]}}</a>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>

                <!-- esi mobilei jamank  -->
                <div class="col-span-12 md:hidden block">
                    <div class="w-full px-4">
                        <div class="border-b border-gray-200">
                            <button class="accordeon-add-product flex justify-between items-center w-full py-3 text-left font-medium text-gray-700 focus:outline-none">
                                <div class="w-fit flex items-center gap-1">
                                    <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-5 h-5 object-cover">
                                    <span>
                                        Item 1
                                    </span>
                                </div>
                                <svg class="accordion-icon w-5 h-5 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="accordion-content hidden px-4">
                                <div class="w-full flex flex-col gap-1">
                                    <h4 class="title_h4">bajni anuny</h4>
                                    <div class="ml-1 w-full flex flex-col">
                                        <a href="#" class="text-blue-600 text-14">dskmlsdv dsklvmlk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-gray-200">
                            <button class="accordeon-add-product flex justify-between items-center w-full py-3 text-left font-medium text-gray-700 focus:outline-none">
                                <div class="w-fit flex items-center gap-1">
                                    <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-5 h-5 object-cover">
                                    <span>
                                        Item 1
                                    </span>
                                </div>
                                <svg class="accordion-icon w-5 h-5 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="accordion-content hidden px-4">
                                <div class="w-full flex flex-col gap-1">
                                    <h4 class="title_h4">bajni anuny</h4>
                                    <div class="ml-1 w-full flex flex-col">
                                        <a href="#" class="text-blue-600 text-14">dskmlsdv dsklvmlk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-gray-200">
                            <button class="accordeon-add-product flex justify-between items-center w-full py-3 text-left font-medium text-gray-700 focus:outline-none">
                                <div class="w-fit flex items-center gap-1">
                                    <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-5 h-5 object-cover">
                                    <span>
                                        Item 1
                                    </span>
                                </div>
                                <svg class="accordion-icon w-5 h-5 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="accordion-content hidden px-4">
                                <div class="w-full flex flex-col gap-1">
                                    <h4 class="title_h4">bajni anuny</h4>
                                    <div class="ml-1 w-full flex flex-col">
                                        <a href="#" class="text-blue-600 text-14">dskmlsdv dsklvmlk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>


        function toggleDivShow(listItem) {
            // Get the ID of the clicked list item
            const id = listItem.id;

            // Hide all divs with the 'show-div' class
            document.querySelectorAll('.show-div').forEach(div => {
                div.classList.add('hidden');
            });

            // Show the div with the matching ID
            const relatedDiv = document.querySelector(`.show-div[id="${id}"]`);
            if (relatedDiv) {
                relatedDiv.classList.remove('hidden');
                relatedDiv.classList.add('flex');
            }
        }

        document.querySelectorAll('.accordeon-add-product').forEach((header) => {
            header.addEventListener('click', () => {
                const accordionContent = header.nextElementSibling;
                const accordionIcon = header.querySelector('.accordion-icon');

                // Toggle the content
                if (accordionContent.classList.contains('hidden')) {
                    accordionContent.classList.remove('hidden');
                    accordionIcon.classList.add('rotate-180'); // Rotate the icon
                } else {
                    accordionContent.classList.add('hidden');
                    accordionIcon.classList.remove('rotate-180'); // Reset the icon rotation
                }
            });
        });
    </script>

@endsection

@extends('layouts.footer')
