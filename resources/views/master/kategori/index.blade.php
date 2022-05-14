<x-layout>
  <div class="flex items-center justify-between px-4 py-2 rounded-lg shadow">
    <div class="flex">
      <h1>Kategori</h1> | <h2></h2>
    </div>

    <div class="flex items-center">
      <x-button href="{{ route('masterKategoriCreate') }}">Buat Baru</x-button>
      <div class="flex">
        {{--
        menggambil query dari search tapi menghilangkan status dari query sebelumnya agar tidak double dengan cara
        request()->except('status');
        pada method diatas akan menghasilkan array, maka kita harus convert dari array menjadi string yang berupa query
        dengan menggunakan method php http_build_query()
        --}}
        <a href="?&{{ http_build_query(request()->except('status', 'page')) }}"
          class="px-3 py-2 rounded-l-lg {{ !request('status') ? 'btn-status-active' : 'btn-status-inactive' }}">Semua</a>
        <a href="?status=1&{{ http_build_query(request()->except('status', 'page')) }}"
          class="px-3 py-2 {{ request('status') == 1 ? 'btn-status-active' : 'btn-status-inactive' }}">Aktif</a>
        <a href="?status=2&{{ http_build_query(request()->except('status', 'page')) }}"
          class="px-3 py-2 rounded-r-lg {{ request('status') == 2 ? 'btn-status-active' : 'btn-status-inactive' }}">Tidak
          Aktif</a>
      </div>
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
          <th class="px-2 py-3 text-left">Deskripsi</th>
          <th class="px-2 py-3 text-left">Status</th>
          <th class="px-2 py-3 ">Action</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        @foreach ($kategori as $item)
        <tr>
          <td class="px-2 py-3 text-center">{{ $loop->iteration }}</td>
          <td class="px-2 py-3">{{ $item->nama }}</td>
          <td class="px-2 py-3">{{ $item->deskripsi }}</td>
          <td class="px-2 py-3">{{ $item->status->nama }}</td>
          <td class="px-2 py-3">
            <div class="flex items-center justify-center space-x-2">
              <x-badge href="{{ route('masterKategoriShow', [$item->id]) }}">Detail</x-badge>
              <x-badge href="{{ route('masterKategoriEdit', [$item->id]) }}">Ubah</x-badge>
              <form action="{{ route('masterKategoriStatusUpdate') }}" method="post">
                @csrf
                <input type="text" name="kategori_id" value="{{ $item->id }}" hidden>
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

  {{ $kategori->links() }}
</x-layout>