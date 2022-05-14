<x-layout>
  <div class="flex items-center justify-between px-4 py-2 rounded-lg shadow">
    <div class="flex">
      <h1>Dompet Masuk</h1>
    </div>

    <div class="flex items-center">
      <x-button href="{{ route('transaksiDompetMasuk') }}">Buat Baru</x-button>
    </div>
  </div>

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
          <th class="px-2 py-3 text-left">Nama</th>
          <th class="px-2 py-3 text-left">Referensi</th>
          <th class="px-2 py-3 text-left">Deskripsi</th>
          <th class="px-2 py-3 text-left">Status</th>
          <th class="px-2 py-3 ">Action</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        @foreach ($dompetMasuk as $item)
        <tr>
          <td class="px-2 py-3 text-center">{{ $loop->iteration }}</td>
          <td class="px-2 py-3">{{ $item->tanggal }}</td>
          <td class="px-2 py-3">{{ $item->status->nama }}</td>
          <td class="px-2 py-3">
            <div class="flex items-center justify-center space-x-2">
              <x-badge href="/master/dompet/{{ $item->id }}">Detail</x-badge>
              <x-badge href="{{ route('masterDompetEdit', [$item->id]) }}">Ubah</x-badge>
              <form action="{{ route('masterDompetStatusUpdate') }}" method="post">
                @csrf
                <input type="text" name="dompet_id" value="{{ $item->id }}" hidden>
                <button type="submit" class="px-2 font-semibold text-white rounded-xl bg-sky-500">{{ $item->status->nama
                  }}</button>
              </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {{ $dompetMasuk->links() }}
</x-layout>