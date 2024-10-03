@extends('layouts.appfront')
@section('content')


<section>
    <div class="container_width grid grid-cols-12 gap-6">
        <div class="lg:col-span-8 col-span-12 flex flex-col gap-6 lg:pb-8 pb-0 h-fit">
                <!-- Slider -->
                <div class="relative w-full group/slider">
                    <div class="overflow-hidden relative h-full max-h-[420px] rounded-lg shadow-lg">
                        <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                            <!-- Slide 1 -->
                            <div class="w-full flex-shrink-0">
                                <img src="{{asset('storage/house/1.webp')}}" alt="Slide 1" class="w-full h-full object-cover cursor-pointer">
                            </div>
                            <!-- Slide 2 -->
                            <div class="w-full flex-shrink-0">
                                <img src="{{asset('storage/house/2.webp')}}" alt="Slide 2" class="w-full h-full object-cover cursor-pointer">
                            </div>
                            <!-- Slide 3 -->
                            <div class="w-full flex-shrink-0">
                                <img src="{{asset('storage/house/3.webp')}}" alt="Slide 3" class="w-full h-full object-cover cursor-pointer">
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
            <div class="lg:hidden block">
                <h3 class="smallDesktop:text-24 text-16 opacity-80 font-medium">
                    Երեք հարկանի ամառանոց, 2-րդ փողոց 4-րդ փակուղի Քարաշամբում, 800 քմ, 2 սանհանգույց, եվրովերանորոգված
                </h3>
                <p class="flex-shrink-0 smallDesktop:text-32 md:text-24 text-16 font-semibold z-40 mt-2">60.000 orakan</p>
            </div>

            <!-- hascen -->
            <div class="w-full py-2 text-blue-600 bg-neutral-100 px-2 rounded-md">2-րդ փողոց 4-րդ փակուղի, Քարաշամբ</div>

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
            <div class="lg:block hidden">
                <h3 class="smallDesktop:text-24 text-16 opacity-80 font-medium">
                    Երեք հարկանի ամառանոց, 2-րդ փողոց 4-րդ փակուղի Քարաշամբում, 800 քմ, 2 սանհանգույց, եվրովերանորոգված
                </h3>
                <p class="flex-shrink-0 smallDesktop:text-32 md:text-24 text-16 font-semibold z-40 mt-2">60.000 orakan</p>
            </div>
            <div class="py-4">
                <div class="flex gap-2 items-center">
                    <div class="w-16 h-16 rounded-full flex-shrink-0 overflow-hidden">
                        <img src="https://t3.ftcdn.net/jpg/02/43/12/34/360_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg" alt="" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="smallDesktop:text-16 text-14 font-medium opacity-80 text-black">Valod Papi</h3>

                    </div>
                </div>
                <p class="text-14 text-black font-light mt-2 opacity-50 ml-2">List.am-ում է` 29.11.2012</p>
                <div class="flex gap-2 mt-4 border-b pb-4">
                    <button class="w-full py-1 text-16 text-white font-medium bg-blue-600 rounded-md">Grel</button>
                    <button class="w-full py-1 text-16 text-white font-medium bg-green-600 rounded-md">Zangaharel</button>
                </div>
            </div>

            <!-- nmanatip haytararutyunner -->

            <div class="w-full flex flex-col gap-2">
                <h4 class="title_h4 mb-2">Նմանատիպ հայտարարություններ</h4>

                <!-- productnery -->
                 <div class="w-full flex lg:flex-col flex-row flex-wrap justify-center gap-4">
                    <!--  -->
                     <a href="#" class="w-fit flex lg:flex-row flex-col gap-2 group/prodCard">
                         <img src="https://letsenhance.io/static/73136da51c245e80edc6ccfe44888a99/1015f/MainBefore.jpg" alt="" class="w-full lg:max-w-[140px] max-w-[300px] h-full max-h-[120px] group-hover/prodCard:scale-[1.01] transition-all duration-300 object-cover rounded-md overflow-hidden flex-shrink-0">
                         <div class="w-full max-w-[300px]">
                             <p class="text-14 text-black font-light group-hover/prodCard:text-blue-600 transition-all duration-300 ">Երեք հարկանի ամառանոց, 2-րդ փողոց 4-րդ փակուղի Քարաշամբում, 800 քմ, 2 սանհանգույց, եվրովերանորոգված</p>
                             <p class="text-16 font-semibold text-black">60000</p>
                            </div>
                        </a>
                        <!--  -->
                        <a href="#" class="w-fit flex lg:flex-row flex-col gap-2 group/prodCard">
                            <img src="https://letsenhance.io/static/73136da51c245e80edc6ccfe44888a99/1015f/MainBefore.jpg" alt="" class="w-full lg:max-w-[140px] max-w-[300px] h-full max-h-[120px] group-hover/prodCard:scale-[1.01] transition-all duration-300 object-cover rounded-md overflow-hidden flex-shrink-0">
                            <div class="w-full max-w-[300px]">
                                <p class="text-14 text-black font-light group-hover/prodCard:text-blue-600 transition-all duration-300 ">Երեք հարկանի ամառանոց, 2-րդ փողոց 4-րդ փակուղի Քարաշամբում, 800 քմ, 2 սանհանգույց, եվրովերանորոգված</p>
                                <p class="text-16 font-semibold text-black">60000</p>
                            </div>
                        </a>
                        <!--  -->
                        <a href="#" class="w-fit flex lg:flex-row flex-col gap-2 group/prodCard">
                            <img src="https://letsenhance.io/static/73136da51c245e80edc6ccfe44888a99/1015f/MainBefore.jpg" alt="" class="w-full lg:max-w-[140px] max-w-[300px] h-full max-h-[120px] group-hover/prodCard:scale-[1.01] transition-all duration-300 object-cover rounded-md overflow-hidden flex-shrink-0">
                            <div class="w-full max-w-[300px]">
                                <p class="text-14 text-black font-light group-hover/prodCard:text-blue-600 transition-all duration-300 ">Երեք հարկանի ամառանոց, 2-րդ փողոց 4-րդ փակուղի Քարաշամբում, 800 քմ, 2 սանհանգույց, եվրովերանորոգված</p>
                                <p class="text-16 font-semibold text-black">60000</p>
                            </div>
                        </a>
                        <!--  -->
                </div>
            </div>
        </div>
    </div>
</section>

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

@endsection
