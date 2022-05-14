<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="h-screen">
  {{-- header --}}
  <header class="border-b bg-sky-100 text-sky-500 ">
    <div class="container p-4 mx-auto">
      <h1>Dompet Dodi Yulian</h1>
    </div>
  </header>

  <div class="flex">

    {{-- sidebar --}}
    <section class="p-6 bg-blue-100 w-80">
      <nav>
        <h2 class="font-semibold">Master</h2>
        <ul>
          <li><a href="{{ route('master.dompet') }}">Dompet</a></li>
          <li><a href="{{ route('master.kategori') }}">Kategori</a></li>
        </ul>
        <h2 class="font-semibold">Transaksi</h2>
        <ul>
          <li><a href="{{ route('transaksi.dompet_masuk') }}">Dompet Masuk</a></li>
          <li><a href="">Dompet Keluar</a></li>
        </ul>
        <h2 class="font-semibold">Laporan</h2>
        <ul>
          <li><a href="">Laporan Transaksi</a></li>
        </ul>
      </nav>
    </section>
    {{-- content --}}
    <section class="flex-1 p-6">
      {{ $slot }}

    </section>
  </div>

  {{-- footer --}}
  <footer class="p-6 text-center bg-sky-100 text-sky-500">
    <h2>Maju bersama Atomic</h2>
  </footer>
</body>

</html>