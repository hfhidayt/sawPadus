<?php

namespace App\Http\Controllers;

use App\Models\Hitung;
use App\Models\Kriteria;
use App\Models\Nilai;
use Illuminate\Http\Request;

class DetailHitungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil semua kriteria
        $kriteria = Kriteria::all();

        // mengambil semua nilai
        $nilai = Nilai::all();

        // menyimpan nilai max dari masing-masing kriteria
        $max = [];

        $i = 0;
        foreach ($kriteria as $k) {
            // menyimpan nama kriteria kedalam variable dan mengubahnya menjadi lowercase
            $nama_kriteria = strtolower($k->nama_kriteria);

            $max[$i] = $nilai->max($nama_kriteria);
            $i++;
        }

        $perhitungan = Hitung::all();

        $ranking = $perhitungan->sortByDesc('nilai_vektor');

        // dd($max);

        return view('dashboard.perhitungan.detail.index', [
            'title' => 'Detail Perhitungan | Padus UTDI',
            'kriterias' => $kriteria,
            'nilais' => $nilai,
            'maxs' => $max,
            'perhitungans' => $perhitungan,
            'rankings' => $ranking
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
