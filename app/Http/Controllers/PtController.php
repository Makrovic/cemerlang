<?php

namespace App\Http\Controllers;

use App\Models\Legalitas;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PtController extends Controller
{
    public function carica(){
        $unit = 'pt';
        $sec = 'visimisi';
        $legalitas = Legalitas::where('unit',$unit)->get();
        return \view('pt.carica', \compact('legalitas','unit','sec'));
    }
    public function legalitas(){
        $unit = 'pt';
        $sec = 'legalitas';
        $legalitas = Legalitas::where('unit',$unit)->get();
        return \view('pt.carica', \compact('legalitas','unit','sec'));
    }
    public function shop(){
        $unit = 'pt';
        $produks = Produk::all();
        return \view('pt.shop', \compact('produks','unit'));
    }
    public function produkdesc($id){
        $unit = 'pt';
        $produks = Produk::where('id',$id)->get()->toArray();
        $produk = $produks[0];
        return \view('pt.shop.desc', \compact('produk','unit'));
    }
    public function addtocart(){
        $unit = 'pt';
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
