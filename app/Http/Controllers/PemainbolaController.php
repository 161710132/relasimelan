<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clubbola;
use App\pemainbola;
use Session;

class PemainbolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c = pemainbola::with('clubbola')->get();
        return view('pemainbola.index',compact('c'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $mhs = clubbola::all();
        return view('pemainbola.create',compact('mhs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'asal_kota' => 'required|',
            'clubbola_id' => 'required'
        ]);
        $c = new pemainbola;
        $c->asal_kota = $request->asal_kota;
        $c->clubbola_id = $request->clubbola_id;
        $c->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$c->nama</b>"
        ]);
        return redirect()->route('pemainbola.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $c = pemainbola::findOrFail($id);
        return view('pemainbola.show',compact('c'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c = pemainbola::findOrFail($id);
        $mhs = clubbola::all();
        $selectedclubbola = pemainbola::findOrFail($id)->manager_id;
        return view('pemainbola.edit',compact('mhs','c','selectedclubbola'));
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
        $this->validate($request,[
            'asal_kota' => 'required|',
            'clubbola_id' => 'required'
        ]);
        $c = pemainbola::findOrFail($id);
        $c->asal_kota = $request->asal_kota;
        $c->clubbola_id = $request->clubbola_id;
        $c->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$c->nama</b>"
        ]);
        return redirect()->route('pemainbola.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = pemainbola::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('pemainbola.index');
    }
}
