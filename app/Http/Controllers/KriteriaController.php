<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kriteria.index', [
            'title' => 'Kriteria | Padus UTDI',
            'kriterias' => Kriteria::all()
        ]);
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
        $validatedData = $request->validate([
            'nama_kriteria' => 'required|max:255',
            'bobot_kriteria' => 'required'
        ]);
        // dd($validatedData['nama_kriteria']);
        Kriteria::Create($validatedData);
        
        Schema::table('nilais', function (Blueprint $table) use ($validatedData) {
            $table->integer(strtolower($validatedData['nama_kriteria']));
        });
        
        Schema::table('hitungs', function (Blueprint $table) use ($validatedData) {
            $table->double(strtolower('max_'.$validatedData['nama_kriteria']))->default('0');
            $table->double(strtolower('normalisasi_'.$validatedData['nama_kriteria']));
            $table->double(strtolower('vektor_'.$validatedData['nama_kriteria']));
        });

        return redirect('/dashboard/kriteria')->with('success', 'Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function show(Kriteria $kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Kriteria $kriteria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kriteria $kriterium)
    {
        $from = strtolower($kriterium->nama_kriteria);
        $fromMax = 'max_'.strtolower($kriterium->nama_kriteria);
        $fromNormalisasi = 'normalisasi_'.strtolower($kriterium->nama_kriteria);
        $fromVektor = 'vektor_'.strtolower($kriterium->nama_kriteria);
        $validatedData = $request->validate([
            'nama_kriteria' => 'required|max:255',
            'bobot_kriteria' => 'required'
        ]);
        $to = strtolower($validatedData['nama_kriteria']);
        $toMax = 'max_'.strtolower($validatedData['nama_kriteria']);
        $toNormalisasi = 'normalisasi_'.strtolower($validatedData['nama_kriteria']);
        $toVektor = 'vektor_'.strtolower($validatedData['nama_kriteria']);
        // dd($validatedData['nama_kriteria'], $kriterium->nama_kriteria);

        Kriteria::Where('id', $kriterium->id)->update($validatedData);

        Schema::table('nilais', function (Blueprint $table) use ($from, $to) {
            $table->renameColumn($from, $to);
        });
        
        Schema::table('hitungs', function (Blueprint $table) use ($fromMax, $toMax, $fromNormalisasi, $toNormalisasi, $fromVektor, $toVektor) {
            $table->renameColumn($fromMax, $toMax);
            $table->renameColumn($fromNormalisasi, $toNormalisasi);
            $table->renameColumn($fromVektor, $toVektor);
        });

        return redirect('/dashboard/kriteria')->with('success', 'Berhasil memperbarui kriteria!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kriteria $kriterium)
    {
        $dropColumn = Kriteria::Where('id', $kriterium->id)->get();

        Kriteria::destroy($kriterium->id);

        Schema::table('nilais', function (Blueprint $table) use ($dropColumn) {
            $table->dropColumn(strtolower($dropColumn[0]->nama_kriteria));
        });
        
        Schema::table('hitungs', function (Blueprint $table) use ($dropColumn) {
            $table->dropColumn('max_'.strtolower($dropColumn[0]->nama_kriteria));
            $table->dropColumn('normalisasi_'.strtolower($dropColumn[0]->nama_kriteria));
            $table->dropColumn('vektor_'.strtolower($dropColumn[0]->nama_kriteria));
        });

        return redirect('/dashboard/kriteria')->with('success', 'Kriteria berhasil dihapus');
    }
}
