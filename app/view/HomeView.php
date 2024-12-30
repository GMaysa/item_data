<?php
$bulan = isset($_GET['month']) ? $_GET['month'] : date('m');
$tahun = isset($_GET['year']) ? $_GET['year'] : date('Y');

// Menghitung nama bulan, jumlah hari, dan hari pertama bulan ini
$namaBulan = date('F', strtotime("$tahun-$bulan-01"));
$sumHari = date('t', strtotime("$tahun-$bulan-01"));
$stHari = date('N', strtotime("$tahun-$bulan-01")); // Hari pertama (1=Senin, 7=Minggu)

// Menghitung bulan sebelumnya dan bulan depan
$bulanSebelumnya = $bulan - 1;
$tahunSebelumnya = $tahun;
if ($bulanSebelumnya == 0) {
    $bulanSebelumnya = 12;
    $tahunSebelumnya--;
}
$sumHariBulanSebelumnya = date('t', strtotime("$tahunSebelumnya-$bulanSebelumnya-01"));

$bulanDepan = $bulan + 1;
$tahunDepan = $tahun;
if ($bulanDepan == 13) {
    $bulanDepan = 1;
    $tahunDepan++;
}

// Menghitung jumlah cell kosong di awal kalender
$cellKosong = ($stHari == 7) ? 0 : $stHari;

// Variabel untuk iterasi
$j = 1; // Index semua cell
$date = 1; // Tanggal bulan ini
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="/css/output.css" rel="stylesheet">
</head>

