<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="/css/output.css" rel="stylesheet">
</head>

<body>
    <div class="h-[100vh] w-full flex justify-center items-center bg-gray-50">
        
        <div class="w-[1220px] h-[670px] flex gap-5 p-5 rounded-3xl shadow-[0_1px_60px_-15px_rgba(0,0,0,0.3)]">
            <div class="w-1/2 h-full bg-gray-200 rounded-2xl overflow-hidden relative">
                <div class="h-full w-full bg-black/45 absolute z-10 flex flex-col justify-between">
                    <div class="p-8">
                        <img src="/asset/logo.png" class="w-10 logo-white" alt="">
                    </div>
                    <div class="text-white m-4 p-6 bg-white/15 backdrop-blur-xl rounded-xl border border-white/20">
                        <h1 class=" font-bold text-2xl mb-2">Buat jalanmu lebih mudah.</h1>
                        <p class="font-medium text-white/80">Selamat datang di portal kami, tempat kemudahan bertemu dengan inovasi. Masuk untuk memulai perjalanan Anda menuju masa depan yang lebih cerah bersama SMK TI Bali Global.</p>
                    </div>
                </div>
                <img src="/asset/bg-login.jpg" alt="bg-login" class="w-[1237px] max-w-[1220px] absolute z-0 -top-24 -left-44" srcset="">
            </div>
            <div class="w-1/2 flex h-full py-5 justify-center">
                <form method="POST" action="/login" class="h-full w-[484px] flex flex-col justify-between">
                    <div><img src="/asset/logo.png" class="w-10" alt=""></div>
                    <div class="w-full">
                        <h2 class=" text-3xl font-bold mb-1">Ayo Masuk</h2>
                        <p class=" text-gray-400 mb-8">Masuk terlebih dahulu, untuk dapat mengakses</p>

                        <input class="w-full py-3 px-4 rounded-lg mb-4" placeholder="Email" type="email" id="email" name="email" autocomplete="username">

                        <div class="flex items-center bg-white rounded-lg border overflow-hidden">
                            <input class="py-3 px-4 w-full border-none" placeholder="Password" type="password" id="password" name="password" autocomplete="current-password">
                            <img class="px-4 cursor-pointer opacity-50" src="/icon/linear/eye-slash.svg" onclick="toogleBtn()" alt="eye-slash" id="toogle-input">
                        </div>
                        <?php if (isset($error)) : ?>
                            <p class="text-red-500"><?= htmlspecialchars($error); ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="w-full bg-main-800 hover:bg-main-600 text-white pl-6 pr-6 hover:pr-4 py-3 rounded-lg font-semibold flex justify-between duration-200"><p>Login</p><img src="/icon/linear/arrow-right.svg" class="invert brightness-0" alt=""></button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toogleBtn() {
            if (document.getElementById('toogle-input').alt == "eye-slash") {
                document.getElementById('toogle-input').src = '/icon/bold/eye.svg';
                document.getElementById('toogle-input').alt = "eye";
                document.getElementById('password').type = "text";
            } else if (document.getElementById('toogle-input').alt == "eye") {
                document.getElementById('toogle-input').src = '/icon/bold/eye-slash.svg';
                document.getElementById('toogle-input').alt = "eye-slash";
                document.getElementById('password').type = "password";
            }
        }
    </script>
</body>

</html>