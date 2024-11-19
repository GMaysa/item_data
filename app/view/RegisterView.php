<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Sertakan Tailwind CSS -->
    <link href="/public/css/output.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex flex-col items-center justify-center container">
        <form action="/public/register" method="post" class=" w-96 flex flex-col gap-6">
            <div class="w-full flex flex-col">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Tulis username disini" class="py-2 px-4">
            </div>

            <div class="w-full flex flex-col">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Tulis e-mailmu disini" class="py-2 px-4">
            </div>

            <div class="w-full flex flex-col">
                <label for="no_telp">Nomor Telephone</label>
                <input type="text" name="no_telp" id="no_telp" placeholder="tridana@smkti-baliglobal.sch.id" class="py-2 px-4">
            </div>

            <div class="w-full">
                <label for="password">Password</label>
                <div class="flex items-center">
                    <input class="w-full py-2 px-4" type="password" id="inp-pw" name="password" autocomplete="current-password" placeholder="••••••••">
                    <div class="bg-white flex items-center h-[42px] px-4 duration-200 border hover:bg-gray-100 cursor-pointer" onclick="toogleBtn('pw','inp-pw')">
                        <img class="" src="/public/icon/bold/eye-slash.svg" alt="eye-slash" id="pw">
                    </div>
                </div>
            </div>

            <div class="w-full">
                <label for="password">Confirm Password</label>
                <div class="flex items-center">
                    <input class="w-full py-2 px-4" type="password" id="inp-cnf-pw" name="confirm_password" autocomplete="current-password" placeholder="••••••••">
                    <div class="bg-white flex items-center h-[42px] px-4 duration-200 border hover:bg-gray-100 cursor-pointer" onclick="toogleBtn('cnf-pw', 'inp-cnf-pw')">
                        <img class="" src="/public/icon/bold/eye-slash.svg" alt="eye-slash" id="cnf-pw">
                    </div>
                </div>
            </div>

            <div class="w-full flex flex-col relative">
                <label for="role_id">Role</label>
                <div class="flex items-center">
                    <input type="hidden" name="role_id" id="role_id" value="">
                    <input type="text" name="role_disp" id="role_disp" placeholder="Pilih Role" class="w-full py-2 px-4" onclick="opt()" readonly>
                    <div class="bg-white border w-fit h-[42px] px-4 flex items-center duration-200 cursor-pointer hover:bg-gray-100" onclick="opt()"><img src="/public/icon/linear/arrow-down.svg" class="duration-200" id="arrow" alt="" srcset=""></div>
                </div>
                <div class="hidden" id="option">
                    <div class="bg-white w-full border border-gray-200 absolute top-16">
                        <div class="px-3 py-2.5 bg-gray-50 hover:bg-white cursor-pointer border-b border-gray-200 text-gray-700" id="sub-option" onclick="slcOpt(3, 'Pimpinan')">Pimpinan</div>
                        <div class="px-3 py-2.5 bg-gray-50 hover:bg-white cursor-pointer border-b border-gray-200 text-gray-700" id="sub-option" onclick="slcOpt(1, 'Kepala Staf')">Kepala Staf</div>
                        <div class="px-3 py-2.5 bg-gray-50 hover:bg-white cursor-pointer text-gray-700" id="sub-option" onclick="slcOpt(2, 'Staf')">Staf</div>
                    </div>
                </div>
            </div>

            <div class="w-full flex flex-col">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="py-2 px-4 border"></textarea>
            </div>

            <?php if (isset($error)) : ?>
                <p class="text-red-500"><?= htmlspecialchars($error); ?></p>
            <?php endif; ?>

            <button type="submit">Register</button>
        </form>
    </div>

    <script>
        function toogleBtn(tipe, inp) {
            if (document.getElementById(tipe).alt == "eye-slash") {
                document.getElementById(tipe).src = '/public/icon/bold/eye.svg';
                document.getElementById(tipe).alt = "eye";
                document.getElementById(inp).type = "text";
            } else if (document.getElementById(tipe).alt == "eye") {
                document.getElementById(tipe).src = '/public/icon/bold/eye-slash.svg';
                document.getElementById(tipe).alt = "eye-slash";
                document.getElementById(inp).type = "password";
            }
        }

        function opt() {
            document.getElementById('arrow').classList.toggle('rotate-' + 180);
            document.getElementById('option').classList.toggle('!flex');
        }

        function slcOpt(n, data) {
            document.getElementById('role_disp').value = data;
            document.getElementById('role_id').value = n;
            opt();
        }
    </script>
</body>

</html>