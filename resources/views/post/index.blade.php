<x-app-layout>
  @section('title', 'Index')
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Posts List
    </h2>
  </x-slot>

  <div class="max-w-7xl mx-auto py-4 px-6 lg:px-8">
    {{ $posts->onEachSide(1)->links() }}
    @foreach ($posts as $post )
    <div class="border-2 p-4 my-2">
      <x-post :post="$post" />
      <div class="flex justify-between">
        <a href="{{ route('post.edit', $post->id) }}" class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">Edit Post</a>
        <form method="POST" action="{{ route('post.destroy', $post->id) }}">
          @method('DELETE')
          @csrf
          <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:border-gray-900 focus:ring disabled:opacity-25 transition ease-in-out duration-150 bg-red-600 hover:bg-red-700 active:bg-red-900 ring-red-300">
            Delete Post
          </button>
        </form>
      </div>
    </div>
    @endforeach
    {{ $posts->onEachSide(1)->links() }}
  </div>
</x-app-layout>