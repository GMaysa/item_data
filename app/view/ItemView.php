<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link href="/css/output.css" rel="stylesheet">
</head>

<body class="h-[100vh] flex flex-col">
    <?php
    include 'bars/TopBar.php';
    ?>

    <div class="flex h-full w-full">
        <?php include 'bars/SideBar.php'; ?>
        <div class="w-full h-full p-10">
            <div class="w-full h-full rounded-[28px] bg-gray-100/60 p-5 flex flex-col gap-5">
                <div class="w-full h-fit flex justify-between items-center">
                    <div class="flex gap-3">
                        <div class="w-10 h-10 bg-gray-100 flex items-center justify-center rounded-[8.89px]"><img src="/icon/linear/box-1.svg" alt=""></div>
                        <h3 class="font-semibold text-[28px]">Data Barang</h3>
                    </div>
                    <div class="flex gap-2">
                    </div>
                </div>

                <div class="h-full flex flex-col">
                    <div class="w-full h-fit flex justify-between">
                        <div class="flex items-end font-bold relative">
                            <div class="z-30 absolute min-w-[168px] h-[60px] cursor-pointer rounded-t-2xl flex items-center justify-center bg-white duration-300">Semua</div>
                            <div class="z-20 ml-[153px] tab-unactive">Barang Masuk</div>
                            <div class="z-10 ml-[319px] tab-unactive">Barang Keluar</div>
                        </div>
                        <div class="h-[60px] flex gap-5">
                            <div class="h-10 bg-white pr-5 border border-gray-200 overflow-hidden rounded-lg flex">
                                <input type="text" placeholder="Cari disini..." class="h-full w-96 pl-5 outline-none bg-none border-none">
                                <img src="/icon/linear/search-normal-1.svg" class="w-5 opacity-50" alt="Search">
                            </div>
                            <div class="h-10 flex items-center px-7 gap-2.5 border border-gray-300 bg-white rounded-lg">
                                <img class="w-6" src="/icon/bold/filter.svg" alt="">
                                <p>Saring</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-full bg-white rounded-2xl rounded-tl-none px-6 py-2 flex flex-col justify-between">
                        <div class="w-full flex flex-col">
                            <div class="w-full flex px-2 py-6 gap-12 text-gray-400/80">
                                <div class="w-8 text-sm text-center">
                                    No</div>
                                <div class="w-full max-w-[272px] text-sm">
                                    Nama barang <span class="text-gray-300">(kode barang)</span></div>
                                <div class="w-20 text-sm">
                                    Tipe</div>
                                <div class="w-12 text-sm text-center">
                                    Stok</div>
                                <div class="w-28 text-sm">
                                    Tgl. Pembaruan</div>
                                <div class="w-28 text-sm">
                                    Lokasi</div>
                                <div class="w-[180px] text-sm">
                                    Harga</div>
                                <div class="w-[98px] text-sm">
                                    Kondisi</div>
                                <div class="w-[100px] text-sm">
                                    Aksi</div>
                            </div>
                            <div class="flex items-center px-2 py-4 gap-12 text-gray-400">
                                <div class="w-8 text-sm text-center">
                                    1
                                </div>
                                <div class="w-full max-w-[272px] flex flex-col">
                                    <div class="font-semibold text-gray-800 truncate">Kamera DSLR Canon Eos 700d</div>
                                    <div class="text-sm font-medium">K.MM.30.09.SMKTI.013-04</div>
                                </div>
                                <div class="w-20 font-medium">
                                    Kamera
                                </div>
                                <div class="w-12 text-center">
                                    3
                                </div>
                                <div class="w-28">
                                    30 Sept 2024
                                </div>
                                <div class="w-28">
                                    Lab. MM
                                </div>
                                <div class="w-[180px]">
                                    Rp. 2.200.000,00
                                </div>
                                <div class=" w-[98px] flex flex-wrap gap-1">
                                    <div class="flex danger"><img class="w-3" src="/icon/linear/close-circle.svg" alt=""><span class="text-xs">1</span></div>
                                    <div class="flex warn"><img class="w-3" src="/icon/linear/danger.svg" alt=""><span class="text-xs">1</span></div>
                                    <div class="flex succ"><img class="w-3" src="/icon/linear/tick-circle.svg" alt=""><span class="text-xs">1</span></div>
                                </div>
                                <div class="w-[100px] flex gap-1">
                                    <div class=" w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center duration-300 cursor-pointer hover:bg-gray-200"><img class="w-5" src="/icon/bold/edit-2.svg" /></div>
                                    <div class=" w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center duration-300 cursor-pointer hover:bg-red-200"><img class="w-5" src="/icon/bold/trash.svg" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full pb-5 flex justify-between items-center">
                            <div class=" flex gap-[10px]">
                                <button id="showCard" class="h-10 px-6 rounded-lg bg-gray-800 flex items-center gap-[10px] font-semibold text-white"><img class=" invert grayscale" src="/icon/bold/arrow-down-2.svg" alt=""><span>Tambah Barang</span></button>
                                <button class="h-10 px-6 rounded-lg bg-gray-200 flex items-center gap-[10px] font-semibold"><img src="/icon/bold/printer.svg" alt=""><span>Cetak PDF</span></button>
                            </div>
                            <div class="flex gap-8 items-center">
                                <div>
                                    <p class="text-gray-300">total data:&nbsp; <span class="text-gray-400 font-medium">23</span></p>
                                </div>
                                <div class="h-[46px] px-2 bg-gray-100 flex items-center gap-4 rounded-lg">
                                    <div class="w-[30px] h-[30px] flex items-center justify-center rounded-md bg-white"><img class="opacity-20" src="/icon/bold/arrow-left-3.svg" alt=""></div>
                                    <div>1 / 3</div>
                                    <div class="w-[30px] h-[30px] flex items-center justify-center rounded-md bg-white"><img class="opacity-50" src="/icon/bold/arrow-right-2.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden h-full w-full fixed bg-black/40 z-40 justify-end" id="cardBg">
        <div class="h-full w-1/3 px-10 flex flex-col justify-center bg-white shadow-2xl card rounded-l-3xl z-50" id="card">
            <h1 class="font-bold text-3xl">Form Tambah Barang</h1>
        </div>
    </div>
    <script>
        const showCardBtn = document.getElementById('showCard')
        const cardBg = document.getElementById('cardBg')
        const cardItem = document.getElementById('card')

        showCardBtn.addEventListener('click', function() {
            cardBg.classList.remove('hidden');
            cardBg.classList.add('flex');
            setTimeout(()=> {
                cardItem.classList.add('show');
            }, 100)
        })

        cardBg.addEventListener('click', function() {
            cardItem.classList.remove('show');
            setTimeout(() => {
                cardBg.classList.add('hidden');
                cardBg.classList.remove('flex');
            }, 300);
        })
        cardItem.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    </script>
</body>

</html>