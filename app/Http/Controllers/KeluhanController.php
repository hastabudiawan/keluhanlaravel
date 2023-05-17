<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function index()
    {
        $keluhan = Keluhan::all();
        return view('keluhan.index',compact(['keluhan']));
    }

    public function show(Keluhan $keluhan)
    {
        return view('keluhan.show',compact(['keluhan']));
    }
    
    public function destroy($id)
    {
        $keluhan = Keluhan::find($id);
        $keluhan->delete();
        return redirect('keluhan');
    }
}
