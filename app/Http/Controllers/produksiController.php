<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produksiController extends Controller
{
    public function index()
    {
        // Fetch data for each year
        $produksiAkasia = DB::table('final_hutan_2')
            ->where('jenis_kayu', 'Akasia')
            ->pluck('Produksi Kayu Bulat');

        $produksiIndah = DB::table('final_hutan_2')
            ->where('jenis_kayu', 'Kelompok Kayu Indah')
            ->pluck('Produksi Kayu Bulat');

        $produksiMeranti = DB::table('final_hutan_2')
            ->where('jenis_kayu', 'Kelompok Meranti')
            ->pluck('Produksi Kayu Bulat');

        $produksiCampuran = DB::table('final_hutan_2')
            ->where('jenis_kayu', 'Kelompok Rimba Campuran')
            ->pluck('Produksi Kayu Bulat');
        
        $pelakuindustri2022 = DB::table('final_hutan_1')
            ->select(
                'kode_pulau','jumlah_hph','jumlah_pembudidaya'
            )
            ->where('id_tahun', 2022)
            ->get();

        return view('produksi.index', [
            'produksiAkasia' => $produksiAkasia,
            'produksiIndah' => $produksiIndah,
            'produksiMeranti' => $produksiMeranti,
            'produksiCampuran' => $produksiCampuran,
            'pelakuindustri2022' => $pelakuindustri2022,
        ]);
    }
}
