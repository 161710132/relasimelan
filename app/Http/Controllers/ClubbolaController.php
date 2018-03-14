<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clubbola;
use App\managerclub;
use Session;
class ClubbolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = clubbola::with('managerclub')->get();
        return view('clubbola.index',compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $dosen = managerclub::all();
        return view('clubbola.create',compact('dosen'));
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
            'nama_club' => 'required|',
            'asal_kota' => 'required|unique:clubbolas',
            'nama_stadion' => 'required|',
            'manager_id' => 'required'
        ]);
        $mhs = new clubbola;
        $mhs->nama_club = $request->nama_club;
        $mhs->asal_kota = $request->asal_kota;
        $mhs->nama_stadion = $request->nama_stadion;
        $mhs->manager_id = $request->manager_id;
        $mhs->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$mhs->nama</b>"
        ]);
        return redirect()->route('clubbola.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $b = clubbola::findOrFail($id);
        return view('clubbola.show',compact('b'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b = clubbola::findOrFail($id);
        $mn = managerclub::all();
        $selectedmanagerclub = clubbola::findOrFail($id)->manager_id;
        return view('clubbola.edit',compact('b','mn','selectedmanagerclub'));
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
            'nama_club' => 'required|',
            'asal_kota' => 'required|',
            'nama_stadion' => 'required|',
            'manager_id' => 'required'
        ]);
        $b = clubbola::findOrFail($id);
        $b->nama_club = $request->nama_club;
        $b->asal_kota = $request->asal_kota;
        $b->nama_stadion = $request->nama_stadion;
        $b->manager_id = $request->manager_id;
        $b->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$b->nama</b>"
        ]);
        return redirect()->route('clubbola.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $a = clubbola::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('clubbola.index');
    }
}
