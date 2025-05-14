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
            ],
            "poin" => 0
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
            ],
            "poin" => 0
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
        $_SESSION['player'] = ['kelompokA' => $request->kelompokA, 'kelompokB' => $request->kelompokB];         
        return redirect()->route('displaycards');
    }
}
