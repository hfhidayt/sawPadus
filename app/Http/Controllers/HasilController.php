<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hasil;
use App\Models\Hitung;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hasil.index', [
            'title' => 'Hasil Perhitungan | Padus UTDI',
            'perhitungans' => Hitung::orderBy('nilai_vektor', 'DESC')->get()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hasil  $hasil
     * @return \Illuminate\Http\Response
     */
    public function show(Hasil $hasil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hasil  $hasil
     * @return \Illuminate\Http\Response
     */
    public function edit(Hasil $hasil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hasil  $hasil
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Hasil $hasil)
    public function update(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            // 'nama' => 'required|max:255',
            'hasil' => 'required'
        ]);

        User::Where('id', $request->user_id)->update($validatedData);

        return redirect('/dashboard/hasil')->with('success', 'Berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hasil  $hasil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hasil $hasil)
    {
        //
    }
}
