<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DynamicTableController extends Controller
{
    public function showTable($tableName)
    {
        // Ambil semua data dari tabel yang diberikan
        $data = DB::table($tableName)->get();

        // Ambil nama-nama kolom dari tabel yang diberikan
        $columns = DB::getSchemaBuilder()->getColumnListing($tableName);

        // Kirim data dan kolom ke view
        return view('dynamic-table.index', compact('data', 'columns', 'tableName'));
    }
}
