<x-layout>
  <x-header title="Laporan" subtitle="Transaksi"></x-header>
  <x-card>
    <h3 class="mb-4 text-lg">Transaksi</h3>
    <div class="">
      <form action="{{ route('laporan.result') }}" method="get">
        <div class="grid grid-cols-3 gap-4">
          <div class="mb-6">
            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="tgl_awal">tgl_awal</label>
            <input type="date"
              class="w-full p-2 border border-gray-400 rounded-lg @error('tgl_awal') border-red-400 @enderror"
              name="tgl_awal" id="tgl_awal" value="{{ old('tgl_awal') }}">
            @error('tgl_awal')
            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-6">
            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="tgl_akhir">tgl_akhir</label>
            <input type="date"
              class="w-full p-2 border border-gray-400 rounded-lg @error('tgl_akhir') border-red-400 @enderror"
              name="tgl_akhir" id="tgl_akhir" value="{{ old('tgl_akhir') }}">
            @error('tgl_akhir')
            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
            @enderror
          </div>

          <div class="flex flex-col justify-center mb-6">
            <label for="" class="mb-2 text-xs font-bold text-gray-700 uppercase">Status</label>
            <div>
              <input type="checkbox" id="uang_masuk" name="status1" value="1">
              <label class="mb-2 text-xs text-gray-700 uppercase " for="uang_masuk">Transaksi Uang
                Masuk</label>
            </div>
            <div>
              <input type="checkbox" id="uang_keluar" name="status2" value="2">
              <label class="mb-2 text-xs text-gray-700 uppercase " for="uang_keluar">Transaksi Uang
                Keluar</label>
            </div>
          </div>

          <div class="mb-6">
            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="kategori">kategori</label>
            <select class="w-full p-2 border border-gray-400 rounded-lg @error('kategori') border-red-400 @enderror"
              name="kategori" id="kategori" value="{{ old('kategori') }}">
              @foreach ($kategori as $item)
              <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-6">
            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="dompet">dompet</label>
            <select class="w-full p-2 border border-gray-400 rounded-lg @error('dompet') border-red-400 @enderror"
              name="dompet" id="dompet" value="{{ old('dompet') }}">
              @foreach ($dompet as $item)
              <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <button type="submit" class="px-3 py-2 text-white rounded-lg bg-sky-500">Buat Laporan</button>
      </form>
    </div>
  </x-card>
</x-layout>