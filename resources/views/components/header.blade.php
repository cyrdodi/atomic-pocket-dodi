@props(['title','subtitle'])
<div class="flex items-center justify-between p-4 mb-4 border border-gray-200 rounded-lg">
  <div class="flex items-end space-x-2">
    <h1 class="text-xl font-bold">{{ $title }}</h1>
    <h3 class="font-semibold text-gray-700 ">{{ $subtitle }}</h3>
  </div>
  {{ $slot }}
</div>