<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Find the Relic</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('https://images.unsplash.com/photo-1476231682828-37e571bc172f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            color: #fff;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 0;
        }

        * {
            position: relative;
            z-index: 1;
        }

        .title {
            text-align: center;
            margin: 30px 0;
            font-size: 3rem;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            position: relative;
        }

        .title::after {
            content: '';
            display: block;
            width: 150px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #8bc34a, transparent);
            margin: 20px auto;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 15px;
            margin-bottom: 40px;
            width: 90%;
            max-width: 1000px;
            justify-content: center;
        }

        @media (max-width: 1200px) {
            .card-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .card-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .card-button {
            padding: 0;
            background: none;
            border: none;
            cursor: pointer;
            transition: transform 0.2s;
            perspective: 1000px;
            display: flex;
            justify-content: center;
        }

        .card-button:hover {
            transform: scale(1.05);
        }

        .gambar {
            width: 140px;
            height: 210px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            border: 3px solid #8bc34a;
            transition: all 0.3s;
        }

        .gambarzonk {
            width: 140px;
            height: 210px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            filter: brightness(0.4) grayscale(0.7);
            border: 3px solid #dc3545;
            transition: all 0.3s;
        }

        .game-container {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(139, 195, 74, 0.3);
            margin-bottom: 30px;
            width: 90%;
            max-width: 1000px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .input-container {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 500px;
        }

        .input-label {
            font-size: 1.3rem;
            margin-bottom: 10px;
            font-weight: bold;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
            text-align: center;
            width: 100%;
        }

        .input-row {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            width: 100%;
        }

        #kode {
            padding: 12px 15px;
            font-size: 1.1rem;
            border: 2px solid #8bc34a;
            border-radius: 8px;
            width: 200px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
        }

        #kode:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(139, 195, 74, 0.5);
        }

        .submit-button {
            padding: 12px 30px;
            font-size: 1.2rem;
            background-color: #8bc34a;
            color: #2c3e50;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            height: fit-content;
        }

        .submit-button:hover {
            background-color: #7cb342;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            color: #fff;
        }

        .back-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #8bc34a;
            color: #2c3e50;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s;
            z-index: 1000;
            border: none;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #7cb342;
            color: #fff;
            transform: translateY(-2px);
        }

        #timer {
            position: fixed;
            top: 20px;
            right: 20px;
            font-size: 2rem;
            font-weight: bold;
            background-color: #8bc34a;
            color: #2c3e50;
            padding: 10px 20px;
            border-radius: 8px;
            z-index: 9999;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .alert {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 9999;
            width: 90%;
            max-width: 500px;
        }

        .card-number {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="title">FIND THE RELIC</h1>

    @if (isset($err))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $err }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div id="timer"></div>

    <div class="game-container">
        <div class="card-grid">
            @for ($i = 1; $i <= 12; $i++)
                <button class="card-button">
                    <div class="card-number">{{ $i }}</div>
                    <img class="<?php if($arr[$i]['is_relic'] == false && $arr[$i]['answered'] == true) { echo 'gambarzonk'; } else { echo 'gambar'; }?>" 
                    src='{{ $arr[$i]['image'] }}' alt="Card {{ $i }}">
                </button>
            @endfor
        </div>

        <form action="{{ route('masuk') }}" method="POST" class="input-container">
            @csrf
            <div class="input-group">
                <label for="kode" class="input-label">INPUT KODE</label>
                <div class="input-row">
                    <input type="text" id="kode" name="kode" placeholder="Enter code...">
                    <button type="submit" name="submit" class="submit-button">SUBMIT</button>
                </div>
            </div>
            <input type="hidden" id="kelompok" name="kelompok" value={{ $kelompok }}>
        </form>
    </div>

    <button onclick="window.location.href='{{ url('/find-the-relic') }}'" class="back-button">← Kembali ke Home</button>

    <script>
        function pilihKelompok(kode) {
            document.getElementById('kelompok').value = kode;
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const startTime = new Date("{{ $startTime }}").getTime();
        const duration = {{ $duration }} * 1000;
        const endTime = startTime + duration;

        function updateTimer() {
            const now = new Date().getTime();
            const remaining = endTime - now;

            if (remaining <= 0) {
                document.getElementById("timer").textContent = "WAKTU HABIS!";
                document.getElementById("timer").style.backgroundColor = "#dc3545";
                document.getElementById("timer").style.color = "white";
                window.location.href = "{{ route('endRelic') }}";
                return;
            }

            const minutes = Math.floor((remaining / 1000) / 60);
            const seconds = Math.floor((remaining / 1000) % 60);
            document.getElementById("timer").textContent =
                `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
                
            if (remaining < 60000) {
                document.getElementById("timer").style.backgroundColor = "#dc3545";
                document.getElementById("timer").style.color = "white";
            }
        }

        updateTimer();
        setInterval(updateTimer, 1000);
    </script>
</body>
</html>