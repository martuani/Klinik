<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\level;
use App\KategoriPasien;
use App\Petugas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        return view('Admin.index1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addpetugas()
    {
        return view('Admin.add_data_petugas');
    }

    public function tambahpetugas(Request $request)
    {
        $validatedData = $request->validate([
            'petugas_nama' => 'required',
            'petugas_email' => 'required',
            'petugas_password' => 'required|min:8',
            'petugas_jadwal' => 'required',
            'petugas_telp' => 'required',
            'petugas_level' => 'required'
        ]);

        $validatedData['petugas_password'] = Hash::make($validatedData['petugas_password']);

        Petugas::create($validatedData);

        return redirect('/login');
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
