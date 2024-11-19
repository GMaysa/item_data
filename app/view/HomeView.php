<?php 
    $bulan = isset($_GET['month']) ? $_GET['month'] : date('m');
    $tahun = isset($_GET['year']) ? $_GET['year'] : date('Y');
    
    $namaBulan = date('F', strtotime('$tahun-$bulan-01'));
    $sumHari = date('t', strtotime('$tahun-$bulan-03'));
    $stHari = date('N', strtotime('$tahun-$bulan-01'));

    $cellKosong = $stHari - 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="/public/css/output.css" rel="stylesheet">
</head>

<body class="h-[100vh] flex flex-col">
    <?php
    include 'bars/TopBar.php';
    ?>

    <div class="flex h-full w-full">
        <?php include 'bars/SideBar.php'; ?>

        <!-- main content -->
        <div class="w-full h-full p-10">
            <div class="w-full h-full rounded-[28px] bg-gray-100/60 p-5 flex gap-5">
                <div class="w-2/3 h-full flex flex-col justify-between gap-5">
                    <div class="w-full h-fit flex justify-between items-center">
                        <div class="h-full flex items-center">
                            <div class="px-4">
                                <h1 class=" text-[32px] font-semibold text-gray-500">Hi, <?= $username; ?></h1>
                            </div>
                        </div>
                        <div class="flex py-2 px-4 bg-white rounded-lg items-center gap-4 font-semibold">
                            <p>1 Bulan</p>
                            <div class="w-10 h-10 flex items-center justify-center rounded-[8.89px] bg-gray-100"><img class="w-[22.22px] h-[22.22px]" src="/public/icon/linear/timer-1.svg" alt=""></div>
                        </div>
                    </div>

                    <div class="h-28 w-full flex gap-5">
                        <div class="w-full flex items-center gap-4 p-4 bg-white rounded-2xl ">
                            <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center"><img class="rotate-90" src="/public/icon/linear/arrow-right.svg" alt=""></div>
                            <div class="flex flex-col gap-2">
                                <h6 class="text-sm text-gray-500">Barang Masuk</h6>
                                <p class="text-2xl font-semibold">40</p>
                            </div>
                        </div>
                        <div class="w-full flex items-center gap-4 p-4 bg-white/40 border border-white rounded-2xl ">
                            <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center"><img class="" src="/public/icon/linear/convert-3d-cube.svg" alt=""></div>
                            <div class="flex flex-col gap-2">
                                <h6 class="text-sm text-gray-500">Work Order</h6>
                                <p class="text-2xl font-semibold">40</p>
                            </div>
                        </div>
                        <div class="w-full flex items-center gap-4 p-4 bg-white rounded-2xl ">
                            <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center"><img class="-rotate-90" src="/public/icon/linear/arrow-right.svg" alt=""></div>
                            <div class="flex flex-col gap-2">
                                <h6 class="text-sm text-gray-500">Barang Keluar</h6>
                                <p class="text-2xl font-semibold">40</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full h-full bg-white rounded-2xl p-4 flex flex-col gap-5">
                        <div class="flex justify-between">
                            <div class="flex gap-3">
                                <div class="w-10 h-10 bg-gray-100 flex items-center justify-center rounded-[8.89px]"><img src="/public/icon/linear/box-1.svg" alt=""></div>
                                <h3 class="font-semibold text-[28px]">Data Barang</h3>
                            </div>
                            <div class="flex items-center px-7 gap-2.5 border border-gray-400 rounded-lg">
                                <img class="w-6" src="/public/icon/bold/filter.svg" alt="">
                                <p>Saring</p>
                            </div>
                        </div>

                        <div>
                            <table>
                                <tr>
                                    <td>No.</td>
                                    <td>Nama barang <span>(kode barang)</span></td>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 h-full flex flex-col gap-5">
                    <div class="w-full bg-[#292D32] h-[172px] rounded-2xl p-4 flex flex-col gap-4 text-white">
                        <div class="w-full flex justify-between items-center">
                            <div class="w-fit flex gap-[7px] items-center">
                                <div class=" p-2 flex justify-center items-center bg-white/5 rounded-lg"><img src="/public/icon/bold/notification-bing.svg" alt=""></div>
                                <h6 class="font-semibold text-white/60">Notifikasi</h6>
                            </div>
                            <div class="text-xs">Lebih Banyak</div>
                        </div>
                        <div class="w-full bg-white/10 px-5 py-4 flex justify-between items-center rounded-lg">
                            <div class="flex flex-col gap-2">
                                <h4 class="text-xl font-semibold h-5">Subject</h4>
                                <p class="text-white/60">Subject</p>
                            </div>
                            <div class="flex gap-2 items-center"><span class=" text-sm text-white/60">20.45</span>
                                <div class="bg-main-500 w-2 h-2 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-full bg-white rounded-2xl"></div>
                    <div class="w-full !h-[428px] p-4 bg-white rounded-2xl flex flex-col justify-between gap-6">
                        <div class="w-full flex justify-between items-center">
                            <div class="w-fit flex gap-[7px] items-center">
                                <div class=" p-2 flex justify-center items-center rounded-lg bg-gray-50"><img src="/public/icon/linear/calendar.svg" alt=""></div>
                                <h6 class="font-semibold text-[28px] leading-none">Kalender</h6>
                            </div>
                            <div class="text-xs py-2 px-3 border rounded-full cursor-pointer">November 2024</div>
                        </div>
                        <div class="w-full !h-[284px] rounded-lg bg-gray-100 p-4 flex flex-col justify-between">
                            <div id="dayName w-full">
                                <ul class="w-full flex justify-between pb-[15px]">
                                    <li class="w-[38px] h-[15px] flex justify-center text-xs font-bold leading-none">S</li>
                                    <li class="w-[38px] h-[15px] flex justify-center text-xs font-bold leading-none">M</li>
                                    <li class="w-[38px] h-[15px] flex justify-center text-xs font-bold leading-none">T</li>
                                    <li class="w-[38px] h-[15px] flex justify-center text-xs font-bold leading-none">W</li>
                                    <li class="w-[38px] h-[15px] flex justify-center text-xs font-bold leading-none">T</li>
                                    <li class="w-[38px] h-[15px] flex justify-center text-xs font-bold leading-none">F</li>
                                    <li class="w-[38px] h-[15px] flex justify-center text-xs font-bold leading-none">S</li>
                                </ul>
                            </div>
                            <div class="daysNum w-full flex flex-col gap-2">
                                <?php
                                    $j = 1;
                                    $date = 1;
                                    
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo "<ul class='w-full flex justify-between'>";
                                        for ($k = 1; $k <= 7; $k++) {
                                            if ($j <= $cellKosong) {
                                                echo "<li class='empty w-[38px] h-[38px] flex items-center justify-center text-xs cursor-pointer'></li>";
                                            } elseif ($date <= $sumHari) {
                                                $theDay = ($date == date('j') && $bulan == date('m') && $tahun == date('Y')) ? 'bg-main-500 text-white rounded-full' : '';
                                                echo "<li class='$theDay w-[38px] h-[38px] flex items-center justify-center text-xs cursor-pointer'>$date</li>";
                                                $date++;
                                            } else {
                                                echo "<li class='empty w-[38px] h-[38px] flex items-center justify-center text-xs cursor-pointer'></li>";
                                            }
                                            $j++;
                                        }
                                        echo "</ul>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>