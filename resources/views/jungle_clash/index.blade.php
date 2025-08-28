<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js','resources/js/jungle-clash.js'])
    <title>Jungle Clash MOB FT 2025</title>
</head>
<body>
    <form method = "post" action="{{ route('jungleclash.play') }}"> 
    @csrf
        <div style="background-image: url('{{ asset('img/pexels-tonka-1123767.jpg') }}')" class="bg-white/20 bg-cover bg-center absolute top-0 left-0 w-full h-full flex flex-col justify-center items-start p-12">
        <h2 class="text-white text-xl absolute top-12 left-12">Rally Games</h2>
        <img src="{{ asset('img/LOGO MOBFT FIXX_Teks Kanan.png') }}" alt="MOBFT 2025 Logo" class="absolute top-5 right-5 w-48 h-auto">
        <h1 class="text-6xl font-bold text-white leading-tight">JUNGLE<br />CLASH</h1>
        
        <label for="group1Name" class="pl-8 py-2 text-[18px] text-white no-underline block transition-all duration-300">Group A :</label>
        <select id="group1Name" name="group1Name" value="Group1" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
            <option value="">-- Select Group --</option>
            <option value="SEMESTA 1">SEMESTA 1</option>
            <option value="SEMESTA 2">SEMESTA 2</option>
            <option value="SEMESTA 3">SEMESTA 3</option>
            <option value="SEMESTA 4">SEMESTA 4</option>
            <option value="SEMESTA 5">SEMESTA 5</option>
            <option value="SEMESTA 6">SEMESTA 6</option>
            <option value="SEMESTA 7">SEMESTA 7</option>
            <option value="SEMESTA 8">SEMESTA 8</option>
            <option value="SEMESTA 9">SEMESTA 9</option>
            <option value="SEMESTA 10">SEMESTA 10</option>
            <option value="SEMESTA 11">SEMESTA 11</option>
            <option value="SEMESTA 12">SEMESTA 12</option>
            <option value="SEMESTA 13">SEMESTA 13</option>
            <option value="SEMESTA 14">SEMESTA 14</option>
            <option value="SEMESTA 15">SEMESTA 15</option>
            <option value="SEMESTA 16">SEMESTA 16</option>
            <option value="SEMESTA 17">SEMESTA 17</option>
            <option value="SEMESTA 18">SEMESTA 18</option>
        </select>
        {{-- <input type="select" id="group1Name" name="group1Name" value="Group 1" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"> --}}

        <label for="group2Name" class="pl-8 py-2 text-[18px] text-white no-underline block transition-all duration-300">Group B :</label>
        <select id="group2Name" name="group2Name" value="Group2" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
            <option value="">-- Select Group --</option>
            <option value="SEMESTA 1">SEMESTA 1</option>
            <option value="SEMESTA 2">SEMESTA 2</option>
            <option value="SEMESTA 3">SEMESTA 3</option>
            <option value="SEMESTA 4">SEMESTA 4</option>
            <option value="SEMESTA 5">SEMESTA 5</option>
            <option value="SEMESTA 6">SEMESTA 6</option>
            <option value="SEMESTA 7">SEMESTA 7</option>
            <option value="SEMESTA 8">SEMESTA 8</option>
            <option value="SEMESTA 9">SEMESTA 9</option>
            <option value="SEMESTA 10">SEMESTA 10</option>
            <option value="SEMESTA 11">SEMESTA 11</option>
            <option value="SEMESTA 12">SEMESTA 12</option>
            <option value="SEMESTA 13">SEMESTA 13</option>
            <option value="SEMESTA 14">SEMESTA 14</option>
            <option value="SEMESTA 15">SEMESTA 15</option>
            <option value="SEMESTA 16">SEMESTA 16</option>
            <option value="SEMESTA 17">SEMESTA 17</option>
            <option value="SEMESTA 18">SEMESTA 18</option>
        </select>
        {{-- <input type="select" id="group2Name" name="group2Name" value="Group 2" class="mb-2 bg-gray-800 border border-gray-600 text-white rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"> --}}
        <button id="playButton" class="mt-8 px-8 py-3 bg-green-600 text-white rounded-full text-lg hover:bg-green-800">PLAY!</button>
    </div>
    </form>
</body>
</html>