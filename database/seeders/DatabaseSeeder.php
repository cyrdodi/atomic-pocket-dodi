<?php

namespace Database\Seeders;

use App\Models\Dompet;
use App\Models\DompetStatus;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\User::factory(10)->create();
    $dompetStatus = DompetStatus::create([
      'id' => 1,
      'nama' => 'Aktif',
    ]);

    DompetStatus::create([
      'id' => 2,
      'nama' => 'Tidak aktif',
    ]);

    Dompet::create([
      'nama' => 'Dompet Utama',
      'referensi' => '123',
      'deskripsi' => 'Bank BCA',
      'status_id' => 1,
    ]);
    Dompet::create([
      'nama' => 'Dompet Tagihan',
      'referensi' => '456',
      'deskripsi' => 'Bank BCA',
      'status_id' => 1,
    ]);
    Dompet::create([
      'nama' => 'Dompet Cadangan',
      'referensi' => '789',
      'deskripsi' => 'Bank Permata',
      'status_id' => 2,
    ]);
  }
}
