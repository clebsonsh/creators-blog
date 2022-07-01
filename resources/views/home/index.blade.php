<x-guest-layout>
  @if (Route::has('login'))
  <div class="pb-4 flex justify-end">
    @auth
    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    @endauth
  </div>
  @endif

  <x-posts-view :posts="$posts" />
</x-guest-layout>