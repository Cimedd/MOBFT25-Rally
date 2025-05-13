<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pertanyaan - Find the Relic</title>
    <link rel="stylesheet" href="{{ asset('css/pertanyaan.css') }}">
</head>
<body>
    <?php
        session_start();

        $arr = $_SESSION['kartu'];

        for($i = 1; $i <= count($arr); $i++) {
            if($arr[$i]['code'] == $_GET['kode']) {
                $pertanyaan = $arr[$i]['question'];
                $pilgan = $arr[$i]['options'];
                $answer = $arr[$i]['answer'];
                $image = $arr[$i]['image'];
                break;
            }
        }
    ?>
    <div class="container">
        <h1 class="title">FIND THE RELIC</h1>

        <div class="content">
            <div>
                <img class="card-number" src="{{ asset($image) }}" alt="Relic Image">
            </div>

            <div class="question-section">
                <h2 class="question"><?php echo $pertanyaan; ?></h2>
                <form action="{{ route('pertanyaanrelic') }}" method="GET">
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

                    <button type="submit" class="submit-button">SUBMIT JAWABAN</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        //terakhir disini
    ?>
    <script>
        // Add selected class to clicked option
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