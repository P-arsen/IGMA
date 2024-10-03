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
                        
                        <!-- <a href="#" class="flex-shrink-0 hover_links">Im ejy</a> -->

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
                            <a href="#" id="headerUserIcon" class="hover:text-primary2 text-neutral-900 w-fit" onmouseenter="showUserInfoOnHover()">
                                <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <div id="headerUserInfo" class="absolute left-0 top-full hidden w-full h-screen justify-center lg:px-16 md:px-10 px-4 z-40">
                                <div class="w-full z-40 h-fit max-w-screen-xxl flex justify-end rounded-b-sm bg-transparent">
                                    <div class="w-fit bg-white px-2 lg:mr-48">
                                        <div class="flex items-center gap-2 border-b border-primary2 py-2">
                                            <img src="https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=2226" alt="" class="w-12 h-12 rounded-full flex-shrink-0">
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
                             <div id="dropdownMenu" class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-sm shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
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



<section class="w-full relative mt-16">
    <div id="biznesMessageModal" class="w-screen h-screen fixed top-0 left-0 bg-black/50 hidden justify-center items-center z-[111]">
        <div class="w-full md:max-w-[60%] max-w-[90%] h-full max-h-[70%] bg-white rounded-md flex flex-col p-2">
            <div class="w-full flex justify-end">
                <button id="closeBiznesMessageModal">
                    <svg class="w-8 rotate-45" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="448,224 288,224 288,64 224,64 224,224 64,224 64,288 224,288 224,448 288,448 288,288 448,288 "/></svg>
                </button>
            </div>
        </div>
    </div>
    <div id="biznesCommentModal" class="w-screen h-screen fixed top-0 left-0 bg-black/50 hidden justify-center items-center z-[111]">
        <div class="w-full md:max-w-[50%] max-w-[90%] h-fit bg-white rounded-md flex flex-col p-4">
            <div class="w-full flex justify-between">
                <h3 class="title_h4">Թողնել մեկնաբանություն</h3>
                <button id="closeBiznesCommentModal">
                    <svg class="w-8 rotate-45" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="448,224 288,224 288,64 224,64 224,224 64,224 64,288 224,288 224,448 288,448 288,288 448,288 "/></svg>
                </button>
            </div>
            <div class="w-full flex flex-col items-center gap-4 mt-2">
                <textarea id="biznesCommentMessage" rows="5" class="w-full px-3 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-2 resize-none focus:ring-primary2" placeholder="ldskc dsv"></textarea>
                <button class="active_button">Ուղարկել</button>
            </div>
        </div>
    </div>
    <div class="container_width">
        <div class="w-full grid grid-cols-12 gap-6">
            <div class="col-span-12 md:h-96 h-fit flex flex-col">
                <!-- hetevi nkar  -->
                <img class="w-full h-full object-contain" src="https://upa.list.am/5619.jpg" alt="">
                <!-- useri tvyalner  -->
                <div class="w-full h-fit bg-transparent flex md:flex-row flex-col md:justify-between items-center gap-2 bg-slate-400">
                    <div class="md:w-[60%] w-full h-full flex sm:flex-row flex-col items-center justify-center gap-4">
                        <!-- useri pujur nkar  -->
                         <div class="sm:h-32 sm:w-32 w-28 h-28 flex-shrink-0 rounded-md overflow-hidden border border-primary1">
                             <img class="w-full h-full aspect-auto rounded-md object-cover" src="https://upa.list.am/5629.jpg" alt="">
                        </div>
                        <!-- anun info  -->
                        <div class="md:w-full w-fit flex flex-col gap-1">
                            <h2 class="title_h3">Ավտոհայելիների Աշխարհ</h2>
                            <p class="text-16 font-light text-neutral-900 opacity-50 flex items-center gap-1"><span>750</span>հայտարարություն</p>
                            
                            <div class="flex items-center gap-4">
                                <button id="openBiznesCommentModal" class="w-fit flex items-center gap-[1px]">
                                    <svg class="w-8 h-8" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="1" id="_1"><path d="M348.45,432.7H261.8a141.5,141.5,0,0,1-49.52-8.9l-67.5-25.07a15,15,0,0,1,10.45-28.12l67.49,25.07a111.79,111.79,0,0,0,39.08,7h86.65a14.21,14.21,0,1,0,0-28.42,15,15,0,0,1,0-30H368.9a14.21,14.21,0,1,0,0-28.42,15,15,0,0,1,0-30h20.44a14.21,14.21,0,0,0,10.05-24.26,14.08,14.08,0,0,0-10.05-4.16,15,15,0,0,1,0-30h20.45a14.21,14.21,0,0,0,10-24.26,14.09,14.09,0,0,0-10-4.17H268.15A15,15,0,0,1,255,176.74a100.2,100.2,0,0,0,9.2-29.33c3.39-21.87-.79-41.64-12.42-58.76a12.28,12.28,0,0,0-22.33,7c.49,51.38-23.25,88.72-68.65,108a15,15,0,1,1-11.72-27.61c18.72-8,32.36-19.75,40.55-35.08,6.68-12.51,10-27.65,9.83-45C199.31,77,211,61,229.18,55.34s36.81.78,47.45,16.46c24.71,36.36,20.25,74.1,13.48,97.21H409.79a44.21,44.21,0,0,1,19.59,83.84,44.27,44.27,0,0,1-20.44,58.42,44.27,44.27,0,0,1-20.45,58.43,44.23,44.23,0,0,1-40,63Z"/><path d="M155,410.49H69.13a15,15,0,0,1-15-15V189.86a15,15,0,0,1,15-15H155a15,15,0,0,1,15,15V395.49A15,15,0,0,1,155,410.49Zm-70.84-30H140V204.86H84.13Z"/></g></svg>
                                    <span class="text-14 font-medium text-black">5</span>
                                </button>
                                <div class="w-fit flex items-center gap-[1px] mt-1">
                                    <svg class="w-8 h-8" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="1" id="_1"><path d="M242.28,427.39a43.85,43.85,0,0,1-13.1-2c-18.22-5.69-29.87-21.64-29.69-40.62.16-17.35-3.15-32.5-9.83-45-8.19-15.33-21.83-27.13-40.55-35.08A15,15,0,1,1,160.83,277c45.4,19.26,69.14,56.6,68.65,108a12.28,12.28,0,0,0,22.33,7c28.34-41.71,3.47-87.63,3.22-88.09a15,15,0,0,1,13.12-22.27H409.79a14.22,14.22,0,0,0,0-28.43H389.34a15,15,0,1,1,0-30,14.2,14.2,0,0,0,14.21-14.21,14.23,14.23,0,0,0-14.21-14.21H368.9a15,15,0,0,1,0-30,14.21,14.21,0,1,0,0-28.42H348.45a15,15,0,0,1,0-30,14.21,14.21,0,1,0,0-28.42H261.8a111.69,111.69,0,0,0-39.07,7l-67.5,25.07A15,15,0,0,1,144.78,82l67.5-25.07A141.5,141.5,0,0,1,261.8,48h86.65a44.25,44.25,0,0,1,40,63,44.27,44.27,0,0,1,20.45,58.43,44.27,44.27,0,0,1,20.44,58.42,44.21,44.21,0,0,1-19.59,83.84H290.11c6.77,23.11,11.23,60.85-13.48,97.22A41.21,41.21,0,0,1,242.28,427.39Z"/><path d="M155,305.85H69.13a15,15,0,0,1-15-15V85.21a15,15,0,0,1,15-15H155a15,15,0,0,1,15,15V290.85A15,15,0,0,1,155,305.85Zm-70.84-30H140V100.21H84.13Z"/></g></svg>
                                    <span class="text-14 font-medium text-black">2</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-fit md:h-full h-fit flex flex-col gap-1 justify-center">
                        <p class="text-16 font-medium text-primary1 py-1 px-2 rounded-sm border border-primary1">Գարեգին Նժդեհի փողոց 5, Երևան</p>
                        <p class="text-16 font-medium text-primary1 py-1 px-2 rounded-sm border border-primary1">Երկուշաբթի - Շաբաթ 9:00 - 20:00, Կիրակի 10:00 - 18:00</p>
                        <div class="w-full flex sm:flex-nowrap flex-wrap gap-2 ">
                            <button id="openBiznesMessageModal" class="w-full text-16 text-white font-medium pasiv_button !py-[2px] rounded-sm flex items-center justify-center gap-2">
                                <svg class="w-[14px]" style="enable-background:new 0 0 1691 1407;" version="1.1" viewBox="0 0 1691 1407" width="1691px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="packet"><path d="M1691,165.177C1691,73.952,1617.048,0,1525.823,0H165.177C73.952,0,0,73.952,0,165.177v1076.646   C0,1333.048,73.952,1407,165.177,1407h1360.646c91.225,0,165.177-73.952,165.177-165.177V165.177z M166.062,132h1361.057   c18.216,0,32.881,14.528,32.881,32.746v1.433L869.916,856.337c-8.417,8.417-18.208,9.675-23.318,9.675   c-5.11,0-14.934-1.258-23.353-9.675L133,166.085v-1.339C133,146.528,147.846,132,166.062,132z M1527.119,1275H166.062   c-18.216,0-33.062-15.084-33.062-33.301V352.961l596.826,596.816c31.198,31.197,72.684,48.376,116.803,48.376   c44.125-0.003,85.528-17.186,116.724-48.382L1560,353.054v888.645C1560,1259.916,1545.335,1275,1527.119,1275z"/></g><g id="Layer_1"/></svg>
                                Գրել
                            </button>
                            <button class="w-full text-16 text-white font-medium bg-green-500 hover:bg-green-600 !py-[2px] transition-all duration-300 rounded-sm flex items-center justify-center gap-2">
                                <svg class="w-4" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><rect fill="none" /><path d="M159.4,40A80.1,80.1,0,0,1,216,96.6" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M151.1,70.9a47.9,47.9,0,0,1,34,34" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M92.5,124.8a83.6,83.6,0,0,0,39,38.9,8,8,0,0,0,7.9-.6l25-16.7a7.9,7.9,0,0,1,7.6-.7l46.8,20.1a7.9,7.9,0,0,1,4.8,8.3A48,48,0,0,1,176,216,136,136,0,0,1,40,80,48,48,0,0,1,81.9,32.4a7.9,7.9,0,0,1,8.3,4.8l20.1,46.9a8,8,0,0,1-.6,7.5L93,117A8,8,0,0,0,92.5,124.8Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                Զանգահարել
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 text-16 font-medium text-neutral-600">
                <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, id delectus quibusdam consequatur doloremque impedit quos neque! Fugiat harum, tempora nulla hic vitae quis laborum corporis exercitationem eaque? Velit culpa earum atque ipsum aliquid molestias ex iste blanditiis, id nesciunt architecto dolores mollitia ratione.</p>
                <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, voluptates. Mollitia ad, voluptas odio magni laborum, provident delectus officiis totam nemo commodi neque reiciendis ipsa consectetur?</p>
            </div>
            <div class="col-span-12 text-16 font-medium text-neutral-600 bg-primary1/10 p-2 rounded-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum culpa atque voluptatem odio nisi consequuntur et. Tempore nulla at dicta quod repudiandae fuga ex iusto.
            </div>
            <div class="col-span-12 relative flex lg:flex-row flex-col lg:gap-6 gap-2">

                <!-- filter section -->
                 <!-- es taki div-n u button-i haytnvum en poqri jamanak -->
                <div class="w-full py-1 lg:hidden block border-t pt-2 px-4">
                    <button id="openBiznesFilter" class="flex items-center gap-1 text-primary2"><svg class="fill-primary2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 512 512"><path d="M3.9 54.9C10.5 40.9 24.5 32 40 32l432 0c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9 320 448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6l0-79.1L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"/></svg>
                        Ֆիլտրեր
                    </button>
                </div>
                <!-- himnakan filtri container  -->
                <div id="biznesFilterContainer" class="w-full h-full lg:relative fixed overflow-y-auto top-0 bg-white z-40 lg:max-w-[300px] lg:translate-x-0 md:-translate-x-[calc(100%+40px)] -translate-x-[calc(100%+16px)] transition-all duration-300">
                    <div class="w-full h-14 bg-white border-b pb-2 flex justify-between lg:hidden">
                                <button id="closeBiznesFilter" class="text-48 -translate-y-1 text-primary1">&times;</button>
                                <button id="logBiznesFiltersButton" class="text-primary1 text-16 font-medium">Կիրառել</button>
                            </div>
                            <h3 class="text-xl font-bold lg:mt-0 mt-4">Ֆիլտրեր</h3>
                            <div class="relative border-b pb-4 mt-4 lg:shadow-none shadow-sm lg:rounded-none rounded-sm lg:p-0 p-2">
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

                            <!-- Price Section -->
                            <div class="w-full lg:max-w-[300px] mt-4 lg:shadow-none shadow-md lg:rounded-none rounded-sm lg:p-0 p-2">
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
                                <button id="clearAllFiltersButton" class="pasiv_button focus:outline-none">
                                    maqrel
                                </button>
                                <button id="logBiznesFiltersButton" class="active_button focus:outline-none">
                                    Ֆիլտրեl
                                </button>
                            </div>

                            <!-- Bajinner -->

                            <div class="w-full flex flex-col gap-2 mt-4 shadow-md lg:p-0 p-2">
                                <!-- amen bajiny ira anunov u linkerov -->
                                <div class="flex flex-col gap-1">
                                    <h3 class="title_h4">Պահեստամասեր և աքսեսուարներ</h3>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Կոմերցիոն <span>(2)</span></a>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Կոմերցիոն <span>(3)</span></a>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Linky <span>(2)</span></a>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Կոմերցիոն <span>(2)</span></a>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Linky <span>(5)</span></a>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Linky <span>(2)</span></a>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Linky <span>(2)</span></a>

                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="title_h4">Պահեստամասեր և աքսեսուարներ</h3>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Linky <span>(2)</span></a>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Linky <span>(2)</span></a>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Linky <span>(2)</span></a>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Linky <span>(2)</span></a>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Linky <span>(2)</span></a>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Linky <span>(2)</span></a>
                                    <a href="#" class="hover_links opacity-80 flex items-center gap-1">Linky <span>(2)</span></a>

                                </div>
                            </div>
                        </div>

                
                <!-- productneri wrapper-->
                <div class="w-full flex flex-col">

                <!-- productneri hatvats stex vor es taki divy ira amboxjutyamb nuyny nkares aranc class= bg-green-100-i kstacvi sovorakan haytararutyunneri hamar  -->
                    <div class="w-full flex flex-col gap-2 sm:p-4 p-1">
                        <!-- search inpput  -->
                        <div class="w-full flex gap-2">
                            <input type="text" class="border border-primary1 rounded-sm w-full px-2 py-1" placeholder="voronum">
                            <button class="active_button">Voronel</button>
                        </div>
                            <!-- products container -->
                            <div class="w-full grid md:grid-cols-minmax220 grid-cols-12 sm:gap-4 gap-2">
                                <!-- product card  -->
                                <a href="#" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-sm overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-sm">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                        </div>
                                        <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                   <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                    </div>
                                </a>
                                <a href="#" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-sm overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-sm">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                        </div>
                                        <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                   <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                    </div>
                                </a>
                                <a href="#" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-sm overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-sm">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                        </div>
                                        <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                   <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                    </div>
                                </a>
                                <a href="#" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-sm overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-sm">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                        </div>
                                        <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                        <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                    </div>
                                </a>
                                <a href="#" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-sm overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-sm">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                        </div>
                                        <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                   <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                    </div>
                                </a>
                                <a href="#" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-sm overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-sm">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
                                        </div>
                                        <p class="sm:text-16 text-14 font-light line-clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, asperiores?</p>
                                   <p class="text-12 text-black font-medium opacity-60 mt-1">Առինջ, 4 քառորդ 2024, 5 սեն</p>
                                    </div>
                                </a>
                                <a href="#" class="w-full h-fit cart_hover md:col-span-1 col-span-6 border p-1 rounded-sm overflow-hidden flex flex-col">
                                    <div class="w-full h-full">
                                        <img src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="" class="w-full h-full object-cover rounded-sm">
                                    </div>
                                    <div class="w-full h-fit">
                                        <p class="md:text-24 text-16 font-semibold">1550 </p>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="w-fit px-2 py-[2px] bg-green-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">pastatxtery stugvats en</div>
                                            <div class="w-fit px-2 py-[2px] bg-orange-300 sm:rounded-sm rounded-sm sm:text-16 text-12 font-light">tej arajark</div>
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

