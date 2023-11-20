<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use App\Models\Ikans;
use Illuminate\Http\Request;

class IkanController extends Controller
{

public function index()
    {
        return view('Ikan.all', [
            "title" => "Ikans",
            "ikans" => Ikan::all(),
        ]);
    }


    public function show($ikans)
    {
        return view('Ikan.detail', [
            'title' => 'detail.Ikan',
            'ikans' => Ikan::find($ikans)
        ]);
    }
}
