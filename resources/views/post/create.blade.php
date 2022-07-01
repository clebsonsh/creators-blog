<x-app-layout>
  @section('title', 'Create')
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      New Post
    </h2>
  </x-slot>

  <div class="max-w-7xl mx-auto py-4 px-6 lg:px-8">
    <x-post-create-form />
  </div>
</x-app-layout>