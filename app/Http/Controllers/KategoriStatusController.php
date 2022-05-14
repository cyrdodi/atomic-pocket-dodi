<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriStatusController extends Controller
{
  public function update()
  {
    $kategori = Kategori::find(request('kategori_id'));

    // jika staus sebelumnya aktif, maka status akan diubah menjadi tidak aktif dan sebaliknya
    if ($kategori->status_id == 1) {
      $changeStatus = 2;
    } else if ($kategori->status_id == 2) {
      $changeStatus = 1;
    }

    $kategori->update(['status_id' => $changeStatus]);

    // redirect back
    return redirect()->back()->with('success', 'Status berhasil diubah');
  }
}
