<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Find the Relic</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 0;
            margin: 0;
            height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .title {
            font-size: 5rem;
            color: #2c3e50;
            margin-bottom: 150px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .group-selection {
            margin-bottom: 60px;
        }

        .selection-label {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 30px;
            display: block;
        }

        .select-group {
            display: flex;
            gap: 30px;
            justify-content: center;
        }

        select {
            padding: 15px 25px;
            border-radius: 8px;
            border: 2px solid #3498db;
            font-size: 1.2rem;
            background-color: white;
            cursor: pointer;
            min-width: 200px;
            text-align: center;
        }

        .start-button {
            padding: 18px 50px;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.5rem;
            cursor: pointer;
            font-weight: bold;
            margin-top: 40px;
            transition: all 0.3s;
        }

        .start-button:hover {
            background-color: #27ae60;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>

</head>

<body>
    <h1 class="title">FIND THE RELIC</h1>

    <form action="{{ route('inputKode') }}" method="POST" onsubmit="return validateGroups()">
        @csrf
        <div class="group-selection">
            <span class="selection-label">Pilih Kelompok:</span>
            <div class="select-group">
                <select id="kelompokA" name="kelompokA" required>
                    <option value="" disabled selected></option>
                    @foreach ($daftarKelompok as $kelompok)
                        <option value="{{ $kelompok }}">{{ $kelompok }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="group-selection">
            <div class="select-group">
                <button type="submit" name="mulai" class="start-button">MULAI</button>
            </div>
        </div>
    </form>

    <script>
        function validateGroups() {
            const kelompokA = document.getElementById('kelompokA').value;
            const kelompokB = document.getElementById('kelompokB').value;

            if (kelompokA === kelompokB) {
                alert("Kelompok tidak boleh sama!");
                return false; // Mencegah form untuk disubmit
            }
            return true;
        }
    </script>

</body>

</html>
