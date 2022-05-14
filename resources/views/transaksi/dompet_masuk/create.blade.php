<x-layout>
  <x-header title="Dompet Masuk" subtitle="Buat Baru">
    <x-button href="{{ route('transaksi.dompet_masuk') }}">Kelola Dompet</x-button>
  </x-header>

  <x-card>
    <div class="w-1/2">
      <form action="" method="post">
        @csrf
        <div class="mb-6">
          <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="kode">kode</label>
          <input type="text"
            class="w-full p-2 border border-gray-400 rounded-lg @error('kode') border-red-400 @enderror" name="kode"
            id="kode" value="{{ old('kode') }}" readonly placeholder="WINxxxxx">
          @error('kode')
          <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="tanggal">tanggal</label>
          <input type="date"
            class="w-full p-2 border border-gray-400 rounded-lg @error('tanggal') border-red-400 @enderror"
            name="tanggal" id="tanggal" value="{{ date('Y-m-d') }}" readonly>
          @error('tanggal')
          <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="kategori">kategori</label>
          <select name="kategori" id="kategori" class="w-full p-2 border border-gray-400 rounded-lg">
            @foreach ($kategori as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
          </select>
          @error('kategori')
          <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="dompet">dompet</label>
          <select name="dompet" id="dompet" class="w-full p-2 border border-gray-400 rounded-lg">
            @foreach($dompet as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
          </select>
          @error('dompet')
          <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="nilai">nilai</label>
          <input type="number"
            class="w-full p-2 border border-gray-400 rounded-lg @error('nilai') border-red-400 @enderror" name="nilai"
            id="nilai" value="{{ old('nilai') }}">
          @error('nilai')
          <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="deskripsi">deskripsi</label>
          <textarea type="text"
            class="w-full p-2 border border-gray-400 rounded-lg @error('deskripsi') border-red-400 @enderror"
            name="deskripsi" id="deskripsi">{{ old('deskripsi') }}</textarea>
          @error('deskripsi')
          <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <button type="submit" class="px-4 py-2 text-white rounded bg-sky-500 hover:bg-sky-600">Simpan</button>
        </div>
      </form>
    </div>
  </x-card>
</x-layout>