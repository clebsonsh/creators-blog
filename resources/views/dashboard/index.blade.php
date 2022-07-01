<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Posts List
    </h2>
  </x-slot>

  <div class="max-w-7xl mx-auto py-4 px-6 lg:px-8">
    <x-posts-view :posts="$posts" />
  </div>
</x-app-layout>