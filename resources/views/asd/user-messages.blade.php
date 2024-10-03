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
                             <div id="dropDown" class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-sm shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
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
    <div class="container_width">
        <div class="grid grid-cols-12 gap-6 py-2 sm:mt-5 mt-2">
        <div class="col-span-12 lg:flex flex-wrap justify-center hidden gap-2 border-neutral-200">
                <div class="w-fit flex gap-1 items-center p-1 rounded-sm border border-primary1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-5 object-cover rounded-full">
                    <a href="#" class="hover_links"> Հայտարարություններ </a>
                </div>

                <div class="w-fit flex gap-1 items-center p-1 rounded-sm bg-primary1 border border-primary1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-5 object-cover rounded-full">
                    <a href="#" class="text-neutral-50"> Հաղորդագրություններ </a>
                </div>
                <div class="w-fit flex gap-1 items-center p-1 border rounded-sm border-primary1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-5 object-cover rounded-full">
                    <a href="#" class="hover_links"> Մեկնաբանություններ</a>
                </div>
                <div class="w-fit flex gap-1 items-center p-1 border rounded-sm border-primary1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-5 object-cover rounded-full">
                    <a href="#" class="hover_links"> Դրամապանակ</a>
                </div>
                <div class="w-fit flex gap-1 items-center p-1 border rounded-sm border-primary1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-5 object-cover rounded-full">
                    <a href="#" class="hover_links"> Կարգավորումներ </a>
                </div>
            </div>

            <!-- esi mobili jamanak  -->

            <div class="col-span-12 lg:hidden block">
                <div class="relative mt-5">
                    <button id="eserMessagesDropdownButton" class="flex items-center gap-4 bg-white sm:text-24 text-16 font-bold py-2 rounded-sm">
                        <!-- vor bajnum linenq et bajni anuny -->
                        Հաղորդագրություններ
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg> 
                    </button>

                    <div id="userMessagesDropdown" class="absolute left-0 mt-2 w-fit px-2 bg-white z-40 border rounded-sm border-gray-200 hidden">
                        <a href="#" class="flex items-center gap-1 px-4 py-2 text-14">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="icon" class="w-6 h-6"> Հայտարարություններ
                        </a>

                        <a href="#" class="flex items-center gap-1 px-4 py-2 text-14">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="icon" class="w-6 h-6"> Հաղորդագրություններ
                        </a>
                        <a href="#" class="flex items-center gap-1 px-4 py-2 text-14">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="icon" class="w-6 h-6"> Մեկնաբանություններ
                        </a>
                        <a href="#" class="flex items-center gap-1 px-4 py-2 text-14">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="icon" class="w-6 h-6"> Դրամապանակ
                        </a>
                        <a href="#" class="flex items-center gap-1 px-4 py-2 text-14">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="icon" class="w-6 h-6"> Կարգավորումներ
                        </a>
                    </div>
                </div>            
            </div>
            <!--  -->

            <div class="xl:col-span-9 lg:col-span-8 col-span-12 flex flex-col">
                <div class="flex gap-2">
                    <a href="#" class="active_button">Մուտքային</a>
                    <a href="#" class="pasiv_button">Ուղարկված</a>
                </div>

                <!-- ete ka es enq cuyc talis  -->
                 <!-- namakneri containerna -->
                <div class="w-full flex flex-col gap-1 mt-5">
                    <!-- mi namaki cartna -->
                    <a href="#" class="w-full h-fit p-2 flex items-center gap-4 hover:bg-neutral-200 transition-all duration-300 rounded-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-16 h-16 rounded-full flex-shrink-0 object-cover">
                        <div class="w-full flex md:flex-row flex-col justify-between md:items-center items-start">
                            <div class="flex flex-col">
                                <h4 class="title_h4">Poxos Petros</h4>
                                <p class="sm:text-16 text-14 font-medium text-neutral-900">Opel Astra հետչբեք, 1.6 լ, 1999 թ., գազ</p>
                                <p class="text-16 font-light text-neutral-700">verjin namaky</p>
                            </div>
                            <p class="text-14 text-neutral-700">12.02.2024 15:28</p>
                        </div>
                    </a>
                    <a href="#" class="w-full h-fit p-2 flex items-center gap-4 hover:bg-neutral-200 transition-all duration-300 rounded-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-16 h-16 rounded-full flex-shrink-0 object-cover">
                        <div class="w-full flex md:flex-row flex-col justify-between md:items-center items-start">
                            <div class="flex flex-col">
                                <h4 class="title_h4">Poxos Petros</h4>
                                <p class="sm:text-16 text-14 font-medium text-neutral-900">Opel Astra հետչբեք, 1.6 լ, 1999 թ., գազ</p>
                                <p class="text-16 font-light text-neutral-700">verjin namaky</p>
                            </div>
                            <p class="text-14 text-neutral-700">12.02.2024 15:28</p>
                        </div>
                    </a>
                    <a href="#" class="w-full h-fit p-2 flex items-center gap-4 hover:bg-neutral-200 transition-all duration-300 rounded-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-16 h-16 rounded-full flex-shrink-0 object-cover">
                        <div class="w-full flex md:flex-row flex-col justify-between md:items-center items-start">
                            <div class="flex flex-col">
                                <h4 class="title_h4">Poxos Petros</h4>
                                <p class="sm:text-16 text-14 font-medium text-neutral-900">Opel Astra հետչբեք, 1.6 լ, 1999 թ., գազ</p>
                                <p class="text-16 font-light text-neutral-700">verjin namaky</p>
                            </div>
                            <p class="text-14 text-neutral-700">12.02.2024 15:28</p>
                        </div>
                    </a>
                    <a href="#" class="w-full h-fit p-2 flex items-center gap-4 hover:bg-neutral-200 transition-all duration-300 rounded-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s" alt="" class="w-16 h-16 rounded-full flex-shrink-0 object-cover">
                        <div class="w-full flex md:flex-row flex-col justify-between md:items-center items-start">
                            <div class="flex flex-col">
                                <h4 class="title_h4">Poxos Petros</h4>
                                <p class="sm:text-16 text-14 font-medium text-neutral-900">Opel Astra հետչբեք, 1.6 լ, 1999 թ., գազ</p>
                                <p class="text-16 font-light text-neutral-700">verjin namaky</p>
                            </div>
                            <p class="text-14 text-neutral-700">12.02.2024 15:28</p>
                        </div>
                    </a>
                    
                </div>

                <!-- ete chka es  -->

            </div>
        </div>
    </div>
</section>


</body>
</html>



<script>
    const eserMessagesDropdownButton = document.getElementById('eserMessagesDropdownButton');
const userMessagesDropdown = document.getElementById('userMessagesDropdown');

// Открытие/закрытие выпадающего меню по клику на кнопку
eserMessagesDropdownButton.addEventListener('click', () => {
    userMessagesDropdown.classList.toggle('hidden');
});

// Закрытие меню, если клик был за пределами меню
document.addEventListener('click', function(event) {
    if (!eserMessagesDropdownButton.contains(event.target) && !userMessagesDropdown.contains(event.target)) {
        userMessagesDropdown.classList.add('hidden');
    }
});
</script>

                


                





