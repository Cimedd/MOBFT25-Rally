<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Find the Relic</title>
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1476231682828-37e571bc172f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 0;
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            color: #fff;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        * {
            position: relative;
            z-index: 1;
        }

        .title {
            font-size: 4rem;
            color: #f5f5f5;
            margin-bottom: 80px;
            text-transform: uppercase;
            letter-spacing: 5px;
            font-weight: bold;
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

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(139, 195, 74, 0.3);
        }

        .group-selection {
            margin-bottom: 40px;
        }

        .selection-label {
            font-size: 1.5rem;
            color: #f5f5f5;
            margin-bottom: 20px;
            display: block;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        }

        .select-group {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        select {
            padding: 12px 20px;
            border-radius: 8px;
            border: 2px solid #8bc34a;
            font-size: 1.1rem;
            background-color: rgba(255, 255, 255, 0.9);
            cursor: pointer;
            min-width: 200px;
            text-align: center;
            transition: all 0.3s;
        }

        select:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(139, 195, 74, 0.5);
        }

        .start-button {
            padding: 15px 40px;
            background-color: #8bc34a;
            color: #2c3e50;
            border: none;
            border-radius: 8px;
            font-size: 1.3rem;
            cursor: pointer;
            font-weight: bold;
            margin-top: 30px;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .start-button:hover {
            background-color: #7cb342;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            color: #fff;
        }

        .leaf-decoration {
            position: absolute;
            width: 100px;
            height: 100px;
            opacity: 0.7;
            z-index: 0;
        }

        .leaf1 {
            top: 50px;
            left: 50px;
            transform: rotate(-30deg);
        }

        .leaf2 {
            bottom: 50px;
            right: 50px;
            transform: rotate(120deg);
        }

        @media (max-width: 768px) {
            .title {
                font-size: 2.5rem;
                margin-bottom: 50px;
            }
            
            .container {
                padding: 20px;
                width: 90%;
            }
            
            .select-group {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="leaf-decoration leaf1">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <path d="M50,10 C70,10 90,30 90,50 C90,70 70,90 50,90 C30,90 10,70 10,50 C10,30 30,10 50,10 Z" fill="#8bc34a" />
        </svg>
    </div>
    
    <div class="leaf-decoration leaf2">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <path d="M50,10 C70,10 90,30 90,50 C90,70 70,90 50,90 C30,90 10,70 10,50 C10,30 30,10 50,10 Z" fill="#8bc34a" />
        </svg>
    </div>

    <div class="container">
        <h1 class="title">Find the Relic</h1>

        <form action="{{ route('inputKode') }}" method="POST" onsubmit="return validateGroups()">
            @csrf
            <div class="group-selection">
                <span class="selection-label">Pilih Kelompok:</span>
                <div class="select-group">
                    <select id="kelompokA" name="kelompokA" required>
                        <option value="" disabled selected>Pilih kelompok...</option>
                        @foreach ($daftarKelompok as $kelompok)
                            <option value="{{ $kelompok }}">{{ $kelompok }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="group-selection">
                <div class="select-group">
                    <button type="submit" name="mulai" class="start-button">Mulai Petualangan</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        function validateGroups() {
            const kelompokA = document.getElementById('kelompokA').value;
            const kelompokB = document.getElementById('kelompokB')?.value;

            if (kelompokB && kelompokA === kelompokB) {
                alert("Kelompok tidak boleh sama!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>