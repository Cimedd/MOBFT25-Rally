<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JungleClashController extends Controller
{
    public function index ()
    {
        return view ("jungle_clash.index");
    }
    public function play (Request $request)
    {
        $group1=$request->group1Name;
        $group2=$request->group2Name;
        return view ("jungle_clash.play",compact('group1','group2'));
    }
}
