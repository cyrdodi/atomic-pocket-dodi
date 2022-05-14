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

    return view('master.dompet.index', ['dompet' => $dompet]);
  }

  public function show(Dompet $dompet)
  {
    return view('master.dompet.show', ['dompet' => $dompet]);
  }

  public function create()
  {
    return view('master.dompet.create', ['status' => DompetStatus::get()]);
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
    return redirect()->route('master.dompet')->with('success', 'Dompet berhasil ditambahkan');
  }

  public function edit(Dompet $dompet)
  {
    return view('master.dompet.edit', ['dompet' => $dompet, 'status' => DompetStatus::get()]);
  }

  public function update()
  {
    // validasi form
    request()->validate([
      'nama' => 'required|min:5',
      'deskripsi' => 'max:100'
    ]);

    // update ke database
    Dompet::where('id', request('id'))->update([
      'nama' => request('nama'),
      'status_id' => request('status'),
      'referensi' => request('referensi'),
      'deskripsi' => request('deskripsi')
    ]);

    // redirect ke halaman master/dompet dengan flash message
    return redirect()->route('master.dompet')->with('success', 'Dompet berhasil diubah');
  }
}
