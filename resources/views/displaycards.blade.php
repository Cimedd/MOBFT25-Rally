<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Find the Relic</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .title {
            text-align: center;
            margin: 30px 0;
            font-size: 2.5rem;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 15px;
            margin-bottom: 40px;
            max-width: 800px;
            justify-content: center;
        }

        .card-button {
            padding: 0;
            background: none;
            border: none;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .card-button:hover {
            transform: scale(1.05);
        }

        .gambar {
            width: 140px;
            height: 210px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .gambarzonk {
            width: 140px;
            height: 210px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            filter: brightness(0.6);
        }

        .game-controls {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            margin-top: 20px;
            width: 100%;
            max-width: 800px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .input-group label {
            font-size: 1.2rem;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        #kode {
            padding: 8px 12px;
            font-size: 1rem;
            border: 2px solid #ddd;
            border-radius: 6px;
            width: 120px;
            text-align: center;
        }

        .submit-button {
            padding: 10px 25px;
            font-size: 1.1rem;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .submit-button:hover {
            background-color: #218838;
        }

        .score-section {
            text-align: center;
            padding: 15px 25px;
            border-radius: 8px;
        }

        .score-section p {
            margin: 8px 0;
            font-size: 1.1rem;
        }

        .score-section p:first-child {
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 12px;
        }

        .back-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #2c3e50;
            color: white;
            padding: 12px 24px;
            border-radius: 10px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
            z-index: 1000;
        }

        .back-button:hover {
            background-color: #34495e;
            transform: translateY(-2px);
        }

        .top-left-buttons {
            position: fixed;
            top: 20px;
            left: 20px;
            display: flex;
            gap: 10px;
            z-index: 1000;
        }

        .top-button {
            background-color: #2c3e50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.2s;
        }

        .top-button:hover {
            background-color: #34495e;
        }

        #timer {
            position: fixed;
            top: 20px;
            right: 20px;
            font-size: 2rem;
            font-weight: bold;
            background-color: #2c3e50;
            color: white;
            padding: 10px 15px;
            border-radius: 10px;
            z-index: 9999;
        }

        .btn-success {
            background-color: #28a745; /* Hijau */
            color: white;
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <h1 class="title">FIND THE RELIC</h1>
    @if (isset($err))
        <div class="alert alert-danger" role="alert">
            {{ $err }}
        </div>
    @endif
    <div class="top-left-buttons">
        <form method="GET" action="{{ route('showRelic') }}" style="display:inline;">
            <input type="hidden" name="kelompok" value="A">
            <button type="submit" class="top-button {{ $kelompok == 'A' ? 'btn-success' : '' }}">{{ $pemain[0]['kelompokA'] }}</button>
        </form>
        <form method="GET" action="{{ route('showRelic') }}" style="display:inline;">
            <input type="hidden" name="kelompok" value="B">
            <button type="submit" class="top-button {{ $kelompok == 'B' ? 'btn-success' : '' }}">{{ $pemain[1]['kelompokB'] }}</button>
        </form>
    </div>

    <div id="timer"></div>

    <div class="card-grid">
        @for ($i = 1; $i <= 12; $i++)
            <button class="card-button">
                {{-- src nya nanti diganti --}}
                <img class="<?php if($arr[$i]['is_relic'] == false && $arr[$i]['answered'] == true) { echo 'gambarzonk'; } else { echo 'gambar'; }?>" 
                src='{{ $arr[$i]['image'] }}' alt="Card {{ $i }}">
            </button>
        @endfor
    </div>
    <form action="{{ route('masuk') }}" method="POST">
        @csrf
        <div class="game-controls">
            <div class="input-group">
                <label for="kode">INPUT KODE</label>
                <input type="text" id="kode" name="kode">
            </div>
            <input type="hidden" id="kelompok" name="kelompok" value={{ $kelompok }}>
            <button type="submit" name="submit" class="submit-button">SUBMIT</button>
        </div>
    </form>

    <a href="{{ url('/find-the-relic') }}" class="back-button">← Kembali ke Home</a>
    <script>
        function pilihKelompok(kode) {
            document.getElementById('kelompok').value = kode;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    {{-- Timer --}}
    <script>
        const startTime = new Date("{{ $startTime }}").getTime();
        const duration = {{ $duration }} * 1000; // dalam ms
        const endTime = startTime + duration;

        function updateTimer() {
            const now = new Date().getTime();
            const remaining = endTime - now;

            if (remaining <= 0) {
                document.getElementById("timer").textContent = "WAKTU HABIS!";
                // Optional: redirect atau submit otomatis
                window.location.href = "{{ route('endRelic') }}";
                return;
            }

            const minutes = Math.floor((remaining / 1000) / 60);
            const seconds = Math.floor((remaining / 1000) % 60);
            document.getElementById("timer").textContent =
                `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        }

        updateTimer();
        setInterval(updateTimer, 1000);
    </script>
</body>

</html>
