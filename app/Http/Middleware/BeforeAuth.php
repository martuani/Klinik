<?php

namespace App\Http\Middleware;

use App\Petugas;
use App\levels;
use Closure;
use Illuminate\Http\Request;

class BeforeAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('Auth', null) !== null) {
            $petugas = session()->get('Auth', null);
            if ($petugas->levels) {
                if ($petugas->levels->level_nama === "Dokter") {
                    return redirect()->route('admin.index1');
                }
                if ($petugas->levels->level_nama === "Perawat") {
                    return redirect()->route('petugas.pemeriksaan');
                }
                if ($petugas->levels->level_nama === "Apoteker") {
                    return redirect()->route('petugas.pemeriksaan');
                }
                if ($petugas->levels->level_nama === "Tenaga Medis Kefarmasian") {
                    return redirect()->route('petugas.pemeriksaan');
                }
                if ($petugas->levels->level_nama === "Admin") {
                    return redirect()->route('petugas.pemeriksaanadmin.index1');
                }
                
            } else {
                return redirect()->route('petugas.home1');
            }
        } 
        return $next($request);
    }
}
