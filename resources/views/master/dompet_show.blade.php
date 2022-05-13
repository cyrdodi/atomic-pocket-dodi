<x-layout>
  <div class="flex items-center justify-between">
    <h1>Dompet</h1>
    <x-button href="{{ route('masterDompet') }}">Kembali</x-button>
  </div>
  <div class="p-4 mt-4 bg-white rounded-lg shadow">
    <div class="table w-full">
      <div class="table-row-group">
        <div class="table-row">
          <div class="table-cell text-gray-600">Nama</div>
          <div class="table-cell">{{ $dompet->nama }}</div>
        </div>
        <div class="table-row">
          <div class="table-cell text-gray-600">Referensi</div>
          <div class="table-cell">{{ $dompet->referensi }}</div>
        </div>
        <div class="table-row">
          <div class="table-cell text-gray-600">Deskripsi</div>
          <div class="table-cell">{{ $dompet->deskripsi }}</div>
        </div>
        <div class="table-row">
          <div class="table-cell text-gray-600">Status</div>
          <div class="table-cell">{{ $dompet->status->nama }}</div>
        </div>
      </div>
    </div>
  </div>
</x-layout>