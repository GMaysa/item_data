<nav class="min-w-[336px] h-full flex flex-col justify-between border-r border-[#CCDAE4] py-8 pr-6">
    <div class="w-full flex flex-col gap-8">
        <div class="menu-active" id="sub-menu-1" onmouseleave="outhover(event,'home-1','home')" onmouseover="onhover(event,'home-1','home')">
            <img src="/public/icon/bold/home-1.svg" id="home" alt="">
            <p>Dashboard</p>
        </div>
        <div class="menu-unactive" id="sub-menu-2" onmouseleave="outhover(event,'3d-cube-scan','barang')" onmouseover="onhover(event,'3d-cube-scan','barang')">
            <img src="/public/icon/linear/3d-cube-scan.svg" id="barang" alt="">
            <p>Data Barang</p>
        </div>
        <div class="menu-unactive" id="sub-menu-3" onmouseleave="outhover(event,'convert-3d-cube','wo')" onmouseover="onhover(event,'convert-3d-cube','wo')">
            <img src="/public/icon/linear/convert-3d-cube.svg" id="wo" alt="">
            <p>Work Order</p>
        </div>
        <div class="menu-unactive" id="sub-menu-4" onmouseleave="outhover(event,'calendar-2','jadwal')" onmouseover="onhover(event,'calendar-2','jadwal')">
            <img src="/public/icon/linear/calendar-2.svg" id="jadwal" alt="">
            <p>Jadwal</p>
        </div>
    </div>

    <form action="/public/logout" method="POST" style="display: inline;">
        <button class="w-full pl-10 py-4 rounded-r-full bg-gray-200/50 text-left flex gap-3 duration-300 hover:bg-red-600 hover:text-white opacity-50 hover:opacity-100 icn-hvr" type="submit" onclick="return confirm('Are you sure you want to log out?');"><img src="/public/icon/linear/logout-1.svg" alt="">
            <p>Logout</p>
        </button>
    </form>
</nav>

<script>
    function onhover(event, icon, img) {
        if (!event.currentTarget.classList.contains('menu-active')) {
            let imgElement = document.getElementById(img);
            imgElement.src = "/public/icon/bold/" + icon + ".svg";
            imgElement.classList.add("grayscale", "brightness-50"); 
        }
    }

    function outhover(event, icon, img) {
        let imgElement = document.getElementById(img);

        if (!event.currentTarget.classList.contains('menu-active')) {
            imgElement.src = "/public/icon/linear/" + icon + ".svg";
            imgElement.classList.remove("grayscale", "brightness-50");
        }
    }

    function changeIcon(event, src) {
        if (event == 'old') {
            newSrc = src.replace('/bold/', '/linear/');
        } else if (event == 'new') {
            newSrc = src.replace('/linear/', '/bold/');
        }
        // console.log(src);
        return newSrc;
    }

    function clicky(n) {
        if (document.getElementById(n).className == 'menu-unactive') {
            let actv = document.getElementsByClassName('menu-active')[0].querySelector('img');
            actv.src = changeIcon('old', actv.src);
            document.getElementsByClassName('menu-active')[0].className = 'menu-unactive';
            let n_actv = document.getElementById(n);
            n_actv.className = 'menu-active';
            n_actv.querySelector('img').src = changeIcon('new', n_actv.querySelector('img').src);
            document.getElementsByClassName('menu-active')[0].querySelector('img').classList.remove("grayscale", "brightness-50");
        }
    }

    document.getElementById('sub-menu-1').addEventListener('click', () => {
        clicky('sub-menu-1');
    });
    document.getElementById('sub-menu-2').addEventListener('click', () => {
        clicky('sub-menu-2');
    });
    document.getElementById('sub-menu-3').addEventListener('click', () => {
        clicky('sub-menu-3');
    });
    document.getElementById('sub-menu-4').addEventListener('click', () => {
        clicky('sub-menu-4');
    });
</script>