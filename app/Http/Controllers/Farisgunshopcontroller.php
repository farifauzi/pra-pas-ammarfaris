<?php

namespace App\Http\Controllers;

use App\Models\Farisgunshop;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class Farisgunshopcontroller extends Controller
{
    protected $primaryKey = 'id';
    
    public function index()
    {
        return view('layouts.farisgunshop.all', [
            "title" => "FarisGunShops",
            "farisgunshop" => Farisgunshop::all()
        ]);
    }

    public function show($farisgunshop)
    {
        return view("layouts.farisgunshop.detail", [
            "title" => "Detail FarisGunShop",
            "farisgunshop" => Farisgunshop::find($farisgunshop)
        ]);
    }
}