<x-layout>
  <div>
    <h1>Riwayat Transaksi</h1>

    <div class="space-x-3 ">
      <span>{{ request('tgl_awal') }}</span> <span>-</span>
      <span>{{ request('tgl_akhir') }}</span>
    </div>

    <div class="w-full mt-6 mb-6 overflow-x-auto rounded-lg shadow">
      <table class="w-full overflow-hidden text-sm">
        <thead class="border-b">
          <tr>
            <th class="px-3 py-2">#</th>
            <th class="px-3 py-2 text-left">Tanggal</th>
            <th class="px-3 py-2 text-left">Kode</th>
            <th class="px-3 py-2 text-left">Deskripsi</th>
            <th class="px-3 py-2 text-left">Dompet</th>
            <th class="px-3 py-2 text-left">Kategori</th>
            <th class="px-3 py-2 text-right">Nilai</th>
          </tr>
        </thead>
        <tbody class="divide-y">
          @foreach ($result as $item )
          <tr>
            <td class="px-3 py-2">{{ $loop->iteration }}</td>
            <td class="px-3 py-2">{{ $item->tanggal }}</td>
            <td class="px-3 py-2">{{ $item->kode }}</td>
            <td class="px-3 py-2">{{ $item->deskripsi }}</td>
            <td class="px-3 py-2">{{ $item->dompet->nama }}</td>
            <td class="px-3 py-2">{{ $item->kategori->nama }}</td>
            <td class="px-3 py-2 text-right">{{ $item->status_id == 1 ? '+' : '-' }}({{ $item->nilai }})</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <x-card>
      <h2 class="text-lg font-semibold">Summary</h2>
      <table class="">
        <tbody>
          <tr>
            <td class="px-3 py-2 text-right">Total Uang Masuk</td>
            <th class="px-3 py-2 text-right">Rp. {{ $result->where('status_id', 1)->sum('nilai') }}</th>
          </tr>
          <tr>
            <td class="px-3 py-2 text-right">Total Uang Keluar</td>
            <th class="px-3 py-2 text-right">Rp. {{ $result->where('status_id', 2)->sum('nilai') }}</th>
          </tr>
          <tr>
            <td class="px-3 py-2 text-right">Total</td>
            <th class="px-3 py-2 text-right">Rp. {{ $result->sum('nilai') }}</th>
          </tr>
        </tbody>
      </table>
    </x-card>
  </div>
</x-layout>