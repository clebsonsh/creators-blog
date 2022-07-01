@props(['post'])

<form method="POST" action="{{ route('post.update', $post->id) }}" class="max-w-screen-sm mx-auto">
  @csrf
  @method('PUT')

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />

  <!-- Title -->
  <div>
    <x-label for="title" value="Title" />

    <x-input id="title" name="title" class="block mt-1 w-full" type="text" :value="old('title', $post->title)" required autofocus />
  </div>

  <!-- Text -->
  <div class="mt-4">
    <x-label for="text" value="Text" />

    <textarea name="text" id="text" rows="5" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{old('text', $post->text)}}</textarea>
  </div>

  <!-- Update Button -->
  <div class="flex items-center justify-end mt-4">
    <x-button class="ml-3">
      Update
    </x-button>
  </div>

</form>