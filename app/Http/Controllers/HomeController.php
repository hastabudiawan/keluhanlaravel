<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'layanan' => 'required',
            'tglkejadian' => 'required',
            'rating' => 'required',
            'isikeluhan' => 'required',
            'nomorwa' => 'required',
            'captcha' => 'required|captcha'
        ]);

        Keluhan::create($request->all());
        return redirect()->route('home.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}