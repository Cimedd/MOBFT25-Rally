<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center; /* horizontal center */
            align-items: center;     /* vertical center */
            background-color: #f0f0f0; /* optional background */
        }

        .pesan {
            font-size: 3em;
            text-align: center;
            color: #333;
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
    </style>
</head>
<body>
    <p class="pesan">{{ $pesan }}</p>
    <a href="{{ url('/find-the-relic') }}" class="back-button">← Kembali ke Home</a>
</body>
</html>