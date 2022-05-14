@if(session()->has('success'))
<div class="flex mt-4">
  <p class="px-2 py-1 text-sm text-white bg-blue-500 rounded-lg animate-pulse">{{
    session('success') }}</p>
</div>
@endif