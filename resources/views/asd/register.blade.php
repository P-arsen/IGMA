@vite('resources/css/app.css')


<section>
    <div class="container_width h-full flex flex-col justify-center items-center">
        <div class="w-full max-w-96 flex flex-col justify-center items-center gap-2 border rounded-sm p-4">
            <h2 class="title_h2 mb-2">grancum</h2>
            <input type="email" id="emailInput" class="w-full p-2 rounded-sm border" placeholder="email">
            <button id="nextButton" class="w-full bg-blue-500 border-none text-xl text-white py-1 rounded-sm font-medium">Sharunakel</button>
        </div>
    </div>
</section>

<!-- es sectiony hajord qaylna vor kody ga  -->

<section>
    <div class="container_width h-full flex flex-col justify-center items-center">
        <div class="w-full max-w-96 flex flex-col justify-center items-center gap-2 border rounded-sm p-4">
            <h2 class="title_h2 mb-2 text-center">Հաստատեք էլ.փոստի հասցեն</h2>
            <p class="sm:text-16 text-14 opacity-70">Մենք ուղարկեցինք հաստատման կոդով նամակ Ձեր կողմից նշված էլ.փոստին:</p>
            <p class="sm:text-16 text-14 opacity-70">Մուտքագրեք հաստատման կոդը</p>
            <input type="text" id="verificationCode" class="w-full max-w-32 p-2 rounded-sm border">
            <button id="nextButton" class="w-full bg-blue-500 border-none text-xl text-white py-1 rounded-sm font-medium">hastatel</button>
            <a href="#" class="text-14 text-blue-500 mt-4">verskskel</a>
        </div>
    </div>
</section>

<script>
    document.getElementById('nextButton').addEventListener('click', function() {
        const verificationCode = document.getElementById('verificationCode').value;
        
        console.log('verificationCode:', verificationCode);
    });
</script>
        