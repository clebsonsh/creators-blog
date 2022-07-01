<x-guest-layout>
  @section('title', 'Home')
  @if (Route::has('login'))
  <div class="pb-4 flex justify-end">
    @auth
    <a href="{{ route('post.index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    @endauth
  </div>
  @endif

  <h1 class="text-2xl font-bold mb-4">Posts List</h1>
  {{ $posts->onEachSide(1)->links() }}

  @foreach ($posts as $post )
  <x-post :post="$post" />
  @endforeach
  {{ $posts->onEachSide(1)->links() }}
</x-guest-layout>