</body>
</html>

<script>
      


document.addEventListener('DOMContentLoaded', function () {


    
    const openBiznesMessageModal = document.getElementById('openBiznesMessageModal');
    const closeBiznesMessageModal = document.getElementById('closeBiznesMessageModal');
    const biznesMessageModal = document.getElementById('biznesMessageModal');

    const openBiznesCommentModal = document.getElementById('openBiznesCommentModal');
    const closeBiznesCommentModal = document.getElementById('closeBiznesCommentModal');
    const biznesCommentModal = document.getElementById('biznesCommentModal');


  


 
    closeBiznesMessageModal.addEventListener('click', () => {
       
        biznesMessageModal.classList.remove('flex');
        biznesMessageModal.classList.add('hidden');
        document.body.style.overflow = 'auto'
        
    });

    openBiznesMessageModal.addEventListener('click', () => {
        biznesMessageModal.classList.add('flex');
        biznesMessageModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden'
    });

    closeBiznesCommentModal.addEventListener('click', () => {
       
       biznesCommentModal.classList.remove('flex');
       biznesCommentModal.classList.add('hidden');
       document.body.style.overflow = 'auto'
       
   });

   openBiznesCommentModal.addEventListener('click', () => {
       biznesCommentModal.classList.add('flex');
       biznesCommentModal.classList.remove('hidden');
       document.body.style.overflow = 'hidden'
   });

   const openBiznesFilter = document.getElementById('openBiznesFilter');
   const closeBiznesFilter = document.getElementById('closeBiznesFilter');
   const biznesFilterContainer = document.getElementById('biznesFilterContainer');
   const header = document.getElementById('header');


   openBiznesFilter.addEventListener('click', () => {
        biznesFilterContainer.classList.remove('md:-translate-x-[calc(100%+40px)]', '-translate-x-[calc(100%+16px)]');
        header.classList.add('hidden');
        document.body.style.overflow = 'hidden'

    });

    closeBiznesFilter.addEventListener('click', () => {
        biznesFilterContainer.classList.add('md:-translate-x-[calc(100%+40px)]', '-translate-x-[calc(100%+16px)]');
        header.classList.remove('hidden');
        document.body.style.overflow = 'auto'

    });

})
   
    
    </script>