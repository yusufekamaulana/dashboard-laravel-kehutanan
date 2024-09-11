<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForestAreaController extends Controller
{
    public function index()
    {
        // Fetch data for each year
        $forestData2022 = DB::table('final_hutan_1')
            ->select(
                'kode_pulau',
                'Hutan_Lindung',
                'Suaka_Alam_dan_Pelestarian_Alam',
                'Hutan_Produksi_Terbatas',
                'Hutan_Produksi_Tetap',
                'Hutan_Produksi_yang_dapat_Dikonversi',
                'Jumlah_Luas_Hutan_dan_Perairan'
            )
            ->where('id_tahun', 2022)
            ->get();

        $forestData2021 = DB::table('final_hutan_1')
            ->select(
                'kode_pulau',
                'Hutan_Lindung',
                'Suaka_Alam_dan_Pelestarian_Alam',
                'Hutan_Produksi_Terbatas',
                'Hutan_Produksi_Tetap',
                'Hutan_Produksi_yang_dapat_Dikonversi',
                'Jumlah_Luas_Hutan_dan_Perairan'
            )
            ->where('id_tahun', 2021)
            ->get();

        $forestData2020 = DB::table('final_hutan_1')
            ->select(
                'kode_pulau',
                'Hutan_Lindung',
                'Suaka_Alam_dan_Pelestarian_Alam',
                'Hutan_Produksi_Terbatas',
                'Hutan_Produksi_Tetap',
                'Hutan_Produksi_yang_dapat_Dikonversi',
                'Jumlah_Luas_Hutan_dan_Perairan'
            )
            ->where('id_tahun', 2020)
            ->get();

        $forestData2019 = DB::table('final_hutan_1')
            ->select(
                'kode_pulau',
                'Hutan_Lindung',
                'Suaka_Alam_dan_Pelestarian_Alam',
                'Hutan_Produksi_Terbatas',
                'Hutan_Produksi_Tetap',
                'Hutan_Produksi_yang_dapat_Dikonversi',
                'Jumlah_Luas_Hutan_dan_Perairan'
            )
            ->where('id_tahun', 2019)
            ->get();

        // Query to get total for the year 2022
        $totalForestData2022 = DB::table('final_hutan_1')
            ->select(
                DB::raw('
                    SUM(Hutan_Lindung) AS Total_Hutan_Lindung,
                    SUM(Suaka_Alam_dan_Pelestarian_Alam) AS Total_Suaka_Alam_dan_Pelestarian_Alam,
                    SUM(Hutan_Produksi_Terbatas) AS Total_Hutan_Produksi_Terbatas,
                    SUM(Hutan_Produksi_Tetap) AS Total_Hutan_Produksi_Tetap,
                    SUM(Hutan_Produksi_yang_dapat_Dikonversi) AS Total_Hutan_Produksi_yang_dapat_Dikonversi,
                    SUM(Jumlah_Luas_Hutan_dan_Perairan) AS Total_Jumlah_Luas_Hutan_dan_Perairan
                ')
            )
            ->where('id_tahun', 2022)
            ->first();  // Using first() to return a single row with totals

        return view('forest.index', compact(
            'forestData2022',
            'forestData2021',
            'forestData2020',
            'forestData2019',
            'totalForestData2022'  // Pass the total data to the view
        ));
    }
}
