<x-layout>
  <div class="flex justify-between px-4 py-2 rounded-lg shadow">
    <div class="flex">
      <h1>Dompet</h1> | <h2>Semua</h2>
    </div>

    <div class="flex items-center">
      <a href="" class="px-2 py-3 text-white rounded-lg bg-sky-500 hover:bg-sky-700">Buat baru</a>
      <div class="flex">
        <a href="?" class="px-2 py-3 border rounded-l-lg text-sky-500 hover:bg-sky-700 border-sky-500">Semua</a>
        <a href="?status=1" class="px-2 py-3 border text-sky-500 hover:bg-sky-700 border-sky-500">Aktif</a>
        <a href="?status=2" class="px-2 py-3 border rounded-r-lg text-sky-500 hover:bg-sky-700 border-sky-500">Tidak
          Aktif</a>
      </div>
    </div>
  </div>

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
    <table class="w-full overflow-hidden">
      <thead class="border-b">
        <tr>
          <th class="px-2 py-3">#</th>
          <th class="px-2 py-3 text-left">Nama</th>
          <th class="px-2 py-3 text-left">Referensi</th>
          <th class="px-2 py-3 text-left">Deskripsi</th>
          <th class="px-2 py-3 text-left">Status</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        @foreach ($dompet as $item)
        <tr>
          <td class="px-2 py-3 text-center">{{ $loop->iteration }}</td>
          <td class="px-2 py-3">{{ $item->nama }}</td>
          <td class="px-2 py-3">{{ $item->referensi }}</td>
          <td class="px-2 py-3">{{ $item->deskripsi }}</td>
          <td class="px-2 py-3">{{ $item->status->nama }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {{ $dompet->links() }}
</x-layout>