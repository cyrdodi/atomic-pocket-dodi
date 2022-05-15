<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="flex flex-col min-h-screen overflow-auto">
  <div class="flex ">
    {{-- sidebar --}}
    <section class="p-6 bg-sky-100 w-60" id="sidebar">
      <nav>
        <h2 class="font-semibold">Master</h2>
        <ul>
          <li>
            <a href="{{ route('master.dompet') }}"
              class="ml-4 hover:text-sky-500 {{ request()->is('master/dompet*') ?'text-sky-500' : '' }}">Dompet</a>
          </li>
          <li>
            <a href="{{ route('master.kategori') }}"
              class="ml-4 hover:text-sky-500 {{ request()->is('master/kategori*') ?'text-sky-500' : '' }}">Kategori</a>
          </li>
        </ul>
        <h2 class="font-semibold">Transaksi</h2>
        <ul>
          <li>
            <a href="{{ route('transaksi.dompet_masuk') }}"
              class="ml-4 hover:text-sky-500 {{ request()->is('transaksi/dompet-masuk*') ?'text-sky-500' : '' }}">Dompet
              Masuk</a>
          </li>
          <li>
            <a href="{{ route('transaksi.dompet_keluar') }}"
              class="ml-4 hover:text-sky-500 {{ request()->is('transaksi/dompet-keluar*') ?'text-sky-500' : '' }}">Dompet
              Keluar</a>
          </li>
        </ul>
        <h2 class="font-semibold">Laporan</h2>
        <ul>
          <li><a href="{{ route('laporan') }}"
              class="ml-4 hover:text-sky-500 {{ request()->is('laporan*') ?'text-sky-500' : '' }}">Laporan
              Transaksi</a>
          </li>
        </ul>
      </nav>
    </section>
    {{-- cener --}}
    <div class="flex flex-col flex-1 min-h-screen">
      {{-- header --}}
      <header class="border-b text-sky-500 ">
        <div class="p-4 ">
          <div class="flex items-center">
            <x-logo />
            <h1 class="ml-2 text-xl font-bold">Dompet Dodi Yulian</h1>
          </div>
        </div>
      </header>

      {{-- content --}}
      <section class="flex-1 p-6">
        {{ $slot }}

      </section>

      {{-- footer --}}
      <footer class="py-2 mt-auto text-center text-gray-800 bg-gray-100 border-t border-gray-200">
        <h2>Maju bersama Atomic</h2>
      </footer>
    </div>
  </div>

</body>

</html>