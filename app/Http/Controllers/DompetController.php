<?php

namespace App\Http\Controllers;

use App\Models\Dompet;
use App\Models\DompetStatus;
use Illuminate\Http\Request;

class DompetController extends Controller
{
  public function index()
  {
    $dompet = Dompet::filter(request(['status', 'search']))->paginate(10);

    return view('master.dompet_index', ['dompet' => $dompet]);
  }

  public function show(Dompet $dompet)
  {
    return view('master.dompet_show', ['dompet' => $dompet]);
  }

  public function create()
  {
    return view('master.dompet_create', ['status' => DompetStatus::get()]);
  }

  public function store()
  {
    // validasi form
    request()->validate([
      'nama' => 'required|min:5',
      'deskripsi' => 'max:100'
    ]);
    // simpan ke database
    Dompet::create([
      'nama' => request('nama'),
      'status_id' => request('status'),
      'referensi' => request('referensi'),
      'deskripsi' => request('deskripsi')
    ]);

    // redirect ke halaman master/dompet dengan flash message
    return redirect()->route('masterDompet')->with('success', 'Dompet berhasil ditambahkan');
  }
}
