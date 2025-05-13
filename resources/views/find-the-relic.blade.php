<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find the Relic - Pilih Kelompok</title>
    <link rel = "stylesheet" href = "css/home.css">
    <?php

    session_start();

        $cards = [
    1 => [
        'code' => 'JUNGLE',
        'question' => 'Apa nama ilmiah dari pohon jati?',
        'options' => ['Tectona', 'Ficus', 'Dipterocarpus', 'Albizia'],
        'answer' => 'Tectona grandis',
        'is_relic' => true,
        'answered' => false,
        'image' => 'img/Angka 1-01.jpg', // gambar relic (ditampilkan setelah benar)
    ],
    2 => [
        'code' => 'RIVER',
        'question' => 'Hewan mana yang hidup di sungai?',
        'options' => ['Ikan Arwana', 'Komodo', 'Elang Jawa', 'Kucing'],
        'answer' => 'Ikan Arwana',
        'is_relic' => false,
        'answered' => false,
        'image' => 'img/Angka 2-01.jpg', // pengecoh
    ],
    // ... sampai 12
];

$player = [];

$_SESSION['kartu'] = $cards;
$_SESSION['pemain'] = $player;
    ?>
</head>
<body>
    <h1 class="title">FIND THE RELIC</h1>

    <form action="{{ route('displaycards') }}" method="GET">
        @csrf
        <div class="group-selection">
            <span class="selection-label">Pilih kelompok:</span>
            <div class="select-group">
                <select id="kelompokA" name="kelompokA" required>
                    <option value="" disabled selected>Kelompok A</option>
                    @for ($i = 1; $i <= 18; $i++)
                        <option value="{{ $i }}">Kelompok {{ $i }}</option>
                    @endfor
                </select>
                <select id="kelompokB" name="kelompokB" required>
                    <option value="" disabled selected>Kelompok B</option>
                    @for ($i = 1; $i <= 18; $i++)
                        <option value="{{ $i }}">Kelompok {{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="group-selection">
            <div class="select-group">
                <button type="submit" name="submits" class="start-button">KELOMPOK A</button>
                <button type="submit" name="submits" class="start-button">KELOMPOK B</button>
            </div>
        </div>
    </form>
</body>
</html>