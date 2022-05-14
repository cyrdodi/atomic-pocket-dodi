<x-layout>
  <x-header title="Kategori" subtitle="Ubah">
    <x-button href="{{ route('masterKategori') }}">Kelola Kategori</x-button>
  </x-header>

  <x-card>
    <div class="w-1/2">
      <form action="" method="post">
        @csrf
        <div class="mb-6">
          <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="nama">nama</label>
          <input type="text"
            class="w-full p-2 border border-gray-400 rounded-lg @error('nama') border-red-400 @enderror" name="nama"
            id="nama" value="{{ $kategori->nama }}" required minlength="5">
          @error('nama')
          <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="deskripsi">deskripsi</label>
          <input type="text"
            class="w-full p-2 border border-gray-400 rounded-lg @error('deskripsi') border-red-400 @enderror"
            name="deskripsi" id="deskripsi" value="{{ $kategori->deskripsi }}" maxlength="100">
          @error('deskripsi')
          <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="status">Status</label>
          <select name="status" id="status" class="w-full p-2 border border-gray-400 rounded-lg">
            @foreach ($status as $item)
            <option value="{{ $item->id }}" {{ $item->id === $kategori->status_id ? 'selected' : ''}}>{{ $item->nama }}
            </option>
            @endforeach
          </select>
          </select>
          @error('status')
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