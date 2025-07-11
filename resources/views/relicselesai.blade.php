<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game Selesai - Find the Relic</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1476231682828-37e571bc172f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
            color: #fff;
            position: relative;
            text-align: center;
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

        .message-container {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            padding: 40px;
            border: 2px solid #8bc34a;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            max-width: 800px;
            width: 90%;
            margin: 0 auto;
        }

        .message {
            font-size: 3rem;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            line-height: 1.4;
        }

        .back-button {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #8bc34a;
            color: #2c3e50;
            padding: 15px 30px;
            border-radius: 8px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
        }

        .back-button:hover {
            background-color: #7cb342;
            color: #fff;
            transform: translateX(-50%) translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .leaf-decoration {
            position: absolute;
            width: 100px;
            height: 100px;
            opacity: 0.5;
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
            .message {
                font-size: 2rem;
            }
            
            .message-container {
                padding: 30px 20px;
            }
            
            .back-button {
                padding: 12px 24px;
                font-size: 1rem;
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

    <div class="message-container">
        <h1 class="message">{{ $pesan }}</h1>
    </div>

    <button onclick="window.location.href='{{ url('/find-the-relic') }}'" class="back-button">← Kembali ke Home</button>
</body>
</html>