<body class="!h-screen w-screen flex flex-col">
    <?php
    include 'bars/TopBar.php';
    ?>

    <div class="flex flex-row h-full w-full">
        <?php include 'bars/SideBar.php'; ?>

        <div class="w-full h-full ~xl/2xl:~p-7/10">
            <div class="w-full h-full rounded-[28px] bg-gray-100/60 p-5 flex ~xl/2xl:~gap-3/5">
                <div class="w-2/3 2xl:w-10/12 h-full flex flex-col justify-between ~xl/2xl:~gap-3/5">
                    <div class="w-full h-fit flex justify-between items-center">
                        <div class="h-full flex items-center">
                            <div class="px-4">
                                <h1 class=" ~xl/2xl:~text-xl/2xl font-semibold text-gray-500">Hi, <?= $username; ?></h1>
                            </div>
                        </div>
                        <div class="flex ~xl/2xl:~py-1/3 ~xl/2xl:~px-1/3 bg-white rounded-lg items-center ~xl/2xl:~gap-2/4 font-semibold">
                            <p class="~xl/2xl:~text-xs/sm ~xl/2xl:~pl-1/2 text-gray-500">1 Bulan</p>
                            <div class="~xl/2xl:~w-7/10 ~xl/2xl:~h-7/10 flex items-center justify-center rounded-[8.89px] bg-gray-100"><img class="~xl/2xl:~w-4/5" src="/icon/linear/timer-1.svg" alt=""></div>
                        </div>
                    </div>

                    <div class="~xl/2xl:~h-14/28 w-full flex ~xl/2xl:~gap-3/5">
                        <div class="w-full h-full flex items-center gap-4 p-4 bg-white rounded-2xl ">
                            <div class="~xl/2xl:~w-8/12 ~xl/2xl:~h-8/12 rounded-xl bg-gray-100 flex items-center justify-center"><img class="rotate-90" src="/icon/linear/arrow-right.svg" alt=""></div>
                            <div class="flex flex-col ~xl/2xl:~gap-0.5/2">
                                <h6 class="~xl/2xl:~text-xs/sm text-gray-500">Barang Masuk</h6>
                                <p class="~xl/2xl:~text-lg/2xl font-semibold">40</p>
                            </div>
                        </div>
                        <div class="w-full h-full flex items-center gap-4 p-4 bg-white/40 border border-white rounded-2xl ">
                            <div class="~xl/2xl:~w-8/12 ~xl/2xl:~h-8/12 rounded-xl bg-white flex items-center justify-center"><img class="" src="/icon/linear/convert-3d-cube.svg" alt=""></div>
                            <div class="flex flex-col ~xl/2xl:~gap-0.5/2">
                                <h6 class="~xl/2xl:~text-xs/sm text-gray-500">Work Order</h6>
                                <p class="~xl/2xl:~text-lg/2xl font-semibold">40</p>
                            </div>
                        </div>
                        <div class="w-full h-full flex items-center gap-4 p-4 bg-white rounded-2xl ">
                            <div class="~xl/2xl:~w-8/12 ~xl/2xl:~h-8/12 rounded-xl bg-gray-100 flex items-center justify-center"><img class="-rotate-90" src="/icon/linear/arrow-right.svg" alt=""></div>
                            <div class="flex flex-col ~xl/2xl:~gap-0.5/2">
                                <h6 class="~xl/2xl:~text-xs/sm text-gray-500">Barang Keluar</h6>
                                <p class="~xl/2xl:~text-lg/2xl font-semibold">40</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full h-full bg-white rounded-2xl p-4 flex flex-col ~xl/2xl:~gap-2/5">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gray-100 flex items-center justify-center rounded-[8.89px]"><img src="/icon/linear/box-1.svg" alt=""></div>
                                <h3 class="font-semibold ~xl/2xl:~text-xl/3xl">Data Barang</h3>
                            </div>
                            <div class="flex items-center ~xl/2xl:~h-7/10 ~xl/2xl:~px-3/6 gap-2.5 border border-gray-400 rounded-lg">
                                <img class="~xl/2xl:~w-3/5" src="/icon/bold/filter.svg" alt="">
                                <p class="~xl/2xl:~text-xs/sm font-semibold">Saring</p>
                            </div>
                        </div>

                        <div>
                            <div class="w-full">
                                <div class="w-full ~xl/2xl:~px-2/4 ~xl/2xl:~py-3/6 border-b mb-1.5 flex items-center justify-between">
                                    <div class="w-7 ~xl/2xl:~text-xs/sm font-medium text-gray-400 text-center">No.</div>
                                    <div class="~xl/2xl:~w-48/56 ~xl/2xl:~text-xs/sm font-medium text-gray-400">Nama barang</div>
                                    <div class="w-7 ~xl/2xl:~text-xs/sm font-medium text-gray-400 text-center">Stok</div>
                                    <div class="w-28 ~xl/2xl:~text-xs/sm font-medium text-gray-400">Tgl.Pembaruan</div>
                                    <div class="w-28 ~xl/2xl:~text-xs/sm font-medium text-gray-400">Lokasi</div>
                                    <div class="!w-[110px] ~xl/2xl:~text-xs/sm font-medium text-gray-400">Kondisi</div>
                                </div>
                                <div class="w-full ~xl/2xl:~px-2/4 ~xl/2xl:~py-2/4 flex justify-between items-center">
                                    <div class="w-7 ~xl/2xl:~text-sm/base font-medium text-gray-400 text-center">1</div>
                                    <div class="~xl/2xl:~w-48/56 ~xl/2xl:~text-sm/base text-gray-500 truncate font-medium flex flex-col">Nama barang</div>
                                    <div class="w-7 ~xl/2xl:~text-sm/base font-medium text-gray-500 text-center">3</div>
                                    <div class="w-28 ~xl/2xl:~text-sm/base font-medium text-gray-400">30 Sept 2024</div>
                                    <div class="w-28 ~xl/2xl:~text-sm/base font-medium text-gray-500">Lab. MM</div>
                                    <div class="!w-[110px] ~xl/2xl:~text-sm/base font-medium text-gray-500 flex flex-wrap gap-1">
                                        <div class="flex danger"><img class="w-3" src="/icon/linear/close-circle.svg" alt=""><span class="text-xs">1</span></div>
                                        <div class="flex warn"><img class="w-3" src="/icon/linear/danger.svg" alt=""><span class="text-xs">1</span></div>
                                        <div class="flex succ"><img class="w-3" src="/icon/linear/tick-circle.svg" alt=""><span class="text-xs">1</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 2xl:w-3/12 h-full flex flex-col ~xl/2xl:~gap-3/5">
                    <div class="w-full bg-[#292D32] h-fit rounded-2xl ~xl/2xl:~p-2/4 flex flex-col justify-center ~xl/2xl:~gap-1.5/3 text-white">
                        <div class="w-full h-fit flex justify-between items-center">
                            <div class="w-fit flex gap-[7px] items-center">
                                <div class="~xl/2xl:~p-0.5/1.5 flex justify-center items-center bg-white/5 rounded-lg"><img src="/icon/bold/notification-bing.svg" class="~xl/2xl:~w-3/4" alt=""></div>
                                <h6 class="~xl/2xl:~text-sm/base font-semibold text-white/60">Notifikasi</h6>
                            </div>
                            <a class="text-xs text-white/50 hover:text-main-500 duration-300 cursor-pointer ">Lebih Banyak</a>
                        </div>
                        <div class="w-full bg-white/10 ~xl/2xl:~px-1.5/5 ~xl/2xl:~py-1/4 flex gap-2 justify-between items-center rounded-lg">
                            <div class="w-full flex flex-col ~xl/2xl:~gap-0/2">
                                <h4 class="~xl/2xl:~text-sm/base font-semibold h-5">Subject</h4>
                                <p class="w-48 truncate text-sm text-white/60">Lorem Ipsum dolor sid ammet colored</p>
                            </div>
                            <div class="w-fit flex gap-2 items-center"><span class=" text-xs text-white/60">20.45</span>
                                <div class="bg-main-500 w-2 h-2 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-fit ~xl/2xl:~p-2/4 bg-white rounded-2xl flex flex-col ~xl/2xl:~gap-2/4">
                        <div class="w-full flex justify-between items-center">
                            <div class="w-fit flex gap-[7px] items-center">
                                <div class="~xl/2xl:~p-1/2 flex justify-center items-center rounded-lg bg-gray-50"><img class="~xl/2xl:~w-4/6" src="/icon/linear/calendar-edit.svg" alt=""></div>
                                <h6 class="font-semibold ~xl/2xl:~text-lg/xl leading-none">Tugas Baru</h6>
                            </div>
                            <div class="text-xs px-3 cursor-pointer text-gray-400 hover:text-main-500 duration-300">Lebih banyak</div>
                        </div>
                        <div class="w-full bg-gray-100 ~xl/2xl:~px-2/5 ~xl/2xl:~py-2/4 flex justify-between items-center rounded-lg">
                            <div class="flex flex-col ~xl/2xl:~gap-0.5/2">
                                <h4 class="~xl/2xl:~text-sm/base font-semibold h-5">Subject</h4>
                                <p class="text-gray-800/60 ~xl/2xl:~text-xs/sm truncate ~xl/2xl:~w-36/48">Lorem Ipsum dolor sid ammet pondium</p>
                            </div>
                            <div class="flex flex-col ~xl/2xl:~gap-0.5/1 items-end">
                                <div class="text-xs text-right text-gray-500">due date</div>
                                <span class="text-xs text-right text-gray-400/60">23/09/24</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-fit ~xl/2xl:~p-2/4 bg-white rounded-2xl flex flex-col ~xl/2xl:~gap-2/4">
                        <div class="w-full flex justify-between items-center">
                            <div class="w-fit flex gap-[7px] items-center">
                                <div class="~xl/2xl:~p-1/2 flex justify-center items-center rounded-lg bg-gray-50"><img class="~xl/2xl:~w-4/6" src="/icon/linear/calendar.svg" alt=""></div>
                                <h6 class="font-semibold ~xl/2xl:~text-lg/xl leading-none">Kalender</h6>
                            </div>
                            <div class="text-xs ~xl/2xl:~py-1/2 px-3 border text-gray-500 rounded-full cursor-pointer"><?= "$namaBulan $tahun" ?></div>
                        </div>
                        <div class="w-full h-64 rounded-lg bg-gray-100 ~xl/2xl:~p-2/4 flex flex-col justify-between">
                            <div id="dayName w-full">
                                <ul class="w-full flex justify-between ~xl/2xl:~pb-2/4">
                                    <li class="w-full h-[15px] flex justify-center text-xs font-bold leading-none">S</li>
                                    <li class="w-full h-[15px] flex justify-center text-xs font-bold leading-none">M</li>
                                    <li class="w-full h-[15px] flex justify-center text-xs font-bold leading-none">T</li>
                                    <li class="w-full h-[15px] flex justify-center text-xs font-bold leading-none">W</li>
                                    <li class="w-full h-[15px] flex justify-center text-xs font-bold leading-none">T</li>
                                    <li class="w-full h-[15px] flex justify-center text-xs font-bold leading-none">F</li>
                                    <li class="w-full h-[15px] flex justify-center text-xs font-bold leading-none">S</li>
                                </ul>
                            </div>
                            <div class="daysNum w-full flex flex-col ~xl/2xl:~gap-1/2">
                                <?php
                                for ($i = 1; $i <= 5; $i++) {
                                    echo "<ul class='w-full flex justify-between'>";
                                    for ($k = 1; $k <= 7; $k++) {
                                        if ($j <= $cellKosong) {
                                            $tanggalBulanSebelumnya = $sumHariBulanSebelumnya - ($cellKosong - $j);
                                            echo "<li class='empty !w-full ~xl/2xl:~h-10/8 flex items-center justify-center text-xs text-gray-300 cursor-pointer'>$tanggalBulanSebelumnya</li>";
                                        } elseif ($date <= $sumHari) {
                                            $theDay = ($date == date('j') && $bulan == date('m') && $tahun == date('Y')) ? 'bg-main-500 text-white rounded-full' : '';
                                            echo "<li class='$theDay !w-full ~xl/2xl:~h-10/8 flex items-center justify-center text-xs cursor-pointer'>$date</li>";
                                            $date++;
                                        } else {
                                            $tanggalBulanDepan = $j - ($cellKosong + $sumHari);
                                            echo "<li class='empty !w-full ~xl/2xl:~h-10/8 flex items-center justify-center text-xs text-gray-300 cursor-pointer'>$tanggalBulanDepan</li>";
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