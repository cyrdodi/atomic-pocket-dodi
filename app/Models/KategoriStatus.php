<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriStatus extends Model
{
  use HasFactory;

  // disable timestamp
  public $timestamps = false;

  // mendifinisikan nama table secara spesifik
  protected $table = 'kategori_status';

  // relationship untuk table kategori
  public function kategori()
  {
    return $this->hasMany(Kategori::class, 'status_id');
  }
}
