<x-layout>
  <x-header title="Dompet Masuk">
    <x-button href="{{ route('transaksi.dompet_masuk_create') }}">Buat Baru</x-button>
  </x-header>
  {{-- flash message --}}
  <x-flash />

  {{-- search bar --}}
  <div class="mt-4">
    <form action="" method="GET">
      @if(request('status'))
      <input type="text" hidden name="status" value="{{ request('status') }}">
      @endif
      <input type="text" name="search" class="px-4 py-2 text-sm border rounded border-sky-500"
        value="{{ request('search') }}" placeholder="Search...">
      <button type="submit">Cari</button>
    </form>
  </div>

  {{-- table --}}
  <div class="w-full mt-6 overflow-x-auto rounded-lg shadow">
    <table class="w-full overflow-hidden text-sm">
      <thead class="border-b">
        <tr>
          <th class="px-2 py-3">#</th>
          <th class="px-2 py-3 text-left">Tanggal</th>
          <th class="px-2 py-3 text-left">Kode</th>
          <th class="px-2 py-3 text-left">Deskripsi</th>
          <th class="px-2 py-3 text-left">Kategori</th>
          <th class="px-2 py-3 text-left">Nilai</th>
          <th class="px-2 py-3 text-left">Dompet</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        @foreach ($dompetMasuk as $item)
        <tr>
          <td class="px-2 py-3 text-center">{{ $loop->iteration }}</td>
          <td class="px-2 py-3">{{ $item->tanggal }}</td>
          <td class="px-2 py-3">{{ $item->kode }}</td>
          <td class="px-2 py-3">{{ $item->deskripsi }}</td>
          <td class="px-2 py-3">{{ $item->kategori->nama }}</td>
          <td class="px-2 py-3">(+) {{ $item->nilai }}</td>
          <td class="px-2 py-3">{{ $item->dompet->nama }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {{ $dompetMasuk->links() }}
</x-layout>