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
        // dd($request, $kriterium->id);
        $validatedData = $request->validate([
            'nama_kriteria' => 'required|max:255',
            'bobot_kriteria' => 'required'
        ]);

        Kriteria::Where('id', $kriterium->id)->update($validatedData);

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

        return redirect('/dashboard/kriteria')->with('success', 'Kriteria berhasil dihapus');
    }
}
