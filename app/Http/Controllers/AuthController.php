<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Petugas;
use App\levels;
use Illuminate\Contracts\Session\Session;
use StaticVariable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function login()
    {
        return view('Auth.login');
    }

    function masuk(Request $request)
    {
        $id = $request->id;
        $password = $request->petugas_password;
        $petugas = Petugas::where("id", $id)->first();
        if ($petugas) {
            // Will do authentication 
            if (password_verify($password, $petugas->petugas_password)) {
                if ($petugas->levels) {
                    if ($petugas->levels->level_nama === "Dokter"){
                        session()->put('Auth', $petugas);
                        return redirect()->route('admin.index1');
                    }
                    if ($petugas->levels->level_nama === "Perawat"){
                        session()->put('Auth', $petugas);
                        return redirect()->route('petugas.pemeriksaan');
                    }
                    if ($petugas->levels->level_nama === "Apoteker"){
                        session()->put('Auth', $petugas);
                        return redirect()->route('petugas.pemeriksaan');
                    }
                    if ($petugas->levels->level_nama === "Tenaga Teknis Kefarm"){
                        session()->put('Auth', $petugas);
                        return redirect()->route('petugas.pemeriksaan');
                    }
                    if ($petugas->levels->level_nama === "Admin"){
                        session()->put('Auth', $petugas);
                        return redirect()->route('petugas.pemeriksaan');
                    }
                    
                } else {
                    session()->put('Auth', $petugas);
                    return redirect()->route('petugas.pemeriksaan');

                }
            } else {
                return redirect()->back()->withErrors(["message" => "Password salah"])->withInput();
            }
        } else {
            return redirect()->back()->withErrors(["message" => "ID Tidak terdaftar"])->withInput();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('Auth.register');
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
