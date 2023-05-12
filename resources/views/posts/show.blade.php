@extends('layouts.app')

@section('content')
  <img src="{{ asset('storage/images/filename.jpg') }}" alt="Image">
  <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ $post->title }}</h1>
  <p class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ $post->body }}</p>
  <p class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Created at: {{ $post->created_at }}</p>
  <p class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Updated at: {{ $post->updated_at }}</p>
  <a href="{{ route('posts.edit', ['post_id' => $post->id]) }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">edit</a>
  <!-- delete.blade.php -->
  <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
      @csrf
      @method('DELETE')
      <button type="submit" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">delete</button>
  </form>
@endsection
