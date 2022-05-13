<?php

namespace App\Http\Controllers;

use App\Models\Dompet;
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
}
