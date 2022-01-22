<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Legalitas;
use App\Models\StudiBanding;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PkbmController extends Controller
{
    public function home()
    {
        $testimonis = Testimoni::where('status', 'alumni')->get();
        $unit = 'pkbm';
        return view('pkbm.home', compact('testimonis', 'unit'));
    }
    public function testimoni()
    {
        $testimonis = Testimoni::all();
        $alumnis = Alumni::all();
        $unit = 'pkbm';
        return view('pkbm.testimoni', compact('testimonis', 'alumnis', 'unit'));
    }
    public function legalitas()
    {
        $unit = 'pkbm';
        $legalitas = Legalitas::where('unit', $unit)->get();
        return view('pkbm.legalitas', compact('legalitas', 'unit'));
    }
    public function studiBanding()
    {
        $unit = 'pkbm';
        $observasis = StudiBanding::where('keterangan', 'observasi')->get();
        $studibandings = StudiBanding::where('keterangan', 'studibanding')->get();
        return view('pkbm.studibanding', compact('observasis', 'studibandings', 'unit'));
    }
}
