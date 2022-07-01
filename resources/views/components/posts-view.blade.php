@props(['posts'])

@if (request()->routeIs('home'))
<h1 class="text-2xl font-bold mb-4">Posts List</h1>
@endif
{{ $posts->onEachSide(1)->links() }}
@foreach ($posts as $post )
<div class="post-wrapper py-4">
  <h2 class="text-xl font-semibold">
    @if (request()->routeIs('home'))
    {{ $post->title }}
    @else
    <a href="{{ route('dashboard.edit', $post->id)}}">
      {{ $post->title }}
    </a>
    @endif
  </h2>
  <p>{{ $post->text }}</p>
</div>
@endforeach
{{ $posts->onEachSide(1)->links() }}