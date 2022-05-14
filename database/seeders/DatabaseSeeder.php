<?php

namespace Database\Seeders;

use App\Models\Dompet;
use App\Models\Kategori;
use App\Models\DompetStatus;
use App\Models\KategoriStatus;
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
    DompetStatus::create([
      'id' => 1,
      'nama' => 'Aktif',
    ]);

    DompetStatus::create([
      'id' => 2,
      'nama' => 'Tidak Aktif',
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

    KategoriStatus::create([
      'id' => 1,
      'nama' => 'Aktif',
    ]);

    KategoriStatus::create([
      'id' => 2,
      'nama' => 'Tidak Aktif',
    ]);

    Kategori::create([
      'nama' => 'Pemasukan',
      'deskripsi' => 'Kategori untuk pemasukan',
      'status_id' => 1,
    ]);

    Kategori::create([
      'nama' => 'Lain-lain',
      'deskripsi' => 'Kategori lain-lain',
      'status_id' => 2,
    ]);

    Kategori::create([
      'nama' => 'Pengeluaran',
      'deskripsi' => 'Kategori untuk pengeluaran',
      'status_id' => 1,
    ]);
  }
}
