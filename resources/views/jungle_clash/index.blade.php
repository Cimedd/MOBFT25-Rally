<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/style-jungle-clash.css" rel="stylesheet">
    <title>Jungle Clash MOB FT 2025</title>
</head>
<body>
    <form method = "post" action="{{ route('jungleclash.play') }}"> 
    @csrf
        <div style="background-image: url('{{ asset('img/pexels-tonka-1123767.jpg') }}')" class="bg-white/20 bg-cover bg-center absolute top-0 left-0 w-full h-full flex flex-col justify-center items-start p-12">
        <h2 class="text-white text-xl absolute top-12 left-12">Rally Games</h2>
        <h2 class="absolute top-12 right-12 text-white text-xl">MOB FT 2025</h2>
        <h1 class="text-6xl font-bold text-white leading-tight">JUNGLE<br />CLASH</h1>
        
        <label for="group1Name" class="pl-8 py-2 text-[18px] text-white no-underline block transition-all duration-300">Group 1 :</label>
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

        <label for="group2Name" class="pl-8 py-2 text-[18px] text-white no-underline block transition-all duration-300">Group 2 :</label>
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
        <button id="playButton" class="mt-8 px-8 py-3 bg-green-600 text-white rounded-full text-lg hover:bg-green-800">PLAY!</button>
    </div>
    </form>
</body>
</html>