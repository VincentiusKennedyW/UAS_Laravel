<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\RekapHasilBelajar;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('rekapHasilBelajar')
            ->whereHas('rekapHasilBelajar', function ($query) {
                $query->where('ipk', '>', 2.75)
                    ->where('sks', '>=', 105)
                    ->where('semester', '>=', 5);
            })->get();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function edit($id)
    {
        $rekap = RekapHasilBelajar::find($id);
        return view('mahasiswa.edit', compact('rekap'));
    }

    public function update(Request $request, $id)
    {
        $rekap = RekapHasilBelajar::find($id);
        $rekap->kelas = $request->kelas;
        $rekap->ipk = $request->ipk;
        $rekap->semester = $request->semester;
        $rekap->sks = $request->sks;
        $rekap->save();

        return redirect()->route('mahasiswa.index');
    }
}
