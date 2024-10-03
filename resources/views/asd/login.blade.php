@vite('resources/css/app.css')


<div class="w-full h-16">
    <div class="container_width h-full flex justify-between items-center">
        <div>Logo</div>
        <select class="bg-neutral-200 rounded-sm px-2 py-1" name="language" id="language">
            <option value="en">en</option>
            <option value="am">am</option>
            <option value="ru">ru</option>
        </select>
    </div>

</div>

<section>
    <div class="container_width h-full flex flex-col justify-center items-center">
        <div class="w-full max-w-96 flex flex-col justify-center items-center gap-2 border rounded-sm p-4">
            <h2 class="title_h2 mb-2">mutq gortsel</h2>
            <input type="email" id="loginInput" class="w-full p-2 rounded-sm border" placeholder="login">
            <div class="w-full relative">
                <input type="password" id="passwordInput" class="w-full p-2 rounded-sm border pr-20" placeholder="password">
                <a href="#" class="absolute right-1 top-1/2 -translate-y-1/2 hover_links text-14">moracel eq?</a>
            </div>
            <button id="loginButton" class="w-full bg-blue-500 border-none text-xl text-white py-1 rounded-sm font-medium">Mutq</button>
            <p class="text-blue-500 mt-4 font-medium">der gracvats cheq</p>
            <a href="#" class="w-full text-center px-4 mx-auto border py-1 rounded-sm border-blue-500 bg-white text-blue-500 text-16">Grancum</a>
        </div>
    </div>
</section>

<script>
    document.getElementById('loginButton').addEventListener('click', function() {
        const login = document.getElementById('loginInput').value;
        const password = document.getElementById('passwordInput').value;
        
        console.log('Login:', login);
        console.log('Password:', password);
    });
</script>
