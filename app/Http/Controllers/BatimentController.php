<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function index() {
        $batiments = Batiment::all();
        return view('batiment.index',compact('batiments'));
    }
}
