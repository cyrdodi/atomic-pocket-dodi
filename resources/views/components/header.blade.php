@props(['title','subtitle' => ''])
<div class="flex items-center justify-between p-4 mb-4 border border-gray-200 rounded-lg">
  <div class="flex items-center space-x-2">
    <h1 class="text-lg font-semibold text-sky-500">{{ $title }}</h1>
    <h3 class="font-medium text-gray-600 ">{{ $subtitle }}</h3>
  </div>
  {{ $slot }}
</div>