<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pertanyaan - Find the Relic</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('https://images.unsplash.com/photo-1476231682828-37e571bc172f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
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

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 40px auto;
            text-align: center;
        }

        .title {
            font-size: 3.5rem;
            color: #fff;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 3px;
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

        .content {
            display: flex;
            justify-content: center;
            align-items: center; /* Changed to center for vertical alignment */
            gap: 40px;
            margin-top: 30px;
        }

        .card-container {
            width: 300px;
            display: flex;
            align-items: center; /* Center card vertically */
        }

        .card-image {
            width: 100%;
            height: 450px; /* Fixed height */
            object-fit: cover;
            border-radius: 15px;
            border: 3px solid #8bc34a;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .question-section {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            padding: 40px;
            width: 100%;
            max-width: 600px;
            border: 1px solid rgba(139, 195, 74, 0.3);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            min-height: 450px;
            display: flex;
            flex-direction: column;
        }

        .question {
            font-size: 1.8rem;
            margin-bottom: 40px;
            color: #fff;
            line-height: 1.4;
        }

        .options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin-bottom: 40px;
        }

        .option {
            padding: 18px;
            border: 2px solid #8bc34a;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s;
            background-color: rgba(255, 255, 255, 0.1);
            font-size: 1.2rem;
        }

        .option:hover {
            background-color: rgba(139, 195, 74, 0.3);
            transform: translateY(-3px);
        }

        .option input {
            display: none;
        }

        .option.selected {
            background-color: #8bc34a;
            color: #2c3e50;
            font-weight: bold;
        }

        .submit-button {
            padding: 18px 40px;
            font-size: 1.5rem;
            background-color: #8bc34a;
            color: #2c3e50;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            max-width: 400px;
            margin: 20px auto 0;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .submit-button:hover {
            background-color: #7cb342;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            color: #fff;
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

        #messageBox {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.9);
            padding: 30px;
            border: 2px solid #8bc34a;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
            z-index: 1000;
            color: white;
            text-align: center;
            max-width: 500px;
            width: 90%;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 999;
        }

        #messageBox button {
            padding: 12px 30px;
            background-color: #8bc34a;
            color: #2c3e50;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 20px;
            transition: all 0.3s;
        }

        #messageBox button:hover {
            background-color: #7cb342;
            color: #fff;
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

        @media (max-width: 900px) {
            .content {
                flex-direction: column;
                gap: 30px;
            }

            .card-image {
                width: 250px;
                height: 375px;
            }

            .question {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 600px) {
            .title {
                font-size: 2.5rem;
            }

            .question {
                font-size: 1.4rem;
                margin-bottom: 30px;
            }

            .option {
                padding: 15px;
                font-size: 1.1rem;
            }

            .submit-button {
                font-size: 1.3rem;
                padding: 15px 30px;
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
        <h1 class="title">FIND THE RELIC</h1>
        <div id="timer"></div>
        
        <div class="content">
            <div class="card-container">
                <img class="card-image" src="{{ asset($image) }}" alt="Relic Image">
            </div>

            <div class="question-section">
                <h2 class="question"><?php echo $pertanyaan; ?></h2>
                <form id="formJawaban">
                    @csrf
                    <div class="options">
                        <label class="option">
                            <input type="radio" name="jawaban" value="<?php echo $pilgan[0]; ?>" required>
                            <?php echo $pilgan[0]; ?>
                        </label>
                        <label class="option">
                            <input type="radio" name="jawaban" value="<?php echo $pilgan[1]; ?>">
                            <?php echo $pilgan[1]; ?>
                        </label>
                        <label class="option">
                            <input type="radio" name="jawaban" value="<?php echo $pilgan[2]; ?>">
                            <?php echo $pilgan[2]; ?>
                        </label>
                        <label class="option">
                            <input type="radio" name="jawaban" value="<?php echo $pilgan[3]; ?>">
                            <?php echo $pilgan[3]; ?>
                        </label>
                    </div>
                    <input type="hidden" name="kode" value="{{ $kode }}">
                    <input type="hidden" name="kelompok" value="{{ $kelompok }}">
                    <button type="submit" class="submit-button">SUBMIT JAWABAN</button>
                </form>
            </div>
        </div>
    </div>

    <div id="overlay"></div>
    <div id="messageBox">
        <p id="messageText"></p>
        <button onclick="goToDisplayCards()">Tutup</button>
    </div>

    <script>
        document.getElementById("formJawaban").addEventListener("submit", function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch("{{ route('cekJawaban') }}", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById("messageText").innerText = data.message;
                    document.getElementById("overlay").style.display = "block";
                    document.getElementById("messageBox").style.display = "block";
                })
                .catch(error => {
                    console.error("Terjadi kesalahan:", error);
                });
        });

        function goToDisplayCards() {
            const kelompok = document.querySelector('input[name="kelompok"]').value;
            window.location.href = "{{ route('showRelic') }}" + "?kelompok=" + kelompok;
        }

        document.querySelectorAll('.option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                this.classList.add('selected');
                this.querySelector('input').checked = true;
            });
        });

        // Timer functionality
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