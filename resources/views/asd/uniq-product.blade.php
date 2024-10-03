<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/app.css')
    </head>
    <body>


    <header id="header" class="w-full relative bg-white">
            <div class="w-full h-16 fixed top-0 z-50 bg-white border-b">
                <!-- <div>Mobile menu</div> -->

                <div class="container_width h-full grid grid-cols-12 gap-2">
                    <a href="#" class="w-full col-span-2 h-full">
                        <div class="h-full flex items-center"> 
                            Logo
                        </div>   
                    </a>
                        
                    <div class="col-span-10 h-full flex sm:gap-3 gap-2 items-center justify-end"> 
                        <!-- Bajinner div  -->
                        <div class="w-fit h-full lg:flex items-center hidden">
                            <div id="headerMenu" class="group/bajin hover:text-primary2 cursor-pointer text-neutral-900 transition-all duration-300 w-fit py-1 px-2 flex items-center gap-1 border" id="menu" onmouseenter="showMenuOnHover()">
                                <svg class="group-hover/bajin:stroke-primary2 stroke-black transition-all duration-300" width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H14M4 18H9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Բաժիններ
                            </div>
                            <div id="menuItems" class="absolute left-0 top-full hidden w-full h-screen justify-center lg:px-16 md:px-10 px-4">
                                <div class="w-full z-40 h-[80%] max-w-xxl rounded-b-sm bg-white">
                                    <div class="bg-white w-full h-full flex gap-2 rounded-b-md">
                                        <ul class="px-2 py-2 flex flex-col gap-1 min-w-72 h-full border-r">
                                            <li class="w-full flex justify-between hover_links" id="1" onmouseenter="toggleDivVisibility(this)">
                                                <a href="#" class="text-16 font-medium">Bnakaranner</a>
                                                <svg class="w-6 h-6 -rotate-90 translate-y-[2px]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg> 
                                            </li>
                                            <li class="w-full flex justify-between hover_links" id="2" onmouseenter="toggleDivVisibility(this)">
                                                <a href="#" class="text-16 font-medium">Bnakaranner</a>
                                                <svg class="w-6 h-6 -rotate-90 translate-y-[2px]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg> 
                                            </li>
                                        </ul>

                                        <div class="w-full">
                                            <div class="toggle-div w-full flex flex-wrap gap-4" hover-div="hover-div" id="1">
                                                <div class="h-fit max-w-56">
                                                    <h4 class="title_h4">Երկարաժամկետ վարձակալություն</h4>
                                                    <div class="w-fit h-fit flex flex-col gap-1 mt-1">
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="toggle-div w-full flex flex-wrap gap-4" hover-div="hover-div" id="2">
                                                <div class="h-fit max-w-56">
                                                    <h4 class="title_h4">Երկարաժամկետ վարձակալություն</h4>
                                                    <div class="w-fit h-fit flex flex-col gap-1 mt-1">
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                    </div>
                                                </div>
                                                <div class="h-fit max-w-56">
                                                    <h4 class="title_h4">Երկարաժամկետ վարձակալություն</h4>
                                                    <div class="w-fit h-fit flex flex-col gap-1 mt-1">
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                        <a href="#" class="hover_links text-14 font-light text-neutral-700">Բնակարաններ</a>
                                                    </div>
                                                            
                                                </div>
                                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id='menuBackground' class="bg-black/50 w-full h-full absolute z-30 left-0 top-0"></div>
                            </div>
                        </div>

                        <!-- search input  -->
                         <div class="w-full h-full items-center lg:flex hidden">
                            <input id="searchInput" type="text" class="w-full py-1 rounded-sm px-2 border border-primary2" placeholder="Որոնում">
                            <div id="searchModal" class="absolute left-0 top-full hidden w-full h-screen justify-center lg:px-16 md:px-10 px-4 z-40">
                                <div class="w-full z-40 h-fit max-w-screen-xxl flex justify-center rounded-b-sm bg-transparent">
                                    <div class="w-[720px] max-h-[460px] overflow-y-auto bg-white px-2 pt-2 py-2 flex flex-col gap-1 rounded-b-sm">
                                        <a href="#" class="w-full h-32 flex gap-2 hover:scale-[1.01] transition-all duration-300 border-y py-1">
                                            <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full max-w-[30%]">
                                            <div class="w-full h-full">
                                                <h4 class="title_h4 line-clamp-3 opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quibusdam dolores qui, natus vero omnis veniam! Ipsum fugit non quis quas esse necessitatibus ea.</h4>
                                                <p class="title_h3">2450</p>
                                            </div>
                                        </a>
                                        <a href="#" class="w-full h-32 flex gap-2 hover:scale-[1.01] transition-all duration-300 border-y py-1">
                                            <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full max-w-[30%]">
                                            <div class="w-full h-full">
                                                <h4 class="title_h4 line-clamp-3 opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quibusdam dolores qui, natus vero omnis veniam! Ipsum fugit non quis quas esse necessitatibus ea.</h4>
                                                <p class="title_h3">2450</p>
                                            </div>
                                        </a>
                                        <a href="#" class="w-full h-32 flex gap-2 hover:scale-[1.01] transition-all duration-300 border-y py-1">
                                            <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full max-w-[30%]">
                                            <div class="w-full h-full">
                                                <h4 class="title_h4 line-clamp-3 opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quibusdam dolores qui, natus vero omnis veniam! Ipsum fugit non quis quas esse necessitatibus ea.</h4>
                                                <p class="title_h3">2450</p>
                                            </div>
                                        </a>
                                        <a href="#" class="w-full h-32 flex gap-2 hover:scale-[1.01] transition-all duration-300 border-y py-1">
                                            <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full max-w-[30%]">
                                            <div class="w-full h-full">
                                                <h4 class="title_h4 line-clamp-3 opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quibusdam dolores qui, natus vero omnis veniam! Ipsum fugit non quis quas esse necessitatibus ea.</h4>
                                                <p class="title_h3">2450</p>
                                            </div>
                                        </a>
                                        <a href="#" class="w-full h-32 flex gap-2 hover:scale-[1.01] transition-all duration-300 border-y py-1">
                                            <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full max-w-[30%]">
                                            <div class="w-full h-full">
                                                <h4 class="title_h4 line-clamp-3 opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quibusdam dolores qui, natus vero omnis veniam! Ipsum fugit non quis quas esse necessitatibus ea.</h4>
                                                <p class="title_h3">2450</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-black/50 w-full h-full absolute z-30 left-0 top-0"></div>
                            </div>
                        </div>

                        <!-- registraciya chexats user  -->
                        
                        <!-- <a href="#" class="w-fit">
                            <svg class="stroke-black hover:stroke-primary2 transition-all duration-300" width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a> -->

                        <!-- registraciya exats user  -->
                        <div class="w-fit lg:hidden flex h-full items-center sm:gap-3 gap-2">
                           
                            <a href="#" class="relative">
                                <span class="w-4 h-4 rounded-full bg-red-500 text-white text-12 font-bold absolute -top-1 -right-1 flex justify-center items-center">1</span>
                                <svg class="w-[24px]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="1" id="_1"><path d="M370.24,425.59a14.89,14.89,0,0,1-7-1.72L257,368,150.74,423.87A15,15,0,0,1,129,408.06l20.3-118.32-86-83.8a15,15,0,0,1,8.31-25.59l118.81-17.26L243.55,55.43a15,15,0,0,1,26.9,0l53.13,107.66,118.8,17.26a15,15,0,0,1,8.32,25.59l-86,83.8L385,408.06a15,15,0,0,1-14.78,17.53ZM106,205.67l69.85,68.09A15,15,0,0,1,180.17,287l-16.49,96.14L250,337.78a15,15,0,0,1,14,0l86.34,45.39L333.83,287a15,15,0,0,1,4.31-13.27L408,205.67l-96.53-14a15,15,0,0,1-11.29-8.2L257,96l-43.17,87.47a15,15,0,0,1-11.3,8.2Z"/></g></svg>
                            </a>
                            <a href="#" class="relative">
                                <span class="w-4 h-4 rounded-full bg-red-500 text-white text-12 font-bold absolute -top-2 -right-2 flex justify-center items-center">1</span>
                                <svg class="w-5" style="enable-background:new 0 0 1691 1407;" version="1.1" viewBox="0 0 1691 1407" width="1691px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="packet"><path d="M1691,165.177C1691,73.952,1617.048,0,1525.823,0H165.177C73.952,0,0,73.952,0,165.177v1076.646   C0,1333.048,73.952,1407,165.177,1407h1360.646c91.225,0,165.177-73.952,165.177-165.177V165.177z M166.062,132h1361.057   c18.216,0,32.881,14.528,32.881,32.746v1.433L869.916,856.337c-8.417,8.417-18.208,9.675-23.318,9.675   c-5.11,0-14.934-1.258-23.353-9.675L133,166.085v-1.339C133,146.528,147.846,132,166.062,132z M1527.119,1275H166.062   c-18.216,0-33.062-15.084-33.062-33.301V352.961l596.826,596.816c31.198,31.197,72.684,48.376,116.803,48.376   c44.125-0.003,85.528-17.186,116.724-48.382L1560,353.054v888.645C1560,1259.916,1545.335,1275,1527.119,1275z"/></g><g id="Layer_1"/></svg>
                            </a>
                            <!-- search icon  -->
                            <button id="openMobaileSearchModal">
                                <svg class="w-6" enable-background="new 0 0 32 32" id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M27.414,24.586l-5.077-5.077C23.386,17.928,24,16.035,24,14c0-5.514-4.486-10-10-10S4,8.486,4,14  s4.486,10,10,10c2.035,0,3.928-0.614,5.509-1.663l5.077,5.077c0.78,0.781,2.048,0.781,2.828,0  C28.195,26.633,28.195,25.367,27.414,24.586z M7,14c0-3.86,3.14-7,7-7s7,3.14,7,7s-3.14,7-7,7S7,17.86,7,14z" id="XMLID_223_"/></svg>
                            </button>

                            <!-- search modal  -->

                            <div id="mobaileSearchModal" class="w-screen h-screen absolute hidden top-0 left-0 bg-black/50 z-40  justify-center md:px-10 px-4">
                                <div class="w-full h-fit mt-32 max-w-[640px] bg-white py-3 px-6 border rounded-md">
                                    <div class="w-full flex justify-end">
                                        <button id="closeMobaileSearchModal">
                                            <svg class="w-8 rotate-45" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="448,224 288,224 288,64 224,64 224,224 64,224 64,288 224,288 224,448 288,448 288,288 448,288 "/></svg>
                                        </button>

                                    </div>
                                    <input id="mobileSearchInput" type="text" class="w-full py-1 rounded-md border px-2" placeholder="Որոնում">
                                    <div id="mobileSearchModal" class="max-h-[420px] hidden mt-2 overflow-y-auto bg-white px-2 pt-2 py-2 flex-col gap-1 rounded-b-sm">
                                        <a href="#" class="w-full h-32 flex gap-2 hover:scale-[1.01] transition-all duration-300 border-y py-1">
                                            <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full max-w-[30%]">
                                            <div class="w-full h-full">
                                                <h4 class="title_h4 line-clamp-3 opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quibusdam dolores qui, natus vero omnis veniam! Ipsum fugit non quis quas esse necessitatibus ea.</h4>
                                                <p class="title_h3">2450</p>
                                            </div>
                                        </a>
                                        <a href="#" class="w-full h-32 flex gap-2 hover:scale-[1.01] transition-all duration-300 border-y py-1">
                                            <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full max-w-[30%]">
                                            <div class="w-full h-full">
                                                <h4 class="title_h4 line-clamp-3 opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quibusdam dolores qui, natus vero omnis veniam! Ipsum fugit non quis quas esse necessitatibus ea.</h4>
                                                <p class="title_h3">2450</p>
                                            </div>
                                        </a>
                                        <a href="#" class="w-full h-32 flex gap-2 hover:scale-[1.01] transition-all duration-300 border-y py-1">
                                            <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full max-w-[30%]">
                                            <div class="w-full h-full">
                                                <h4 class="title_h4 line-clamp-3 opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quibusdam dolores qui, natus vero omnis veniam! Ipsum fugit non quis quas esse necessitatibus ea.</h4>
                                                <p class="title_h3">2450</p>
                                            </div>
                                        </a>
                                        <a href="#" class="w-full h-32 flex gap-2 hover:scale-[1.01] transition-all duration-300 border-y py-1">
                                            <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full max-w-[30%]">
                                            <div class="w-full h-full">
                                                <h4 class="title_h4 line-clamp-3 opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quibusdam dolores qui, natus vero omnis veniam! Ipsum fugit non quis quas esse necessitatibus ea.</h4>
                                                <p class="title_h3">2450</p>
                                            </div>
                                        </a>
                                        <a href="#" class="w-full h-32 flex gap-2 hover:scale-[1.01] transition-all duration-300 border-y py-1">
                                            <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full max-w-[30%]">
                                            <div class="w-full h-full">
                                                <h4 class="title_h4 line-clamp-3 opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quibusdam dolores qui, natus vero omnis veniam! Ipsum fugit non quis quas esse necessitatibus ea.</h4>
                                                <p class="title_h3">2450</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-fit">
                            <a href="#" id="headerUserIcon" class="hover:text-primary2 text-neutral-900 w-fit" onmouseenter="showUserOnHover()">
                                <div class="w-9 h-9 rounded-full flex-shrink-0 overflow-hidden bg-primary1 text-neutral-50 font-semibold text-24 flex items-center justify-center">
                                    <!-- ete nkar uni drats nkary  -->
                                     <!-- <img class="w-full h-full object-cover" src="https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=2226" alt=""> -->
                                     <!-- ete chuni anuni arajin tary -->
                                      A
                                </div>
                            </a>
                            <!-- headeri useri hoveri modaly     -->
                            <div id="headerUserInfo" class="absolute left-0 top-full hidden w-full h-screen justify-center lg:px-16 md:px-10 px-4 z-40">
                                <div class="w-full z-40 h-fit max-w-screen-xxl flex justify-end rounded-b-sm bg-transparent">
                                    <div class="w-fit bg-white px-2 lg:mr-48">
                                        <div class="flex items-center gap-2 border-b border-primary2 py-2">
                                            <div class="w-9 h-9 rounded-full flex-shrink-0 overflow-hidden bg-primary1 text-neutral-50 font-semibold text-24 flex items-center justify-center">
                                                <!-- ete nkar uni drats nkary  -->
                                                <!-- <img class="w-full h-full object-cover" src="https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=2226" alt=""> -->
                                                <!-- ete chuni anuni arajin tary -->
                                                A
                                            </div>
                                            <h4 class="title_h4">Artur</h4>
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <a href="#" class="text-16 hover_links">Իմ հայտարարությունները</a>
                                            <a href="#" class="text-16 hover_links">Իմ հայտարարությունները</a>
                                            <a href="#" class="text-16 hover_links">Իմ հայտարարությունները</a>
                                            <a href="#" class="text-16 hover_links">Նախընտրած հայտարարություններ</a>
                                            <a href="#" class="text-16 hover_links">Իմ հայտարարությունները</a>
                                            <a href="#" class="text-16 hover_links">Իմ հայտարարությունները</a>

                                        </div>
                                    </div>
                                </div>
                                <div id='userInfoBackground' class="bg-black/50 w-full h-full absolute z-30 left-0 top-0"></div>
                            </div>
                        </div>

                         <!-- select language  -->
                         <div class="relative h-fit"> 
                             <!-- Button to open/close dropdown  -->
                             <button id="dropDownFlags" class="inline-flex items-center w-fit rounded-sm border border-neutral-300 shadow-sm px-1 sm:px-2 py-[6px] bg-white text-14 font-medium text-neutral-700 hover:bg-neutral-50 focus:outline-none">
                                <img id="selectedFlag" src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" alt="Selected Flag" class="h-4 w-4 mr-2 object-contain">
                                <span id="selectedLanguage">EN</span>
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.44l3.71-4.21a.75.75 0 111.14.98l-4 4.5a.75.75 0 01-1.14 0l-4-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button> 

                             <!-- Dropdown menu  -->
                             <div id="selectFlagDropdown" class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-sm shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                                <div class="py-1">
                                    <a href="#" class="dropdown-item flex items-center px-2 sm:px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-lang="en" data-flag="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg">
                                        <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" alt="English Flag" class="h-4 w-4 mr-2 object-contain"> English
                                    </a>
                                    <a href="#" class="dropdown-item flex items-center px-2 sm:px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-lang="am" data-flag="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/800px-Flag_of_Armenia.svg.png?20231030034556">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/800px-Flag_of_Armenia.svg.png?20231030034556" alt="Armenian Flag" class="h-4 w-4 mr-2 object-contain"> Armenian
                                    </a>
                                    <a href="#" class="dropdown-item flex items-center px-2 sm:px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-lang="ru" data-flag="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuFXVaBEnKbpodO0cyYPr7WLyHPiUUxtlr-g&s">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuFXVaBEnKbpodO0cyYPr7WLyHPiUUxtlr-g&s" alt="Russian Flag" class="h-4 w-4 mr-2 object-contain"> Russian
                                    </a>
                                </div>
                            </div>
                        </div>


                        <!-- kojak haytararutyun avelacnelu -->
                         <a href="#" class="active_button flex-shrink-0 items-center gap-1 !px-1 lg:flex hidden">
                            <svg class="w-6" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:4px;}</style></defs><title/><g id="plus"><line class="cls-1" x1="16" x2="16" y1="7" y2="25"/><line class="cls-1" x1="7" x2="25" y1="16" y2="16"/></g></svg>
                            Տեղադրել հայտարարություն
                        </a>
                    </div>

                </div>
            </div>
        
        </header>


