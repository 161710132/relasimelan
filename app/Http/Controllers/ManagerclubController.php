<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\managerclub;
use Session;
class ManagerclubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aku = managerclub::all();
        return view('managerclub.index',compact('aku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('managerclub.create');
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
            'nama_manager' => 'required|',
            'umur' => 'required|',
            'tempat_lahir' => 'required|',
            'tanggal_lahir' => 'required|unique:managerclubs'
        ]);

        $aku = new managerclub;
        $aku->nama_manager = $request->nama_manager;
        $aku->umur = $request->umur;
        $aku->tempat_lahir = $request->tempat_lahir;
        $aku->tanggal_lahir = $request->tanggal_lahir;
        $aku->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$aku->nama</b>"
        ]);
        return redirect()->route('managerclub.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aku = managerclub::findOrFail($id);
        return view('managerclub.show',compact('aku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aku = managerclub::findOrFail($id);
        return view('managerclub.edit',compact('aku'));
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
            'nama_manager' => 'required|',
            'umur' => 'required|',
            'tempat_lahir' => 'required|',
            'tanggal_lahir' => 'required|unique:managerclubs'
        ]);

        $aku = managerclub::findOrFail($id);
        $aku->nama_manager = $request->nama_manager;
        $aku->umur = $request->umur;
        $aku->tempat_lahir = $request->tempat_lahir;
        $aku->tanggal_lahir = $request->tanggal_lahir;
        $aku->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$aku->nama</b>"
        ]);
        return redirect()->route('managerclub.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aku = managerclub::findOrFail($id);
        $aku->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('managerclub.index');
    }
}
