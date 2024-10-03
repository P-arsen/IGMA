@vite('resources/css/app.css')

<header id="header" class="w-full sticky top-0 h-16 border-b bg-white z-50">
    <div class=" w-full h-full container_width flex items-center">
        <div class="w-full h-full flex items-center gap-6 justify-between">
            <!-- Logo  -->
            <div>
                Logo
            </div>
            <div class="w-full max-w-[60%] h-full flex gap-2 items-center">
                <!-- Dropdown menu for "Bajinner" -->
                <div class="w-fit h-full flex items-center group/menu cursor-pointer">
                    <div class="group-hover/menu:text-blue-500 transition-all duration-300 w-fit px-2">
                        Bajinner
                    </div>
                    <div class="absolute w-full left-0 top-16 hidden group-hover/menu:block h-screen bg-black/50 shadow-lg z-10">
                        <div class="bg-transparent w-full h-[85%] container_width">
                            <div class="bg-white w-full h-full flex gap-2 rounded-b-md">
                                <ul class="max-w-60 h-full border-r relative">
                                    <li class="py-1 hover:bg-gray-100 px-2 group/submenu">
                                        <a href="#" class="group-hover/submenu:text-blue-600 transition-all duration-300">Linker voronq ktanen bajinner</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="bg-white py-4">
    <div class="container_width">
        <div class="relative w-full">
            <h1 class="title_h1 lg:mb-8 mb-4 mt-4">Անշարժ գույք</h1>
            <!-- productneri ev filtri wrapper  -->
            <div class="flex lg:flex-row flex-col lg:gap-6 gap-2">
                <!-- filter section -->
                <!-- es taki div-n u button-i haytnvum en poqri jamanak -->
                <div class="w-full py-1 lg:hidden block border-t pt-2">
                    <button id="openFilter" class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 512 512"><path d="M3.9 54.9C10.5 40.9 24.5 32 40 32l432 0c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9 320 448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6l0-79.1L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"/></svg> Ֆիլտրեր</button>
                </div>
                <!-- himnakan filtri container  -->
                <div id="filterContainer" class="w-full h-full lg:relative absolute top-0 bg-white z-50 lg:max-w-[300px] lg:translate-x-0 md:-translate-x-[calc(100%+40px)] -translate-x-[calc(100%+16px)] transition-all duration-300">
                    <div class="w-full h-14 bg-white border-b pb-2 flex justify-between lg:hidden">
                        <button id="closeFilter" class="text-48 -translate-y-1 text-blue-600">&times;</button>
                        <button id="logFiltersButton" class="text-blue-600 text-16 font-medium">Կիրառել</button>
                    </div>
                    <h3 class="text-xl font-bold lg:mt-0 mt-4">Ֆիլտրեր</h3>
                    <div class="relative border-b pb-4 mt-4 lg:shadow-none shadow-sm lg:rounded-none rounded-sm lg:p-0 p-2">
                        <button
                            class="w-full text-left bg-white rounded-lg shadow-sm px-4 py-2 flex items-center justify-between focus:outline-none"
                            id="filterButton"
                            aria-expanded="false">
                            <span>Տարածաշրջան</span>
                            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div id="filterDropdown" class="hidden absolute z-10 mt-1 w-full bg-white rounded-lg shadow-lg">
                            <div class="p-4 max-h-64 overflow-y-auto">
                                <!-- Region 1: Երևան -->
                                <div>
                                    <label class="block font-semibold text-black">
                                        <input type="checkbox" class="mr-2 rounded text-blue-600 focus:ring-blue-500 region-checkbox" data-region="yerevan" value="yerevan">
                                        Երևան
                                    </label>
                                    <div class="pl-6 mt-2">
                                        <label class="block text-black">
                                            <input type="checkbox" class="mr-2 rounded text-blue-600 focus:ring-blue-500 subregion-checkbox" data-region="yerevan" value="kentron">
                                            Կենտրոն
                                        </label>

                                    </div>
                                </div>

                            </div>
                            <div class="flex justify-between p-4 border-t border-gray-300">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none" id="selectButton">Ընտրել</button>
                                <button class="text-black px-4 py-2 rounded-lg hover:opacity-80 focus:outline-none" id="clearButton">Ջնջել</button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-2 mt-4 shadow-md lg:p-0 p-2">
                        <!-- content -->
                    </div>
                    <div class="w-full py-1">
                        <button id="shenqiMasin" class="inline-flex w-full rounded-sm border border-gray-300 shadow-sm px-4 py-2 bg-white text-14 font-medium text-black hover:bg-gray-50 focus:outline-none">
                            Выбрать
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div id="shenqiMasinDropDown" class="w-full absolute mt-2 rounded-sm shadow-md bg-white hidden">
                            <div class="py-1" role="none">
                                <label class="block px-4 py-2 text-14 text-black">
                                    <input type="checkbox" class="mr-2" value="Option 1">Option 1
                                </label>
                                <label class="block px-4 py-2 text-14 text-black">
                                    <input type="checkbox" class="mr-2" value="Option 2">Option 2
                                </label>
                                <label class="block px-4 py-2 text-14 text-black">
                                    <input type="checkbox" class="mr-2" value="Option 3">Option 3
                                </label>
                                <!-- add more options as needed -->
                                </div>
                                <div class="flex justify-between p-4 border-t border-gray-300">
                                <button id="applyButton" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none">Выбрать</button>
                                <button id="shenqiMasinMaqrel" class="text-black px-4 py-2 rounded-lg hover:opacity-80 focus:outline-none">Сбросить</button>
                        </div>
                    </div>
                </div>

                </div>

                <!-- productneri wrapper-->
                <div class="w-full flex flex-col">
                    <!-- productneri hatvats stex vor es taki divy ira amboxjutyamb nuyny nkares aranc class= bg-green-100-i kstacvi sovorakan haytararutyunneri hamar  -->
                    <div class="w-full flex flex-col gap-2 bg-green-100 rounded-sm sm:p-4 p-1">
                        <h3 class="title_h3">Թոփ հայտարարություններ</h3>
                            <!-- products container -->
                        <div class="w-full grid md:grid-cols-minmax220 grid-cols-12 sm:gap-4 gap-2">
                           <!-- content -->
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
    const logFiltersButton = document.getElementById('logFiltersButton'); // Кнопка для логирования фильтров
    const clearAllFiltersButton = document.getElementById('clearAllFiltersButton'); // Новая кнопка
    const choiceRadios = document.querySelectorAll('.choice-radio');
    const priceFrom = document.getElementById('priceFrom');
    const priceTo = document.getElementById('priceTo');
    const currencySelect = document.getElementById('currencySelect');
    const filterContainer = document.getElementById('filterContainer');
    const openFilter = document.getElementById('openFilter');
    const closeFilter = document.getElementById('closeFilter');
    const header = document.getElementById('header');

    const shenqiMasin = document.getElementById('shenqiMasin');
    const shenqiMasinDropDown = document.getElementById('shenqiMasinDropDown');
    const applyButton = document.getElementById('applyButton');
    const shenqiMasinMaqrel = document.getElementById('shenqiMasinMaqrel');

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

        // priceFrom.addEventListener('input', () => {
        //     console.log('Цена от:', priceFrom.value);
        // });

        // priceTo.addEventListener('input', () => {
        //     console.log('Цена до:', priceTo.value);
        // });

        // currencySelect.addEventListener('change', () => {
        //     console.log('Выбранная валюта:', currencySelect.value);
        // });
    }

    shenqiMasin.addEventListener('click', function(event) {
    event.stopPropagation();
    shenqiMasinDropDown.classList.toggle('hidden');
  });

  // Handle option selection
  applyButton.addEventListener('click', function() {
    const checkboxes = document.querySelectorAll('#shenqiMasinDropDown input[type="checkbox"]');
    const selectedOptions = [];
    checkboxes.forEach(checkbox => {
      if (checkbox.checked) {
        selectedOptions.push(checkbox.value);
      }
    });
    console.log('Selected options:', selectedOptions);
  });

  // Clear selections
  shenqiMasinMaqrel.addEventListener('click', function() {
    const checkboxes = document.querySelectorAll('#shenqiMasinDropDown input[type="checkbox"]');
    checkboxes.forEach(checkbox => checkbox.checked = false);
    console.log('Selections cleared');
  });

  // Close dropdown if clicked outside
  document.addEventListener('click', function(event) {
    const target = event.target;
    if (!shenqiMasinDropDown.contains(target) && !filterButton.contains(target)) {
      shenqiMasinDropDown.classList.add('hidden');
    }
  });

    openFilter.addEventListener('click', () => {
        filterContainer.classList.remove('md:-translate-x-[calc(100%+40px)]', '-translate-x-[calc(100%+16px)]');
        header.classList.add('hidden');
    });

    closeFilter.addEventListener('click', () => {
        filterContainer.classList.add('md:-translate-x-[calc(100%+40px)]', '-translate-x-[calc(100%+16px)]');
        header.classList.remove('hidden');

    });
});

</script>
