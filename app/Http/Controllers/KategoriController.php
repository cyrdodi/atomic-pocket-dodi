<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\KategoriStatus;

class KategoriController extends Controller
{
  public function index()
  {
    $kategori =  Kategori::filter(request(['status', 'search']))->paginate(10);

    return view('master.kategori.index', ['kategori' => $kategori]);
  }

  public function show(Kategori $kategori)
  {
    return view('master.kategori.show', ['kategori' => $kategori]);
  }

  public function create()
  {
    return view('master.kategori.create', ['status' => KategoriStatus::get()]);
  }

  public function store()
  {
    request()->validate([
      'nama' => 'required|min:5',
      'deskripsi' => 'max:100'
    ]);

    Kategori::create([
      'nama' => request('nama'),
      'status_id' => request('status'),
      'referensi' => request('referensi'),
      'deskripsi' => request('deskripsi')
    ]);

    return redirect()->route('masterKategori')->with('success', 'Kategori berhasil ditambahkan');
  }

  public function edit(Kategori $kategori)
  {

    return view('master.kategori.edit', ['kategori' => $kategori, 'status' => KategoriStatus::get()]);
  }

  public function update(Kategori $kategori)
  {
    request()->validate([
      'nama' => 'required|min:5',
      'deskripsi' => 'max:100'
    ]);

    $kategori->update([
      'nama' => request('nama'),
      'deskripsi' => request('deskripsi'),
      'status_id' => request('status'),
    ]);

    return redirect()->route('masterKategori')->with('success', 'Kategori berhasil diubah');
  }
}
