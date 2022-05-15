<?php

namespace App\Http\Controllers;

use App\Models\Dompet;
use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Actions\GenerateKodeAction;

class DompetMasukController extends Controller
{
  public function index()
  {

    return view('transaksi.dompet_masuk.index', ['dompetMasuk' => Transaksi::filter(request(['search']))->where('transaksi.status_id', '1')->paginate(5)]);
  }

  public function create()
  {
    return view(
      'transaksi.dompet_masuk.create',
      [
        'kategori' => Kategori::where('status_id', 1)->orderBy('nama', 'asc')->get(),
        'dompet' => Dompet::where('status_id', 1)->orderBy('nama', 'asc')->get()
      ]
    );
  }

  public function store(GenerateKodeAction $action)
  {
    request()->validate([
      'tanggal' => 'required|date',
      'kategori' => 'required',
      'dompet' => 'required',
      'nilai' => 'required|numeric',
      'deskripsi' => 'max:100'
    ]);


    Transaksi::create([
      'kode' => $action->handle(1), // menggunakan action untuk generate kode; @params 1 = masuk, 2 = keluar
      'tanggal' => request('tanggal'),
      'kategori_id' => request('kategori'),
      'dompet_id' => request('dompet'),
      'nilai' => request('nilai'),
      'deskripsi' => request('deskripsi'),
      'status_id' => 1
    ]);

    return redirect()->route('transaksi.dompet_masuk')->with('success', 'Data berhasil ditambahkan');
  }
}