<section class="mt-20">
    <div class="container_width grid grid-cols-12 gap-6">
        <div class="lg:col-span-8 col-span-12 flex flex-col gap-6 lg:pb-8 pb-0 h-fit">
                <!-- Slider -->
                <div class="relative w-full group/slider">
                    <div class="overflow-hidden relative h-full max-h-[420px] rounded-lg shadow-lg">
                        <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                            <!-- Slide 1 -->
                            <div class="w-full flex-shrink-0">
                                <img src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_1280.jpg" alt="Slide 1" class="w-full h-full object-cover cursor-pointer">
                            </div>
                            <!-- Slide 2 -->
                            <div class="w-full flex-shrink-0">
                                <img src="https://letsenhance.io/static/73136da51c245e80edc6ccfe44888a99/1015f/MainBefore.jpg" alt="Slide 2" class="w-full h-full object-cover cursor-pointer">
                            </div>
                            <!-- Slide 3 -->
                            <div class="w-full flex-shrink-0">
                                <img src="https://img.freepik.com/free-photo/amazing-ants-carry-fruit-heavier-than-their-bodies-amazing-strong-ant_488145-2669.jpg" alt="Slide 3" class="w-full h-full object-cover cursor-pointer">
                            </div>
                        </div>
                    </div>
                    <!-- Left Arrow -->
                    <button id="prev" class="absolute top-1/2 transform -translate-y-1/2 left-0 text-black text-32 p-2 rounded-full bg-white/50 transition-all duration-300 group-hover/slider:opacity-100 opacity-0">
                        &#10094;
                    </button>
                    <!-- Right Arrow -->
                    <button id="next" class="absolute top-1/2 transform -translate-y-1/2 right-0 text-black text-32 p-2 rounded-full bg-white/50 transition-all duration-300 group-hover/slider:opacity-100 opacity-0">
                        &#10095;
                    </button>
                </div>

            <!-- Modal -->
            <div id="modal" class="fixed inset-0 z-50 bg-black bg-opacity-70 items-center justify-center hidden">
                <div class="bg-white rounded-lg overflow-hidden max-w-[80%] w-full">
                    <div class="relative h-fit max-h-[80%]">
                        <div id="modalSlider" class="flex transition-transform duration-500 ease-in-out">
                            <!-- Modal Slides will be injected here -->
                        </div>
                    </div>

                    <!-- Modal Left Arrow -->
                    <button id="modalPrev" class="absolute top-1/2 transform -translate-y-1/2 left-2 text-white text-32 p-2 rounded-full hover:bg-white/50 transition-all duration-300">
                        &#10094;
                    </button>

                    <!-- Modal Right Arrow -->
                    <button id="modalNext" class="absolute top-1/2 transform -translate-y-1/2 right-2 text-white text-32 p-2 rounded-full hover:bg-white/50 transition-all duration-300">
                        &#10095;
                    </button>

                    <!-- Close Button -->
                    <button id="modalClose" class="absolute w-16 h-16 top-2 right-2 flex-shrink-0 text-white text-64 rounded-full hover:bg-white/10 transition-all duration-300">&times;</button>
                </div>
            </div>

            <!-- informacian -->
            <div class="w-full">
                <div class="w-full flex justify-between">
                    <p class="flex-shrink-0 smallDesktop:text-32 md:text-24 text-16 font-semibold z-40 mt-2">60.000 orakan</p>
                    <div class="w-fit flex gap-2">
                        <button class="p-2 rounded-full flex-shrink-0 h-fit text-14 flex items-center gap-1 border border-primary1">
                            <svg class="w-3 mt-[1px]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M462.1 62.86C438.8 41.92 408.9 31.1 378.7 32c-37.49 0-75.33 15.4-103 43.98l-19.7 20.27l-19.7-20.27C208.6 47.4 170.8 32 133.3 32C103.1 32 73.23 41.93 49.04 62.86c-62.14 53.79-65.25 149.7-9.23 207.6l193.2 199.7C239.4 476.7 247.6 480 255.9 480c8.332 0 16.69-3.267 23.01-9.804l193.1-199.7C528.2 212.5 525.1 116.6 462.1 62.86zM437.6 237.1l-181.6 187.8L74.34 237.1C42.1 203.8 34.46 138.1 80.46 99.15c39.9-34.54 94.59-17.5 121.4 10.17l54.17 55.92l54.16-55.92c26.42-27.27 81.26-44.89 121.4-10.17C477.1 138.6 470.5 203.1 437.6 237.1z"/></svg>
                        </button>
                        <button class="p-2 rounded-full flex-shrink-0 h-fit text-14 flex items-center gap-1 border border-primary1">
                            <svg class="w-3" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><rect fill="none"/><polyline fill="none" points="176 152 224 104 176 56" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="20"/><path d="M192,216H40a8,8,0,0,1-8-8V88" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="20"/><path d="M75,176a96.1,96.1,0,0,1,93-72h56" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/></svg>
                        </button>
                    </div>
                </div>
                <h3 class="smallDesktop:text-24 text-16 opacity-80 font-medium">
                    Երեք հարկանի ամառանոց, 2-րդ փողոց 4-րդ փակուղի Քարաշամբում, 800 քմ, 2 սանհանգույց, եվրովերանորոգված
                </h3>
            </div>
            
            <!-- hascen -->
            <div class="w-full py-2 text-primary1 bg-neutral-100 px-2 rounded-sm">2-րդ փողոց 4-րդ փակուղի, Քարաշամբ</div>

            <!-- tan masin infon -->

            <div class="w-full">
                <h3 class="title_h3">Tan masin</h3>
                <div class="flex flex-col gap-1">
                    <div class="flex items-center border-b py-1 gap-6">
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-70 sm:w-56 w-32 flex-shrink-0">Տեսակ</p>
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-80">Ամառանոց</p>
                    </div>
                    <div class="flex items-center border-b py-1 gap-6">
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-70 sm:w-56 w-32 flex-shrink-0">Շինության տիպ</p>
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-80">Մոնոլիտ</p>
                    </div>
                    <div class="flex items-center border-b py-1 gap-6">
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-70 sm:w-56 w-32 flex-shrink-0">Սենյակների քանակ</p>
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-80">6</p>
                    </div>
                    <div class="flex items-center border-b py-1 gap-6">
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-70 sm:w-56 w-32 flex-shrink-0">Կոմֆորտ</p>
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-80">Սրբիչներ, անկողնային պարագաներ</p>
                    </div>
                    <div class="flex items-center border-b py-1 gap-6">
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-70 sm:w-56 w-32 flex-shrink-0">Կենցաղային տեխնիկա</p>
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-80">Սառնարան, սալօջախ, սրճեփ, լվացքի մեքենա, արդուկ</p>
                    </div>
                    <div class="flex items-center border-b py-1 gap-6">
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-70 sm:w-56 w-32 flex-shrink-0">Կենցաղային տեխնիկա</p>
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-80">Սառնարան, սալօջախ, սրճեփ, լվացքի ռնարան, սալօջախ, սրճեփ, լվացքի ռնարան, սալօջախ, սրճեփ, լվացքի մեքենա, արդուկ</p>
                    </div>
                    <div class="flex items-center border-b py-1 gap-6">
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-70 sm:w-56 w-32 flex-shrink-0">Կենցաղային տեխնիկա</p>
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-80">Սառնարան, սալօջախ, սրճեփ, լվացքի մեքենա, արդուկ</p>
                    </div>
                    <div class="flex items-center border-b py-1 gap-6">
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-70 sm:w-56 w-32 flex-shrink-0">Կենցաղային տեխնիկա</p>
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-80">Սառնարան, սալօջախ, սրճեփ, լվացքի մեքենա, արդուկ</p>
                    </div>
                    <div class="flex items-center border-b py-1 gap-6">
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-70 sm:w-56 w-32 flex-shrink-0">Կենցաղային տեխնիկա</p>
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-80">Սառնարան, սալօջախ, սրճեփ, լվացքի մեքենա, արդուկ</p>
                    </div>
                    <div class="flex items-center border-b py-1 gap-6">
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-70 sm:w-56 w-32 flex-shrink-0">Կենցաղային տեխնիկա</p>
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-80">Սառնարան, սալօջախ, սրճեփ, լվացքի մեքենա, արդուկ</p>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <h3 class="title_h3">Տեղեկություններ հողատարածքի մասին</h3>
                <div class="flex flex-col gap-1">
                    <div class="flex items-center border-b py-1 gap-6">
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-70 sm:w-56 w-32 flex-shrink-0">Տեսակ</p>
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-80">Ամառանոց</p>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <h3 class="title_h3">Բնակության կանոններ</h3>
                <div class="flex flex-col gap-1">
                    <div class="flex items-center border-b py-1 gap-6">
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-70 sm:w-56 w-32 flex-shrink-0">Տեսակ</p>
                        <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-80">Ամառանոց</p>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <h3 class="title_h3">Նկարագիր</h3>
                <p class="sm:text-16 text-12 sm:font-medium font-normal text-black opacity-70">Տրվում է օրավարձով 3 հարկանի ամառանոց Լուսակերտում՝հարմար է ցանկացած միջոցառման համար ։4 կողմից ազատ տներ են ՝մարդիկ չեն ապրում և փակ է</p>
            </div>
            <div class="flex justify-between gap-2 flex-wrap">
                <p class="text-12 text-black opacity-50">Հայտարարության համարը 20978987</p>
                <p class="text-12 text-black opacity-50">Տեղադրված է 04.05.2024</p>
                <p class="text-12 text-black opacity-50">Հայտարարության համարը 20978987</p>
            </div>
        </div>

        <!-- user-i bajin -->
        <div class="lg:col-span-4 col-span-12 flex flex-col gap-2">

            <div class="py-4 flex flex-col gap-2">
                <div class="flex gap-2 items-center">
                    <div class="w-16 h-16 rounded-full flex-shrink-0 overflow-hidden">
                        <img src="https://t3.ftcdn.net/jpg/02/43/12/34/360_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg" alt="" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="smallDesktop:text-16 text-14 font-medium opacity-80 text-black">Valod Papi</h3>
                        <p class="text-14 text-black font-light opacity-50">Igma.am-ում է` 29.11.2012</p>
                        <div class="flex items-center gap-4 mt-1">
                            <div class="w-fit flex items-center gap-[1px]">
                                <svg class="w-6" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="1" id="_1"><path d="M348.45,432.7H261.8a141.5,141.5,0,0,1-49.52-8.9l-67.5-25.07a15,15,0,0,1,10.45-28.12l67.49,25.07a111.79,111.79,0,0,0,39.08,7h86.65a14.21,14.21,0,1,0,0-28.42,15,15,0,0,1,0-30H368.9a14.21,14.21,0,1,0,0-28.42,15,15,0,0,1,0-30h20.44a14.21,14.21,0,0,0,10.05-24.26,14.08,14.08,0,0,0-10.05-4.16,15,15,0,0,1,0-30h20.45a14.21,14.21,0,0,0,10-24.26,14.09,14.09,0,0,0-10-4.17H268.15A15,15,0,0,1,255,176.74a100.2,100.2,0,0,0,9.2-29.33c3.39-21.87-.79-41.64-12.42-58.76a12.28,12.28,0,0,0-22.33,7c.49,51.38-23.25,88.72-68.65,108a15,15,0,1,1-11.72-27.61c18.72-8,32.36-19.75,40.55-35.08,6.68-12.51,10-27.65,9.83-45C199.31,77,211,61,229.18,55.34s36.81.78,47.45,16.46c24.71,36.36,20.25,74.1,13.48,97.21H409.79a44.21,44.21,0,0,1,19.59,83.84,44.27,44.27,0,0,1-20.44,58.42,44.27,44.27,0,0,1-20.45,58.43,44.23,44.23,0,0,1-40,63Z"/><path d="M155,410.49H69.13a15,15,0,0,1-15-15V189.86a15,15,0,0,1,15-15H155a15,15,0,0,1,15,15V395.49A15,15,0,0,1,155,410.49Zm-70.84-30H140V204.86H84.13Z"/></g></svg>
                                <span class="text-14 font-medium text-black">5</span>
                            </div>
                            <div class="w-fit flex items-center gap-[1px] mt-[3px]">
                                <svg class="w-6" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="1" id="_1"><path d="M242.28,427.39a43.85,43.85,0,0,1-13.1-2c-18.22-5.69-29.87-21.64-29.69-40.62.16-17.35-3.15-32.5-9.83-45-8.19-15.33-21.83-27.13-40.55-35.08A15,15,0,1,1,160.83,277c45.4,19.26,69.14,56.6,68.65,108a12.28,12.28,0,0,0,22.33,7c28.34-41.71,3.47-87.63,3.22-88.09a15,15,0,0,1,13.12-22.27H409.79a14.22,14.22,0,0,0,0-28.43H389.34a15,15,0,1,1,0-30,14.2,14.2,0,0,0,14.21-14.21,14.23,14.23,0,0,0-14.21-14.21H368.9a15,15,0,0,1,0-30,14.21,14.21,0,1,0,0-28.42H348.45a15,15,0,0,1,0-30,14.21,14.21,0,1,0,0-28.42H261.8a111.69,111.69,0,0,0-39.07,7l-67.5,25.07A15,15,0,0,1,144.78,82l67.5-25.07A141.5,141.5,0,0,1,261.8,48h86.65a44.25,44.25,0,0,1,40,63,44.27,44.27,0,0,1,20.45,58.43,44.27,44.27,0,0,1,20.44,58.42,44.21,44.21,0,0,1-19.59,83.84H290.11c6.77,23.11,11.23,60.85-13.48,97.22A41.21,41.21,0,0,1,242.28,427.39Z"/><path d="M155,305.85H69.13a15,15,0,0,1-15-15V85.21a15,15,0,0,1,15-15H155a15,15,0,0,1,15,15V290.85A15,15,0,0,1,155,305.85Zm-70.84-30H140V100.21H84.13Z"/></g></svg>
                                <span class="text-14 font-medium text-black">2</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 mt-4 border-b pb-4">
                    <button class="w-full text-14 text-white font-medium !p-[2px] pasiv_button rounded-sm flex items-center justify-center gap-2">
                        <svg class="w-[14px]" style="enable-background:new 0 0 1691 1407;" version="1.1" viewBox="0 0 1691 1407" width="1691px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="packet"><path d="M1691,165.177C1691,73.952,1617.048,0,1525.823,0H165.177C73.952,0,0,73.952,0,165.177v1076.646   C0,1333.048,73.952,1407,165.177,1407h1360.646c91.225,0,165.177-73.952,165.177-165.177V165.177z M166.062,132h1361.057   c18.216,0,32.881,14.528,32.881,32.746v1.433L869.916,856.337c-8.417,8.417-18.208,9.675-23.318,9.675   c-5.11,0-14.934-1.258-23.353-9.675L133,166.085v-1.339C133,146.528,147.846,132,166.062,132z M1527.119,1275H166.062   c-18.216,0-33.062-15.084-33.062-33.301V352.961l596.826,596.816c31.198,31.197,72.684,48.376,116.803,48.376   c44.125-0.003,85.528-17.186,116.724-48.382L1560,353.054v888.645C1560,1259.916,1545.335,1275,1527.119,1275z"/></g><g id="Layer_1"/></svg>
                        Grel
                    </button>
                    <button class="w-full text-14 text-white font-medium !p-[2px] bg-green-500 hover:bg-green-600 transition-all duration-300 rounded-sm flex items-center justify-center gap-2">
                        <svg class="w-4" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><rect fill="none" /><path d="M159.4,40A80.1,80.1,0,0,1,216,96.6" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M151.1,70.9a47.9,47.9,0,0,1,34,34" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M92.5,124.8a83.6,83.6,0,0,0,39,38.9,8,8,0,0,0,7.9-.6l25-16.7a7.9,7.9,0,0,1,7.6-.7l46.8,20.1a7.9,7.9,0,0,1,4.8,8.3A48,48,0,0,1,176,216,136,136,0,0,1,40,80,48,48,0,0,1,81.9,32.4a7.9,7.9,0,0,1,8.3,4.8l20.1,46.9a8,8,0,0,1-.6,7.5L93,117A8,8,0,0,0,92.5,124.8Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        Zangaharel
                    </button>
                </div>

                <!-- ogtatiroj ayl haytararutyunner -->
                <div class="w-full mt-2">
                    <h4 class="title_h4">ogtatiroj ayl haytararutyunner </h4>
                    <div class="w-full flex gap-1 mt-2 overflow-hidden overflow-x-auto scrollbar-hidden">
                        <a href="#" class="w-fit p-[2px] hover:scale-[1.01] border flex gap-1 flex-shrink-0 transition-all duration-300">
                            <img class="w-full max-w-28 h-full max-h-20 object-cover" src="https://letsenhance.io/static/73136da51c245e80edc6ccfe44888a99/1015f/MainBefore.jpg" alt="">
                            <div class="w-full max-w-40">
                                <h4 class="text-12 hover_links line-clamp-2">Երեք հարկանի ամառանոց, 2-րդ փողոց 4-րդ փակուղի Քարաշամբում, 800 քմ, 2 սանհանգույց, եվրովերանորոգված</h4>
                                <p class="title_h4">25000</p>
                            </div>
                        </a>
                        <a href="#" class="w-fit p-[2px] hover:scale-[1.01] border flex gap-1 flex-shrink-0 transition-all duration-300">
                            <img class="w-full max-w-28 h-full max-h-20 object-cover" src="https://letsenhance.io/static/73136da51c245e80edc6ccfe44888a99/1015f/MainBefore.jpg" alt="">
                            <div class="w-full max-w-40">
                                <h4 class="text-12 hover_links line-clamp-2">Երեք հարկանի ամառանոց, 2-րդ փողոց 4-րդ փակուղի Քարաշամբում, 800 քմ, 2 սանհանգույց, եվրովերանորոգված</h4>
                                <p class="title_h4">25000</p>
                            </div>
                        </a>
                        <a href="#" class="w-fit p-[2px] hover:scale-[1.01] border flex gap-1 flex-shrink-0 transition-all duration-300">
                            <img class="w-full max-w-28 h-full max-h-20 object-cover" src="https://letsenhance.io/static/73136da51c245e80edc6ccfe44888a99/1015f/MainBefore.jpg" alt="">
                            <div class="w-full max-w-40">
                                <h4 class="text-12 hover_links line-clamp-2">Երեք հարկանի ամառանոց, 2-րդ փողոց 4-րդ փակուղի Քարաշամբում, 800 քմ, 2 սանհանգույց, եվրովերանորոգված</h4>
                                <p class="title_h4">25000</p>
                            </div>
                        </a>
                    </div>
                </div>

            <!-- nmanatip haytararutyunner -->

            <div class="w-full flex flex-col gap-2 mt-2">
                <h4 class="title_h4 mb-2">Նմանատիպ հայտարարություններ</h4>

                <!-- productnery -->
                 <div class="w-full flex lg:flex-col flex-row flex-wrap justify-center gap-4">
                    <!--  -->
                     <a href="#" class="w-fit flex lg:flex-row flex-col gap-2 group/prodCard">
                         <img src="https://letsenhance.io/static/73136da51c245e80edc6ccfe44888a99/1015f/MainBefore.jpg" alt="" class="w-full lg:max-w-[140px] max-w-[300px] h-full max-h-[120px] group-hover/prodCard:scale-[1.01] transition-all duration-300 object-cover rounded-sm overflow-hidden flex-shrink-0">
                         <div class="w-full max-w-[300px]">
                             <p class="text-14 text-black font-light group-hover/prodCard:text-primary2 transition-all line-clamp-3 duration-300 ">Երեք հարկանի ամառանոց, 2-րդ փողոց 4-րդ փակուղի Քարաշամբում, 800 քմ, 2 սանհանգույց, եվրովերանորոգված</p>
                             <p class="text-16 font-semibold text-black">60000</p>
                            </div>
                        </a>
                        <!--  -->
                        <a href="#" class="w-fit flex lg:flex-row flex-col gap-2 group/prodCard">
                            <img src="https://letsenhance.io/static/73136da51c245e80edc6ccfe44888a99/1015f/MainBefore.jpg" alt="" class="w-full lg:max-w-[140px] max-w-[300px] h-full max-h-[120px] group-hover/prodCard:scale-[1.01] transition-all duration-300 object-cover rounded-sm overflow-hidden flex-shrink-0">
                            <div class="w-full max-w-[300px]">
                                <p class="text-14 text-black font-light group-hover/prodCard:text-primary2 transition-all line-clamp-3 duration-300 ">Երեք հարկանի ամառանոց, 2-րդ փողոց 4-րդ փակուղի Քարաշամբում, 800 քմ, 2 սանհանգույց, եվրովերանորոգված</p>
                                <p class="text-16 font-semibold text-black">60000</p>
                            </div>
                        </a>
                        <!--  -->
                        <a href="#" class="w-fit flex lg:flex-row flex-col gap-2 group/prodCard">
                            <img src="https://letsenhance.io/static/73136da51c245e80edc6ccfe44888a99/1015f/MainBefore.jpg" alt="" class="w-full lg:max-w-[140px] max-w-[300px] h-full max-h-[120px] group-hover/prodCard:scale-[1.01] transition-all duration-300 object-cover rounded-sm overflow-hidden flex-shrink-0">
                            <div class="w-full max-w-[300px]">
                                <p class="text-14 text-black font-light group-hover/prodCard:text-primary2 transition-all line-clamp-3 duration-300 ">Երեք հարկանի ամառանոց, 2-րդ փողոց 4-րդ փակուղի Քարաշամբում, 800 քմ, 2 սանհանգույց, եվրովերանորոգված</p>
                                <p class="text-16 font-semibold text-black">60000</p>
                            </div>
                        </a>
                        <!--  -->
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>




<!-- JavaScript -->

<script>
        const slider = document.getElementById('slider');
        const prev = document.getElementById('prev');
        const next = document.getElementById('next');
        let currentIndex = 0;

        function showSlide(index) {
            const slides = slider.children.length;
            currentIndex = (index + slides) % slides;
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        prev.addEventListener('click', () => showSlide(currentIndex - 1));
        next.addEventListener('click', () => showSlide(currentIndex + 1));

        // Modal functionality
        const modal = document.getElementById('modal');
        const modalSlider = document.getElementById('modalSlider');
        const modalPrev = document.getElementById('modalPrev');
        const modalNext = document.getElementById('modalNext');
        const modalClose = document.getElementById('modalClose');
        let modalIndex = 0;

        function openModal(index) {
            modalIndex = index;
            modalSlider.innerHTML = slider.innerHTML; // Copy slides to modal
            modal.style.display = 'flex';
            showModalSlide(modalIndex); 
        }

        function closeModal() {
            modal.style.display = 'none';
        }

        function showModalSlide(index) {
            const slides = modalSlider.children.length;
            modalIndex = (index + slides) % slides;
            modalSlider.style.transform = `translateX(-${modalIndex * 100}%)`;
        }

        slider.querySelectorAll('img').forEach((image, index) => {
            image.addEventListener('click', () => openModal(index));
        });

        modalPrev.addEventListener('click', () => showModalSlide(modalIndex - 1));
        modalNext.addEventListener('click', () => showModalSlide(modalIndex + 1));
        modalClose.addEventListener('click', closeModal);
    </script>