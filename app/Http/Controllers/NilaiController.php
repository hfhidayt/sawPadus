<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Nilai;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.nilai.index', [
            'title' => 'Nilai | Padus UTDI',
            'kriterias' => Kriteria::all(),
            'nilais' => Nilai::all(),
            'users' => User::where('nilai', false)->get()
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
            '*' => 'required'
        ]);
        // dd($validatedData);

        Nilai::Create($validatedData);

        User::Where('id', $request->user_id)->update(['nilai' => 1]);

        return redirect('/dashboard/nilai')->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        $request->validate([
            '*' => 'required'
        ]);
        
        $validatedData = $request->except(['_token','_method']);
        
        Nilai::Where('id', $nilai->id)->update($validatedData);

        return redirect('/dashboard/nilai')->with('success', 'Berhasil memperbarui nilai!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        $user_id = $nilai->user_id;

        Nilai::destroy($nilai->id);

        User::Where('id', $user_id)->update(['nilai' => 0]);

        return redirect('/dashboard/nilai')->with('success', 'Nilai berhasil dihapus');
    }
}
