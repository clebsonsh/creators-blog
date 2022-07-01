@props(['post'])

<div class="post-wrapper py-4">
  <h2 class="text-xl font-semibold">
    {{ $post->title }}
  </h2>
  <p>{{ $post->text }}</p>
</div>