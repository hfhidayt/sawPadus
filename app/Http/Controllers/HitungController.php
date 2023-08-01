<?php

namespace App\Http\Controllers;

use App\Models\Hitung;
use App\Models\Kriteria;
use App\Models\Nilai;
use Illuminate\Http\Request;
use stdClass;

class HitungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.perhitungan.index', [
            'title' => 'Perhitungan | Padus UTDI',
            'perhitungans' => Hitung::all()
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
        // mengambil semua nilai
        $nilai = Nilai::all();
        
        // mengambil semua kriteria
        $kriteria = Kriteria::all();
        
        // menyimpan nilai max dari masing-masing kriteria
        $max = [];
        
        // perubahan nilai perulangan yang mengambil nama kriteria
        $i = 0;

        // array untuk menyimpan hasil perhitungan normalisasi
        $normalisasi = [];

        $test = new Hitung();
        foreach ($kriteria as $k) {
            // menyimpan nama kriteria kedalam variable dan mengubahnya menjadi lowercase
            $nama_kriteria = strtolower($k->nama_kriteria);

            $maxHitung = 'max_'.$nama_kriteria;
            $normalisasiHitung = 'normalisasi_'.$nama_kriteria;
            $vektorHitung = 'vektor_'.$nama_kriteria;
            
            // mengambil nilai max berdasarkan nama kriteria saat ini
            $max[$i] = $nilai->max($nama_kriteria);
            $test->$maxHitung = $max[$i];

            // perubahan nilai perulangan yang menghitung normalisasi kriteria
            $j = 0;
            foreach($nilai as $n) {
                // echo ($j + 1).' = '.$n->$nama_kriteria.'/'.$max[$i].' = '.$n->$nama_kriteria/$max[$i].'<br>';

                // menghitung normalisasi yang dibulatkan dengan 4 angka dibelakang koma dan disimpan dalam array normalisasi
                $normalisasi[$i][$j] = round($n->$nama_kriteria/$max[$i], 4);
                $test->$normalisasiHitung = $normalisasi[$i][$j];

                $j++;
            }
            echo $maxHitung.'<br>';
            echo $normalisasiHitung.'<br>';
            echo $vektorHitung.'<br>';
            $i++;
        }
        dd($nilai[0], $kriteria, $max, $normalisasi[0][0], $test);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hitung  $hitung
     * @return \Illuminate\Http\Response
     */
    public function show(Hitung $hitung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hitung  $hitung
     * @return \Illuminate\Http\Response
     */
    public function edit(Hitung $hitung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hitung  $hitung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hitung $hitung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hitung  $hitung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hitung $hitung)
    {
        //
    }
}
