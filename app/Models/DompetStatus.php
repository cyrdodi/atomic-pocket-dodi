<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DompetStatus extends Model
{
  use HasFactory;

  // mendefinisikan nama table secara spesifik
  protected $table = 'dompet_status';

  // disable timestamps
  public $timestamps = false;

  public function dompet()
  {
    return $this->hasMany(Dompet::class);
  }
}
