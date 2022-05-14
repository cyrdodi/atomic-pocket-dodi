<?php

namespace App\Http\Controllers;

use App\Models\Dompet;
use Illuminate\Http\Request;

class DompetStatusController extends Controller
{
  public function update()
  {
    $dompet = Dompet::find(request('dompet_id'));

    // jika status sebelumnya aktif, maka status akan diubah menjadi tidak aktif dan sebaliknya
    if ($dompet->status_id == 1) {
      $changeStatus = 2;
    } else if ($dompet->status_id == 2) {
      $changeStatus = 1;
    }

    $dompet->update(['status_id' => $changeStatus]);

    // redirect back
    return redirect()->back()->with('success', 'Status berhasil diubah');
  }
}
