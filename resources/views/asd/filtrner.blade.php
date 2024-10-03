@vite('resources/css/app.css')

<!-- bolor filtrneri wrapper  -->

<div class="container_width">

    <div class="w-full flex flex-col gap-2 mt-10 py-4">

    <!-- gortsakalutyun te anhat filter  -->
        <div class="w-full">
            <!-- Section Title -->
            <h2 class="text-lg font-semibold text-gray-800">Ձեր կարգավիճակը</h2>

            <!-- Option 1 -->
            <div class="flex items-start mt-4">
                <input
                id="status1"
                type="radio"
                name="status"
                value="student"
                class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500"
                checked
                >
                <label for="status1" class="ml-3 text-base font-medium text-gray-800">
                    Սովորող
                    <p class="text-sm text-gray-500">
                        Եթե դուք սովորում եք և ձեր հիմնական գործը սովորելն է՝ սովորող
                    </p>
                </label>
            </div>

            <!-- Option 2 -->
            <div class="flex items-start mt-4">
                <input
                id="status2"
                type="radio"
                name="status"
                value="employee"
                class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500"
                >
                <label for="status2" class="ml-3 text-base font-medium text-gray-800">
                    Գործողություն
                    <p class="text-sm text-gray-500">
                        Եթե դուք աշխատում եք, բույսեր կամ աշխատանքի գնում եք՝ գործողություն
                    </p>
                </label>
            </div>
        </div>


        <!-- gtnvelu vayry filter  -->
        <div class="w-full">
            <!-- Section Title -->
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Գտնվելու վայրը</h2>

            <!-- Տարածաշրջանը (Dropdown) -->
            <div class="mb-4">
                <label for="region" class="block text-base font-medium text-gray-800 mb-2">
                    Տարածաշրջանը
                </label>
                <select id="region" class="w-full max-w-96 p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="yerevan">Արարատ</option>
                    <option value="bh">Արարատ</option>
                    <option value="sdv">Արարատ</option>
                    <option value="sdv">Արարատ</option>
                    <!-- add more options here as needed -->
                </select>
            </div>

            <!-- Փոստը (Text Input) -->
            <div class="mb-4 ">
                <label for="post" class="block text-base font-medium text-gray-800 mb-2">
                    Փողոց
                </label>
                <input
                type="text"
                id="post"
                class="w-full max-w-96 p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Շենքի համար (Checkbox and Input) -->
            <div class="flex items-center flex-wrap gap-2">
                <!-- Text input -->
                <div class="w-1/3">
                    <label for="building-number" class="block text-base font-medium text-gray-800 mb-2">
                        Շենքի համարը
                    </label>
                    <input
                        type="text"
                        id="building-number"
                        class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Checkbox -->
                <div class="w-fit h-full flex items-center ">
                    <input
                        type="checkbox"
                        class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                    <label for="no-building-number" class="ml-2 text-base font-medium text-gray-800">
                        Շենքի համարը չցուցադրել հայտարարության մեջ
                    </label>
                </div>
            </div>
        </div>

        <!-- selecti filter  -->

        <!-- orinak shenqi masin  -->

        <div class="mt-4">
            <label for="type" class="block text-base font-medium text-gray-800 mb-2">
                Շինության տիպ
            </label>
            <select id="region" class="w-full max-w-96 p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="yerevan">Քարե</option>
                <option value="bh">Պանելային</option>
                <option value="sdv">Մոնոլիտ</option>
                <option value="sdv">Աղյուսե</option>
                    <!-- add more options here as needed -->
            </select>
        </div>

        <!-- checkboxeri filtrer  -->
        <div class="w-full">
            <!-- Section Title -->
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Առկա են</h2>

            <!-- Checkbox Group -->
            <div class="space-y-2">
                <!-- Checkbox 1 -->
                <div class="flex items-center">
                    <input
                        id="option1"
                        type="checkbox"
                        class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                    <label for="option1" class="ml-3 text-base font-medium text-gray-800">
                        Դռնոֆոն
                    </label>
                </div>

                <!-- Checkbox 2 -->
                <div class="flex items-center">
                    <input
                        id="option2"
                        type="checkbox"
                        class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                    <label for="option2" class="ml-3 text-base font-medium text-gray-800">
                        Դռնակապի
                    </label>
                </div>

                <!-- Checkbox 3 -->
                <div class="flex items-center">
                    <input
                    id="option3"
                    type="checkbox"
                    class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                    <label for="option3" class="ml-3 text-base font-medium text-gray-800">
                        Ինտերնետային կապ
                    </label>
                </div>
            </div>
        </div>

        <!-- gumari filtracian -->

        <div class="bg-white w-full mt-4">
            <h2 class="text-xl font-bold text-gray-800 mb-2">արժեքը</h2>

            <div class="flex items-center space-x-4">
                <!-- Input Label -->
                <label for="price" class="block text-gray-700 text-sm font-semibold">Գին</label>

                <!-- Price Input -->
                <input type="number" id="price" value="542" class="w-24 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">

                <!-- Currency Dropdown -->
                <select id="region" class="w-full max-w-48 p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="yerevan">֏ (AMD)</option>
                    <option value="bh">$ (USD)</option>
                    <option value="sdv">€ (EUR)</option>
                    <!-- add more options here as needed -->
                </select>

            </div>
        </div>
        <!-- informaciayi filter  -->

        <div class="w-full max-w-[80%] bg-white mt-4">
            <h2 class="text-xl font-bold text-gray-800 mb-2">Մանրամասն տեղեկություններ</h2>

            <!-- Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Անվանում</label>
                <input type="text" id="name" class="w-full px-3 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-2 focus:ring-primary2" placeholder="lskc">
            </div>

            <!-- Description Textarea -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-semibold mb-2">Նկարագիր</label>
                <textarea id="description" rows="5" class="w-full px-3 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-2 resize-none focus:ring-primary2" placeholder="ldskc dsv"></textarea>
            </div>

        </div>


        <!-- File Upload Section -->
        <div class="w-full">
            <div>
                <label for="file" class="block text-gray-700 text-sm font-semibold mb-2">Լուսանկարներ</label>
                <button class="pasiv_button">Ավելացնել լուսանկար</button>
            </div>
            <div class="w-full flex sm:justify-start justify-center flex-wrap gap-3 mt-4">
                <div class="w-28 h-28 relative">
                    <button class="absolute rounded-full bg-red-500 p-1 -right-2 -top-2">
                        <svg class="w-6 !stroke-red-600 rotate-45" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="448,224 288,224 288,64 224,64 224,224 64,224 64,288 224,288 224,448 288,448 288,288 448,288 "/></svg>
                    </button>
                    <img class="w-full h-full rounded-md overflow-hidden object-cover" src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="">
                </div>
                <div class="w-28 h-28 relative">
                    <button class="absolute rounded-full bg-red-500 p-1 -right-2 -top-2">
                        <svg class="w-6 !stroke-red-600 rotate-45" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="448,224 288,224 288,64 224,64 224,224 64,224 64,288 224,288 224,448 288,448 288,288 448,288 "/></svg>
                    </button>
                    <img class="w-full h-full rounded-md overflow-hidden object-cover" src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="">
                </div>
                <div class="w-28 h-28 relative">
                    <button class="absolute rounded-full bg-red-500 p-1 -right-2 -top-2">
                        <svg class="w-6 !stroke-red-600 rotate-45" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="448,224 288,224 288,64 224,64 224,224 64,224 64,288 224,288 224,448 288,448 288,288 448,288 "/></svg>
                    </button>
                    <img class="w-full h-full rounded-md overflow-hidden object-cover" src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="">
                </div>
                <div class="w-28 h-28 relative">
                    <button class="absolute rounded-full bg-red-500 p-1 -right-2 -top-2">
                        <svg class="w-6 !stroke-red-600 rotate-45" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="448,224 288,224 288,64 224,64 224,224 64,224 64,288 224,288 224,448 288,448 288,288 448,288 "/></svg>
                    </button>
                    <img class="w-full h-full rounded-md overflow-hidden object-cover" src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="">
                </div>
                <div class="w-28 h-28 relative">
                    <button class="absolute rounded-full bg-red-500 p-1 -right-2 -top-2">
                        <svg class="w-6 !stroke-red-600 rotate-45" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="448,224 288,224 288,64 224,64 224,224 64,224 64,288 224,288 224,448 288,448 288,288 448,288 "/></svg>
                    </button>
                    <img class="w-full h-full rounded-md overflow-hidden object-cover" src="https://pic.estate.am/image/c3/cb/c3cb545ae911899f9626d7efede7e7e4_c420x280.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- contaktayin tvyalner -->
        <div class="w-full mt-4">
            <div class="w-fit h-full flex flex-col gap-1 ">
                <h2 class="text-xl font-bold text-gray-800">Կոնտակտային տվյալներ</h2>

                <div class="w-fit h-full flex items-center ">
                    <input
                        type="checkbox"
                        class="w-4 h-4 text-primary2 border-gray-300 focus:ring-primary2">
                    <label for="no-building-number" class="ml-2 text-base font-medium text-gray-800">
                        +37477811001
                    </label>
                </div>
            </div>
        </div>

        <!-- avartakan pahy  -->

        <div class="w-full flex justify-between gap-4 border-t border-t-primary2 pt-4">
            <a href="#" class="pasiv_button">chexarkel</a>
            <a href="#" class="active_button">ditum</a>
        </div>
    </div>
</div>
