@extends('layouts.app')

@section('content')

  <form method="POST" action="{{ route('posts.update', ['post_id' => $post->id]) }}">
      @csrf
      @method('PUT')
      <div>
          <label for="title" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">title:</label>
          <input type="text" id="title" name="title" value="{{ $post->title }}">
      </div>
      <div>
          <label for="body" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">body:</label>
          <textarea id="body" name="body">{{ $post->body }}</textarea>
      </div>
      <div>
          <button type="submit" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Submit</button>
      </div>
  </form>
@endsection





