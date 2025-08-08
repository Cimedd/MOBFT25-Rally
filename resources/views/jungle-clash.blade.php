<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/style-jungle-clash.css" rel="stylesheet">
  <title>Jungle Clash MOB FT 2025</title>
</head>

<body class="bg-green-200 font-serif m-0 overflow-hidden">
<!-- Landing Page -->
<section id="landingPage" class="relative w-full h-screen">
    <div class="bg-[url('../../public/img/pexels-tonka-1123767.jpg')] bg-white/20 bg-cover bg-center absolute top-0 left-0 w-full h-full flex flex-col justify-center items-start p-12">
        <h2 class="text-white text-xl absolute top-12 left-12">Rally Games</h2>
        <h2 class="absolute top-12 right-12 text-white text-xl">MOB FT 2025</h2>
        <h1 class="text-6xl font-bold text-white leading-tight">JUNGLE<br />CLASH</h1>
        <button id="playButton" class="mt-8 px-8 py-3 bg-green-600 text-white rounded-full text-lg hover:bg-green-800">PLAY!</button>
        <label for="group1Name" class="pl-8 py-2 text-[18px] text-white no-underline block transition-all duration-300">Group 1:</label>
        <select id="group1Name" name="group1Name" value="Group1" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
            <option value="">-- Select Group --</option>
            <option value="Group 1">Group 1</option>
            <option value="Group 2">Group 2</option>
            <option value="Group 3">Group 3</option>
            <option value="Group 4">Group 4</option>
            <option value="Group 5">Group 5</option>
            <option value="Group 6">Group 6</option>
            <option value="Group 7">Group 7</option>
            <option value="Group 8">Group 8</option>
            <option value="Group 9">Group 9</option>
            <option value="Group 10">Group 10</option>
        </select>
        {{-- <input type="select" id="group1Name" name="group1Name" value="Group 1" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"> --}}

        <label for="group2Name" class="pl-8 py-2 text-[18px] text-white no-underline block transition-all duration-300">Group 2 Name:</label>
        <select id="group2Name" name="group2Name" value="Group2" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
            <option value="">-- Select Group --</option>
            <option value="Group 1">Group 1</option>
            <option value="Group 2">Group 2</option>
            <option value="Group 3">Group 3</option>
            <option value="Group 4">Group 4</option>
            <option value="Group 5">Group 5</option>
            <option value="Group 6">Group 6</option>
            <option value="Group 7">Group 7</option>
            <option value="Group 8">Group 8</option>
            <option value="Group 9">Group 9</option>
            <option value="Group 10">Group 10</option>
        </select>
        {{-- <input type="select" id="group2Name" name="group2Name" value="Group 2" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"> --}}
        <button type="button" onclick="saveNames()" class="bg-green-600 hover:bg-green-700 border-none text-white p-4 text-center no-underline inline-block text-[1.5rem] m-[2px_1px] cursor-pointer rounded-lg transition-colors duration-300 ease-in-out mx-4">Save Names</button>
    </div>
</section>

<!-- Main Game Page -->
<div id="mainGamePage" class="h-screen flex flex-col justify-center items-center absolute w-full transition-transform duration-500 ease-in-out">
    <!-- Header -->
    <div class="bg-green-700 absolute top-0 left-0 w-full flex justify-between items-center px-5 py-5 text-white text-2xl cursor-pointer text-center flex-grow">
        <span class="text-2xl cursor-pointer" onclick="openNav()">&#9776;</span>
        <div class="flex-grow text-center">
            <h1 class="text-4xl font-bold">JUNGLE CLASH</h1>
            <p class="text-lg">Hope you enjoy it, yeah!</p>
        </div>
        <div class="w-8"></div> 
    </div>

    <!-- Game Board -->
    <div class="flex justify-around items-center w-4/5 relative mt-[50px] flex-grow px-10">
        <div id="level-start" class="w-[100px] h-[100px] bg-[#6B8E23] rounded-full flex justify-center items-center text-white font-bold shadow-lg cursor-pointer transition-transform duration-200 
        hover:scale-110 hover:transform">START</div>
        
        <div class="absolute border-t-2 border-dashed border-white z-[-1] w-[15%] left-[22.5%] top-1/2 transform -translate-y-1/2"></div>
        <div id="level-1" class="w-[100px] h-[100px] bg-[#6B8E23] rounded-full flex justify-center items-center text-white font-bold shadow-lg cursor-pointer transition-transform duration-200 
        hover:scale-110 hover:transform">Lv.1</div>
        
        <div class="absolute border-t-2 border-dashed border-white z-[-1] w-[15%] left-[42.5%] top-1/2 transform -translate-y-1/2"></div>
        <div id="level-2" class="w-[100px] h-[100px] bg-[#6B8E23] rounded-full flex justify-center items-center text-white font-bold shadow-lg cursor-pointer transition-transform duration-200 
        hover:scale-110 hover:transform">Lv.2</div>
        
        <div class="absolute border-t-2 border-dashed border-white z-[-1] w-[15%] left-[62.5%] top-1/2 transform -translate-y-1/2"></div>
        <div id="level-3" class="w-[100px] h-[100px] bg-[#6B8E23] rounded-full flex justify-center items-center text-white font-bold shadow-lg cursor-pointer transition-transform duration-200 
        hover:scale-110 hover:transform">Lv.3</div>
    </div>

    <!-- Footer -->
    <div class="absolute bottom-5 w-full flex justify-around items-center text-white text-2xl py-2 bg-[rgba(0,0,0,0.3)]">
        <div id="group1NameDisplay">Group 1</div>
        <div id="group1Score">00</div>
        <div>:</div>
        <div id="group2Score">00</div>
        <div id="group2NameDisplay">Group 2</div>
    </div>
</div>


<!-- Side Navigation -->
<div id="mySidenav" class="fixed top-0 left-0 h-full w-0 z-10 bg-[#111] overflow-x-hidden transition-all duration-500 pt-[60px]">
    <a href="javascript:void(0)" class="absolute top-0 right-[25px] text-4xl ml-[50px] pl-8 py-2 text-[18px] text-[#818181] no-underline block transition-all duration-300" 
    onclick="closeNav()">&times;</a>

    <form class="flex flex-col gap-2 px-8">
            {{-- <label for="dealerName" class="pl-8 py-2 text-[18px] text-white no-underline block transition-all duration-300">Penpos Name:</label>
            <!-- <select id="dealerName" name="dealerName" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                <option value="0">Andi</option>
                <option value="1">Budi</option>
            </select> -->
            <input type="text" id="dealerName" name="dealerName" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"> --}}

        <label for="group1Name" class="pl-8 py-2 text-[18px] text-white no-underline block transition-all duration-300">Group 1:</label>
        <select id="group1Name" name="group1Name" value="Group1" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
            <option value="">-- Select Group --</option>
            <option value="Group 1">Group 1</option>
            <option value="Group 2">Group 2</option>
            <option value="Group 3">Group 3</option>
            <option value="Group 4">Group 4</option>
            <option value="Group 5">Group 5</option>
            <option value="Group 6">Group 6</option>
            <option value="Group 7">Group 7</option>
            <option value="Group 8">Group 8</option>
            <option value="Group 9">Group 9</option>
            <option value="Group 10">Group 10</option>
        </select>
        {{-- <input type="select" id="group1Name" name="group1Name" value="Group 1" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"> --}}

        <label for="group2Name" class="pl-8 py-2 text-[18px] text-white no-underline block transition-all duration-300">Group 2 Name:</label>
        <select id="group2Name" name="group2Name" value="Group2" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
            <option value="">-- Select Group --</option>
            <option value="Group 1">Group 1</option>
            <option value="Group 2">Group 2</option>
            <option value="Group 3">Group 3</option>
            <option value="Group 4">Group 4</option>
            <option value="Group 5">Group 5</option>
            <option value="Group 6">Group 6</option>
            <option value="Group 7">Group 7</option>
            <option value="Group 8">Group 8</option>
            <option value="Group 9">Group 9</option>
            <option value="Group 10">Group 10</option>
        </select>
        {{-- <input type="select" id="group2Name" name="group2Name" value="Group 2" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"> --}}
        <button type="button" onclick="saveNames()" class="bg-green-600 hover:bg-green-700 border-none text-white p-4 text-center no-underline inline-block text-[1.5rem] m-[2px_1px] cursor-pointer rounded-lg transition-colors duration-300 ease-in-out mx-4">Save Names</button>
    </form>
</div>


<!-- Popups -->
<div id="startPopup" class="hidden fixed z-20 left-0 top-0 w-full h-full overflow-auto bg-[rgba(0,0,0,0.6)] flex justify-center items-center">
    <div class="bg-[#fefefe] m-auto p-5 border border-[#888] w-4/5 max-w-[500px] rounded-[10px] relative">
        <span class="text-[#aaa] float-right text-[28px] font-bold focus:text-black no-underline cursor-pointer" onclick="closePopup('startPopup')">&times;</span>
        <h2 class="text-2xl font-bold mb-4">The Adventure Begins!</h2>
        <p class="text-gray-800">
            Setelah berabad-abad tersembunyi di balik kabut tropis, Hutan Rimba Sakti akhirnya terbuka kembali. Konon katanya, hanya mereka yang berhati tangguh, cerdas, dan kompak sebagai satu kesatuan yang bisa menaklukkan rintangan di dalamnya.
Para pendahulu menyebut petualangan ini sebagai Jungle Clash—ujian suku tertua di rimba untuk mencari jiwa-jiwa pemimpin masa depan. Kini, giliran kalian, para petualang muda dari MOB FT, untuk membuktikan bahwa kalian layak disebut pejuang rimba sejati.
Hati-hati, setiap sudut hutan menyimpan teka-teki. Setiap tantangan yang kalian hadapi akan menguji keseimbangan, ketangkasan, dan kekuatan kerja sama. Jangan anggap enteng—karena hanya satu kelompok yang bisa keluar sebagai penjaga kehormatan hutan. Dan kini... perjalanan dimulai.
        </p>
    </div>
</div>


<div id="level1Popup" class="hidden fixed z-20 left-0 top-0 w-full h-full overflow-auto bg-[rgba(0,0,0,0.6)] flex justify-center items-center">
    <div class="bg-[#fefefe] m-auto p-5 border border-[#888] w-4/5 max-w-[500px] rounded-[10px] relative">
        <span class="text-[#aaa] float-right text-[28px] font-bold focus:text-black no-underline cursor-pointer" onclick="closePopup('level1Popup')">&times;</span>
        <h2 class="text-2xl font-bold mb-2" id="level1Title">Level 1: Ujian Keseimbangan Suku Rimba</h2>
        <p id="level1Story" class="mb-4 text-gray-800">
            Di tengah rimba belantara yang sunyi, para petualang muda menemukan sebuah jembatan kayu tua yang konon hanya bisa dilewati oleh mereka yang punya keseimbangan ala kepala suku. Seekor burung hantu penjaga berkata:
"Untuk melangkah lebih jauh, kalian harus menunjukkan kestabilan tubuh dan ketenangan jiwa."
Di sinilah dimulai ujian pertama…
        </p>
        <p id="level1Challenge" class="mb-4 text-gray-800"><strong>Challenge:</strong> Jalan bolak-balik dengan buku di kepala.
 Orang terakhir yang paling cepat kembali ke garis start tanpa menjatuhkan buku adalah pemenang game ini.
</p>
        
        
        <div class="timer mb-4 text-2xl font-bold text-gray-700">Time: <span id="timer1">10:00</span></div>
        <button id="startTimer1" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2">Start Timer</button>
        <div class="mt-4">
            <label for="winner1" class="text-gray-700">Winner of Level 1:</label>
            <select id="winner1" name="winner1" class="border p-2 rounded">
                <option value="">Select Winner</option>
                <option value="group1">Group 1</option>
                <option value="group2">Group 2</option>
            </select>
        </div>
    </div>
</div>


<div id="level2Popup" class="hidden fixed z-20 left-0 top-0 w-full h-full overflow-auto bg-[rgba(0,0,0,0.6)] flex justify-center items-center">
    <div class="bg-[#fefefe] m-auto p-5 border border-[#888] w-4/5 max-w-[500px] rounded-[10px] relative">
        <span class="text-[#aaa] float-right text-[28px] font-bold focus:text-black no-underline cursor-pointer" onclick="closePopup('level2Popup')">&times;</span>
        <h2 class="text-2xl font-bold mb-2" id="level2Title">Level 2: Kotak Rahasia Sang Monyet Penjaga</h2>
        <p id="level2Story" class="mb-4 text-gray-800">
            Petualangan membawa mereka ke sebuah pohon besar dengan tiga kotak misterius dijaga oleh seekor monyet bijak. Ia menatap mereka dan berkata:
"Di dalam kotak ini ada harta karun dari hutan. Tapi untuk mengambilnya, kalian harus membuktikan kekuatan napas dan kendali tangan kalian."
Hanya kelompok paling tenang dan terkoordinasi yang bisa mengambil isi kotak tanpa mengusik semangat hutan.
        </p>
        <p id="level2Challenge" class="mb-4 text-gray-800"><strong>Challenge:</strong> Ambil isi kotak pakai sumpit, satu per satu tahan napas.
1 kelompok kecil akan memilih 1 dari 3 kotak, setiap kotak akan berisi sesuatu yang jumlahnya harus diambil menggunakan sumpit selama 2 menit (setiap orang akan bersuara bebas, namun harus 1 tarikan nafas, setelah nafas habis maka bergantian dengan orang berikutnya)
</p>
        
        <div class="timer mb-4 text-2xl font-bold text-gray-700">Time: <span id="timer2">15:00</span></div>
        <button id="startTimer2" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2">Start Timer</button>
        <div class="mt-4">
            <label for="winner2" class="text-gray-700">Winner of Level 2:</label>
            <select id="winner2" name="winner2" class="border p-2 rounded w-full mt-1">
                <option value="">Select Winner</option>
                <option value="group1">Group 1</option>
                <option value="group2">Group 2</option>
            </select>
        </div>
    </div>
</div>


<div id="level3Popup" class="hidden fixed z-20 left-0 top-0 w-full h-full overflow-auto bg-[rgba(0,0,0,0.6)] flex justify-center items-center">
    <div class="bg-[#fefefe] m-auto p-5 border border-[#888] w-4/5 max-w-[500px] rounded-[10px] relative">
        <span class="text-[#aaa] float-right text-[28px] font-bold focus:text-black no-underline cursor-pointer" onclick="closePopup('level3Popup')">&times;</span>
        <h2 class="text-2xl font-bold mb-2" id="level3Title">Level 3: Rangkai Mantra Penjinak Harimau</h2>
        <p id="level3Story" class="mb-4 text-gray-800">
            Tiba-tiba, dari semak-semak muncul seekor harimau rimba yang siap menyerang. Namun, legenda mengatakan bahwa hewan buas itu akan tenang bila mendengar mantra yang disusun dengan irama sempurna.
Dua kelompok harus berdiri bersilang, menyatukan pikiran untuk membuat mantra dari kata-kata ajaib. Tapi ingat, siapa yang gagal bicara atau keluar jalur... akan dikorbankan oleh waktu.
        </p>
        <p id="level3Challenge" class="mb-4 text-gray-800"><strong>Challenge:</strong>  Kelompok kecil bergiliran dengan lawan, menyusun kalimat satu kata per orang.
 Tim yang anggotanya berkurang 2 lebih cepat saat akhir duel adalah pemenang.</p>
        
        <div class="timer mb-4 text-2xl font-bold text-gray-700">Time: <span id="timer3">20:00</span></div>
        <button id="startTimer3" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2">Start Timer</button>
        <div class="mt-4">
            <label for="winner3" class="text-gray-700">Winner of Level 3:</label>
            <select id="winner3" name="winner3" class="border p-2 rounded w-full mt-1">
                <option value="">Select Winner</option>
                <option value="group1">Group 1</option>
                <option value="group2">Group 2</option>
            </select>
        </div>
    </div>
</div>


<div id="winnerPopup" class="hidden fixed z-20 left-0 top-0 w-full h-full overflow-auto bg-[rgba(0,0,0,0.6)] flex justify-center items-center">
    <div class="bg-[#fefefe] m-auto p-5 border border-[#888] w-4/5 max-w-[500px] rounded-[10px] relative">
        <h2 class="text-2xl font-bold mb-4">Congratulations!</h2>
        <p id="finalWinnerMessage" class="text-xl"></p>
        <button onclick="closePopup('winnerPopup'); resetGame();" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4">Play Again</button>
    </div>
</div>

<script src="../js/jungle-clash.js"></script>

</body>
<?php

?>
</html>