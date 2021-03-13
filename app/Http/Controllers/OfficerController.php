<?php

namespace App\Http\Controllers;

use App\Officer;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officers = Officer::all();
        return view('officer/index',compact('officers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('officer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* return $request; */
        Officer::create($request->all());

        return redirect()->route('officer.index')->with('pesan',  "Data berhasil $request->nama_petugas ditambah..."); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function show(Officer $officer)
    {
        return view('officer/show',['officers'=> $officer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function edit(Officer $officer)
    {
        return view('officer/edit',['officers'=> $officer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Officer $officer)
    {
        /* return $request; */
        Officer::where('id', $officer->id)
        ->update([
            'nama_petugas' => $request->nama_petugas,
            'email' => $request->email,
            'password' => $request->password,
            'telp' => $request->telp,
            'alamat' => $request->alamat,

        ]);

        
        return redirect('officer')->with('pesan', "Update data {$request['nama_petugas']} berhasil..."); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Officer $officer)
    {
        $officer->delete();
        return redirect()->route('officer.index')
        ->with('pesan', "Hapus data $officer->nama_petugas berhasil!");
    }
}