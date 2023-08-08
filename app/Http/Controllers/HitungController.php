<?php

namespace App\Http\Controllers;

use App\Models\Hitung;
use App\Models\Kriteria;
use App\Models\Nilai;
use App\Models\User;
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
        // mengambil semua nilai
        $nilai = Nilai::all();

        $perhitungan = Hitung::count('user_id');

        if ($perhitungan != 0) {
            Hitung::truncate();
        }
        
        // mengambil semua kriteria
        $kriteria = Kriteria::all();

        $kriteria_length = $kriteria->count('nama_kriteria');
        
        // menyimpan nilai max dari masing-masing kriteria
        $max = [];
        
        // perubahan nilai perulangan yang mengambil nama kriteria
        $i = 0;

        // array untuk menyimpan hasil perhitungan normalisasi
        $normalisasi = [];
        
        // array untuk menyimpan bobot
        $bobot = [];
        
        // array untuk menyimpan nilai vektor dari tiap kriteria
        $vektorKriteria = [];
        
        // array untuk menyimpan nilai vektor dari alternatif
        $nilai_vektor = [];
        // $l = 0;
        
        // $test = new Hitung();
        $test = [];
        foreach ($kriteria as $k) {
            // menyimpan nama kriteria kedalam variable dan mengubahnya menjadi lowercase
            $nama_kriteria = strtolower($k->nama_kriteria);
            
            // $maxHitung = 'max_'.$nama_kriteria;
            $normalisasiHitung = 'normalisasi_'.$nama_kriteria;
            $vektorHitung = 'vektor_'.$nama_kriteria;
            
            // mengambil nilai max berdasarkan nama kriteria saat ini
            $max[$i] = $nilai->max($nama_kriteria);
            // $test->$maxHitung = $max[$i];
            
            // mengambil bobot dari kriteria saat ini
            $bobot[$i] = round(($k->bobot_kriteria/100), 2);
            
            // $user_id = $nilai[$i]->user_id;
            // $test->user_id = $user_id;
            
            // $nilai_id = $nilai[$i]->id;
            // $test->nilai_id = $nilai_id;

            // $test->nilai_vektor = 0;

            // $normalisasi[$i] = round($nilai[$i]->$nama_kriteria/$max[$i], 4);
            // $test->$normalisasiHitung = $normalisasi[$i];

            // $vektorKriteria[$i] = $normalisasi[$i]*$bobot[$i];
            // $test->$vektorHitung = $vektorKriteria[$i];

            // perubahan nilai perulangan yang menghitung normalisasi kriteria
            $j = 0;
            foreach($nilai as $n) {
                // echo ($j + 1).' = '.$n->$nama_kriteria.'/'.$max[$i].' = '.round($n->$nama_kriteria/$max[$i], 4).'<br>';

                // $user_id = $n->user_id;
                // $test->user_id = $user_id;
                
                // $nilai_id = $n->id;
                // $test->nilai_id = $nilai_id;

                // $test->nilai_vektor = 0;

                // menghitung normalisasi yang dibulatkan dengan 4 angka dibelakang koma dan disimpan dalam array normalisasi
                $normalisasi[$i][$j] = round($n->$nama_kriteria/$max[$i], 4);
                // $normalisasi[$i][$j] = $n->$nama_kriteria/$max[$i];
                // $test->$normalisasiHitung = $normalisasi[$i][$j];
                
                // $vektorKriteria[$i][$j] = round($normalisasi[$i][$j]*$bobot[$i], 2);
                $vektorKriteria[$i][$j] = $normalisasi[$i][$j]*$bobot[$i];
                // $test->$vektorHitung = $vektorKriteria[$i][$j];

                // if ($l == 3) {
                //     // echo "true";
                //     $l = 0;
                // }
                // echo '$i = '.$i.'<br>';
                // echo '$l = '.$l.'<br>';
                // echo '$j = '.$j.'<br>';
                // $vektor += $vektorKriteria[$i][$l];
                // // echo '['.$i.']['.$j.'] = '.$vektorKriteria[$i][$j].'<br>';
                // $test->nilai_vektor = $vektor;
                // $l++;

                $j++;
            }
            $i++;
        }
        $l = 0;
        foreach ($nilai as $n) {
            $vektor = 0;
            $m = 0;
            foreach ($kriteria as $k) {
                // menyimpan nama kriteria kedalam variable dan mengubahnya menjadi lowercase
                $nama_kriteria = strtolower($k->nama_kriteria);
                
                // $maxHitung = 'max_'.$nama_kriteria;
                $normalisasiHitung = 'normalisasi_'.$nama_kriteria;
                // echo $normalisasiHitung.'<br>';
                $vektorHitung = 'vektor_'.$nama_kriteria;
                // echo $vektorHitung.'<br>';

                $user_id = $n->user_id;
                $test['user_id'] = $user_id;
                
                $nilai_id = $n->id;
                $test['nilai_id'] = $nilai_id;
                
                // echo $normalisasiHitung.'['.$m.']['.$l.'] = '.$normalisasi[$m][$l].'<br>';
                $test[$normalisasiHitung] = $normalisasi[$m][$l];

                // echo $vektorHitung.'['.$m.']['.$l.'] = '.$vektorKriteria[$m][$l].'<br>';
                $test[$vektorHitung] = $vektorKriteria[$m][$l];

                $vektor += $vektorKriteria[$m][$l];
                // echo 'vektorSum['.$m.']['.$l.'] = '.$vektor.'<br>';
                $test['nilai_vektor'] = round($vektor, 6);

                if ($vektor > 0.6) {
                    User::where('id', $n->user_id)->update(['hasil' =>'lulus']);
                }

                // if($m == ($kriteria_length - 1)) {
                // }
                
                $m++;
            }
            // $test->save();
            Hitung::Create($test);
            echo '<br>';
            $l++;
        }
        // $test->save();
        // dd($max, $normalisasi, $vektorKriteria, $test, $bobot);
        return redirect('/dashboard/hitung');
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
