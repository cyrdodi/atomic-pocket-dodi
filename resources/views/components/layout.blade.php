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
  <header class="bg-sky-100 text-sky-500 border-b ">
    <div class="container mx-auto p-4">
      <h1>Dompet Dodi Yulian</h1>
    </div>
  </header>

  <div class="flex">

    {{-- sidebar --}}
    <section class="w-80 p-6 bg-blue-100">
      <nav>
        <h2 class="font-semibold">Master</h2>
        <ul>
          <li><a href="{{ route('masterDompet') }}">Dompet</a></li>
          <li><a href="{{ route('masterKategori') }}">Kategori</a></li>
        </ul>
        <h2 class="font-semibold">Transaksi</h2>
        <ul>
          <li><a href="">Dompet Masuk</a></li>
          <li><a href="">Dompet Keluar</a></li>
        </ul>
        <h2 class="font-semibold">Laporan</h2>
        <ul>
          <li><a href="">Laporan Transaksi</a></li>
        </ul>
      </nav>
    </section>
    {{-- content --}}
    <section>
      {{ $slot }}

    </section>
  </div>

  {{-- footer --}}
  <footer class="p-6 bg-sky-100 text-center text-sky-500">
    <h2>Maju bersama Atomic</h2>
  </footer>
</body>

</html>