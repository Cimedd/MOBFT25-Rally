<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelicController extends Controller
{
    public function index()
    {
        session_start();
        return view('displaycards');
    }

    public function findTheRelic()
    {
        session_start();
        $cardsA = [
            1 => [
                'code' => 'CODE01A',
                'question' => 'Pertanyaan 1',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'A',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 1-01.jpg',
            ],
            2 => [
                'code' => 'CODE02A',
                'question' => 'Pertanyaan 2',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'B',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 2-01.jpg',
            ],
            3 => [
                'code' => 'CODE03A',
                'question' => 'Pertanyaan 3',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'C',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 3-01.jpg',
            ],
            4 => [
                'code' => 'CODE04A',
                'question' => 'Pertanyaan 4',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'D',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 4-01.jpg',
            ],
            5 => [
                'code' => 'CODE05A',
                'question' => 'Pertanyaan 5',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'A',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 5-01.jpg',
            ],
            6 => [
                'code' => 'CODE06A',
                'question' => 'Pertanyaan 6',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'B',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 6-01.jpg',
            ],
            7 => [
                'code' => 'CODE07A',
                'question' => 'Pertanyaan 7',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'C',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 7-01.jpg',
            ],
            8 => [
                'code' => 'CODE08A',
                'question' => 'Pertanyaan 8',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'D',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 8-01.jpg',
            ],
            9 => [
                'code' => 'CODE09A',
                'question' => 'Pertanyaan 9',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'A',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 9-01.jpg',
            ],
            10 => [
                'code' => 'CODE10A',
                'question' => 'Pertanyaan 10',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'B',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 10-01.jpg',
            ],
            11 => [
                'code' => 'CODE11A',
                'question' => 'Pertanyaan 11',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'C',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 11-01.jpg',
            ],
            12 => [
                'code' => 'CODE12A',
                'question' => 'Pertanyaan 12',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'D',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 12-01.jpg',
            ]
        ];
        $cardsB = [
            1 => [
                'code' => 'CODE01A',
                'question' => 'Pertanyaan 1',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'A',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 1-01.jpg',
            ],
            2 => [
                'code' => 'CODE02A',
                'question' => 'Pertanyaan 2',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'B',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 2-01.jpg',
            ],
            3 => [
                'code' => 'CODE03A',
                'question' => 'Pertanyaan 3',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'C',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 3-01.jpg',
            ],
            4 => [
                'code' => 'CODE04A',
                'question' => 'Pertanyaan 4',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'D',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 4-01.jpg',
            ],
            5 => [
                'code' => 'CODE05A',
                'question' => 'Pertanyaan 5',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'A',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 5-01.jpg',
            ],
            6 => [
                'code' => 'CODE06A',
                'question' => 'Pertanyaan 6',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'B',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 6-01.jpg',
            ],
            7 => [
                'code' => 'CODE07A',
                'question' => 'Pertanyaan 7',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'C',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 7-01.jpg',
            ],
            8 => [
                'code' => 'CODE08A',
                'question' => 'Pertanyaan 8',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'D',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 8-01.jpg',
            ],
            9 => [
                'code' => 'CODE09A',
                'question' => 'Pertanyaan 9',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'A',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 9-01.jpg',
            ],
            10 => [
                'code' => 'CODE10A',
                'question' => 'Pertanyaan 10',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'B',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 10-01.jpg',
            ],
            11 => [
                'code' => 'CODE11A',
                'question' => 'Pertanyaan 11',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'C',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 11-01.jpg',
            ],
            12 => [
                'code' => 'CODE12A',
                'question' => 'Pertanyaan 12',
                'options' => ['A', 'B', 'C', 'D'],
                'answer' => 'D',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 12-01.jpg',
            ]
        ];
        $daftarKelompok = [
            'Kelompok 1',
            'Kelompok 2',
            'Kelompok 3',
            'Kelompok 4',
            'Kelompok 5',
            'Kelompok 6',
            'Kelompok 7',
            'Kelompok 8',
            'Kelompok 9',
            'Kelompok 10',
            'Kelompok 11',
            'Kelompok 12',
            'Kelompok 13',
            'Kelompok 14',
            'Kelompok 15',
            'Kelompok 16',
            'Kelompok 17',
            'Kelompok 18',
        ];
        $_SESSION['kartuA'] = $cardsA;
        $_SESSION['kartuB'] = $cardsB;
        return view('find-the-relic', compact('cardsA', 'cardsB', 'daftarKelompok'));
    }

    public function inputKode(Request $request)
    {
        session_start();
        $kelompok = "A";
        $arr = $_SESSION['kartuA'];
        $_SESSION['player'] = [['kelompokA' => $request->kelompokA, "poin" => 0], ['kelompokB' => $request->kelompokB, "poin" => 0]];
        $startTime = now()->toIso8601String(); 
        $_SESSION['waktuMulai'] = $startTime;
        $duration = 7 * 60;
        return view('displaycards', compact('kelompok', 'arr', 'startTime', 'duration'));
    }

    public function showRelic(Request $request)
    {
        session_start();
        $startTime = $_SESSION['waktuMulai'];
        $duration = 7 * 60;
        $kelompok = $request->input('kelompok');
        if ($kelompok == 'A') {
            $arr = $_SESSION['kartuA'];
        } else {
            $arr = $_SESSION['kartuB'];
        }

        return view('displaycards', compact('kelompok', 'arr', 'startTime', 'duration'));
    }


    public function masuk(Request $request)
    {
        session_start();
        $startTime = $_SESSION['waktuMulai'];
        $duration = 7 * 60;
        $cek = false;
        $kode = $request->kode;
        $kelompok = $request->input('kelompok');
        if ($request->input('kelompok') == "A") {
            $arr = $_SESSION['kartuA'];
        } else {
            $arr = $_SESSION['kartuB'];
        }
        for ($i = 1; $i < count($arr); $i++) {
            if ($request->kode == $arr[$i]['code']) {
                $cek = true;
                $pertanyaan = $arr[$i]['question'];
                $pilgan = $arr[$i]['options'];
                $answer = $arr[$i]['answer'];
                $image = $arr[$i]['image'];
                $bool = $arr[$i]['answered'];
                break;
            }
        }
        //Pengecekan sudah dijawab atau belum dan kodenya benar atau tidak
        if (!$cek) {
            $err = "Kode tidak ditemukan!";
            return view('displaycards', compact('kelompok', 'arr', 'err', 'startTime', 'duration'));
        }

        if ($bool === true) {
            $err = "Pertanyaan ini sudah dijawab!";
            return view('displaycards', compact('kelompok', 'arr', 'err', 'startTime', 'duration'));
        }

        return view('pertanyaanrelic', compact('kode', 'kelompok', 'pertanyaan', 'pilgan', 'answer', 'image', 'startTime', 'duration'));
    }

    public function cekjawaban(Request $request)
    {
        session_start();
        $imgTerjawab = [
            1 => "img/Relic Anoa-01.jpg",
            "img/Relic Babi Rusa-01.jpg",
            "img/Relic Burung Serak-01.jpg",
            "img/Relic Burung Seriwang-01.jpg",
            "img/Relic Eboni-01.jpg",
            "img/Relic Kepiting Kelapa-01.jpg",
            "img/Relic Kuskus-01.jpg",
            "img/Relic Lontar-01.jpg",
            "img/Relic Maleo-01.jpg",
            "img/Relic Palem-01.jpg",
            "img/Relic Rangkong-01.jpg",
            "img/Relic Tarsius-01.jpg"
        ];
        $jawabanUser = $request->input('jawaban');
        $kode = $request->input('kode');
        $kelompok = $request->input('kelompok');

        if ($kelompok == "A") {
            $arr = $_SESSION['kartuA'];
        } else {
            $arr = $_SESSION['kartuB'];
        }

        $jawabanBenar = null;
        for ($i = 1; $i <= count($arr); $i++) {
            if ($arr[$i]['code'] === $kode) {
                $jawabanBenar = $arr[$i]['answer'];
                $arr[$i]['answered'] = true;
                $arr[$i]['image'] = $imgTerjawab[$i];
                break;
            }
        }

        if ($kelompok == "A") {
            $_SESSION['kartuA'] = $arr;
        } else {
            $_SESSION['kartuB'] = $arr;
        }

        $message = "";
        if ($jawabanUser === $jawabanBenar) {
            if ($kelompok == "A") {
                $_SESSION['player'][0]['poin'] += 1;
            } else {
                $_SESSION['player'][1]['poin'] += 1;
            }
            $message = "Jawaban Benar!";
            return response()->json(['message' => $message]);
        } else {
            $message = "Jawaban Salah!";
            return response()->json(['message' => $message]);
        }
    }

    public function endrelic(Request $request) {
        session_start();
        if($_SESSION['player'][0]['poin'] > $_SESSION['player'][1]['poin']) {
            $pemenang = $_SESSION['player'][0]['kelompokA'];
            $pesan = $pemenang." menang dengan ".$_SESSION['player'][0]['poin']." poin!";
        } else if($_SESSION['player'][0]['poin'] < $_SESSION['player'][1]['poin']) {
            $pemenang = $_SESSION['player'][1]['kelompokB'];
            $pesan = $pemenang." menang dengan ".$_SESSION['player'][1]['poin']." poin!";
        } else {
            $pesan = "Kedua tim menang dengan seri!";
        }

        return view('relicselesai', compact('pesan'));
    }
}
