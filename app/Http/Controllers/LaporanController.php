<?php

namespace App\Http\Controllers;

use App\Models\Dompet;
use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
  public function index()
  {

    return view(
      'laporan.index',
      [
        'kategori' => Kategori::where('status_id', '1')->orderBy('nama', 'asc')->get(),
        'dompet' => Dompet::where('status_id', '1')->orderBy('nama', 'asc')->get()
      ]
    );
  }

  public function show()
  {
    $result = Transaksi::with('dompet', 'kategori')
      ->whereBetween('tanggal', [request('tgl_awal'), request('tgl_akhir')])
      ->whereIn('status_id', request(['status1', 'status2']))
      ->where('dompet_id', '=', request('dompet'))
      ->where('kategori_id', '=', request('kategori'))
      ->get();


    // dd($result);
    return view(
      'laporan.show',
      ['result' => $result]
    );
  }
}
