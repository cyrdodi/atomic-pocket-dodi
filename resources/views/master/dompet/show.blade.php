<x-layout>
  <x-header title="Dompet" subtitle="Detail">
    <x-button href="{{ route('master.dompet') }}">Kembali</x-button>
  </x-header>
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