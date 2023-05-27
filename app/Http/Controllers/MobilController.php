<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MobilController extends Controller
{
    function index()
    {
        $dataMobil = session()->get('dataMobilNew');
        return view('mobil.index', compact('dataMobil'));
    }

    function create()
    {
        return view('form');
    }

    function store(Request $request)
    {
        //menampung input dr form
        $namaMobil = $request->nama_mobil; 
        $merkMobil = $request->merk_mobil;
        $cc = $request->cc;

        //menampung data mobil dari input ke data array assosiatif
        $dataMobilBaru = [
            'namaMobil' => $namaMobil,
            'merkMobil' => $merkMobil,
            'cc' => $cc
        ];

        //push data ke array mobil
        array_push($this->arrayMobil, $dataMobilBaru);

        return redirect()->to('/mobil')->with('dataMobilNew', $this->arrayMobil);
    }
}
