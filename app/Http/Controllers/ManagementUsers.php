<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Officer, Users};
use DB;

class ManagementUsers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = array();
        // $users = DB::table('users')->select(['*'])->get();
        // $data['users'] = $users;
        $users = DB::table('users')->select(['*'])->get();
        $officers = Officer::all();
        return view('admin.v_management', compact('users', 'officers'));
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
    public function edit(Request $request, $id)
    {
        if ($request->get('petugas-edit')) {
            $petugas_edit = DB::table('users')->where('id', $id)->first();
            // return response()->json($petugas_edit);
            return view('admin.edit_management', compact('petugas_edit'));
        }elseif ($request->get('masyarakat-edit')) {
            $users_edit = DB::table('officers')->where('id', $id)->first();
            // return response()->json($users_edit);
            return view('admin.edit_management', compact('users_edit'));
        }
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
    public function destroy(Request $request, $id)
    {
        if ($request->get('petugas-edit')) {
            DB::table('users')->where('id', $id)->delete();
            return redirect()->back()->with('pesan', "Hapus data berhasil!");
        }elseif ($request->get('masyarakat-edit')) {
            Officer::where('id', $id)->delete();
            return redirect()->back()->with('pesan', "Hapus data berhasil!");
        }
    }
}
