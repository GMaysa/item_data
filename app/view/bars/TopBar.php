<?php
$username = $_SESSION['user']['username'];
?>

<nav class="w-full !h-20 flex justify-between items-center px-8 py-2 border-b border-[#CCDAE4]">
    <a href="/dashboard" class="w-fit flex items-center gap-4">
        <img src="/asset/logo.png" class="w-8">
        <h1 class="font-medium">SMKTI BALI GLOBAL</h1>
    </a>
    <div class="flex gap-4">
        <div class="rounded-full w-11 h-11 flex items-center justify-center border border-[#f1f1f1] bg-[#fbfbfb] cursor-pointer duration-200 hover:bg-main-900 icn-hvr"><img src="/icon/bold/moon.svg" alt=""></div>
        <div class="rounded-full w-11 h-11 flex items-center justify-center border border-[#f1f1f1] bg-[#fbfbfb] cursor-pointer duration-200 hover:bg-main-900 icn-hvr" onmouseover="onhover(event, 'notification-bing','notif')" onmouseout="outhover(event, 'notification-bing','notif')"><img src="/icon/linear/notification-bing.svg" id="notif" alt=""></div>
        <div class="relative">
            <div class="rounded-full w-fit h-11 flex items-center pl-4 pr-14 border border-[#f1f1f1] bg-[#fbfbfb]">
                <h2><?php echo $username; ?></h2>
            </div>
            <div class="w-12 h-12 bg-gray-100 rounded-full border-2 border-gray-400/20 absolute -top-[2.5px] right-0 flex items-end justify-center overflow-hidden">
                <img class="w-9 opacity-40" src="/icon/bold/frame.svg" alt="">
            </div>
        </div>
    </div>
</nav>