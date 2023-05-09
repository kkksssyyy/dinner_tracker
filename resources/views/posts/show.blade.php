@extends('layouts.app')

@section('content')
  <h1>{{ $post->title }}</h1>
  <p>{{ $post->body }}</p>
  <p>Created at: {{ $post->created_at }}</p>
  <p>Updated at: {{ $post->updated_at }}</p>
  <a href="{{ route('posts.edit', ['post_id' => $post->id]) }}">edit</a>
  <!-- delete.blade.php -->
  <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
      @csrf
      @method('DELETE')
      <button type="submit">delete</button>
  </form>
@endsection
