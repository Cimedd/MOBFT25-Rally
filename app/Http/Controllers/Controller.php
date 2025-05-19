<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
class GameController
{
    public function showForm()
    {
        // Ambil data grup dari model
        //$groups = GameData::getGroups();

        // Kirimkan data ke view
        //require 'views/game_form.php'; // Sesuaikan dengan lokasi file view Anda
    }
        public function create()
    {
        $kelompoks = config('gamedata.kelompoks');
        $levels = config('gamedata.levels');

        return view('game.create', compact('kelompoks', 'levels'));
    }
}
