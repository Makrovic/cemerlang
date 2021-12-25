<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Legalitas;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PkbmController extends Controller
{
    public function testimoni(){
        $testimonis = Testimoni::all();
        $alumnis = Alumni::all();
        $unit = 'pkbm';
        return \view('pkbm.testimoni', \compact('testimonis','alumnis','unit'));
    }
    
    public function legalitas(){
        $unit = 'pkbm';
        $legalitas = Legalitas::where('unit',$unit)->get();
        return \view('pkbm.legalitas', \compact('legalitas','unit'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
