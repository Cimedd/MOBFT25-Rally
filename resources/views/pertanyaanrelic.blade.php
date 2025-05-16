<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pertanyaan - Find the Relic</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
            text-align: center;
        }

        .title {
            font-size: 3.5rem;
            color: #2c3e50;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: bold;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
            margin-top: 30px;
        }

        .card-number {
            font-size: 8rem;
            font-weight: bold;
            border-radius: 15px;
            padding: 40px 60px;
            min-width: 200px;
            text-align: center;
            height: 500px;
        }

        .question-section {
            border-radius: 15px;
            padding: 40px;
            width: 100%;
            max-width: 600px;
        }

        .question {
            font-size: 2rem;
            margin-bottom: 40px;
            color: #2c3e50;
        }

        .options {
            display: grid;
            grid-template-columns: repeat(2, 200px);
            gap: 25px;
            margin-bottom: 50px;
            justify-content: center;
        }

        .option {
            min-width: 200px;
            max-width: 200px;
            padding: 15px;
            border: 2px solid #3498db;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60px;
            box-sizing: border-box;
        }

        .option:hover {
            background-color: #3498db;
            color: white;
            transform: translateY(-5px);
        }

        .option input {
            display: none;
        }

        .option.selected {
            background-color: #3498db;
            color: white;
        }

        .submit-button {
            padding: 20px 40px;
            font-size: 1.8rem;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            transition: all 0.3s;
        }

        .submit-button:hover {
            background-color: #27ae60;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                gap: 30px;
            }

            .card-number {
                font-size: 5rem;
                padding: 30px 40px;
            }

            .question {
                font-size: 2rem;
            }

            .option {
                font-size: 1.5rem;
                padding: 20px;
            }
        }

        #messageBox {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        button {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="title">FIND THE RELIC</h1>

        <div class="content">
            <div>
                <img class="card-number" src="{{ asset($image) }}" alt="Relic Image">
            </div>

            <div class="question-section">
                <h2 class="question"><?php echo $pertanyaan; ?></h2>
                <form id="formJawaban">
                    @csrf
                    <div class="options">
                        <label class="option">
                            <input type="radio" name="jawaban" value="A" required><?php echo $pilgan[0]; ?>
                        </label>
                        <label class="option">
                            <input type="radio" name="jawaban" value="B"><?php echo $pilgan[1]; ?>
                        </label>
                        <label class="option">
                            <input type="radio" name="jawaban" value="C"><?php echo $pilgan[2]; ?>
                        </label>
                        <label class="option">
                            <input type="radio" name="jawaban" value="D"><?php echo $pilgan[3]; ?>
                        </label>
                    </div>
                    <input type="hidden" name="kode" value="{{ $kode }}">
                    <input type="hidden" name="kelompok" value="{{ $kelompok }}">
                    <button type="submit" name="submitPertanyaan" onclick="showMessageBox()"
                        class="submit-button">SUBMIT JAWABAN</button>
                </form>
                <div id="overlay" style="display:none;"></div>
                <div id="messageBox" style="display:none;">
                    <p id="messageText"></p>
                    <button onclick="goToDisplayCards()">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("formJawaban").addEventListener("submit", function(e) {
            e.preventDefault(); // cegah submit normal

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
                    // tampilkan messageBox
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
            window.location.href = "{{ route('showRelic') }}"+ "?kelompok=" + kelompok;
        }
    </script>

    <script>
        function showMessageBox() {
            document.getElementById("messageBox").style.display = "block";
            document.getElementById("overlay").style.display = "block";
        }

        function closeMessageBox() {
            document.getElementById("messageBox").style.display = "none";
            document.getElementById("overlay").style.display = "none";
        }
    </script>
    <script>
        document.querySelectorAll('.option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                this.classList.add('selected');
                this.querySelector('input').checked = true;
            });
        });
    </script>
</body>

</html>
