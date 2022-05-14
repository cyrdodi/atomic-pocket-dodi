<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class DompetMasukController extends Controller
{
  public function index()
  {

    return view('transaksi.dompet_masuk.index', ['dompetMasuk' => Transaksi::where('status_id', '1')->paginate(5)]);
  }

  public function create()
  {
  }
}
