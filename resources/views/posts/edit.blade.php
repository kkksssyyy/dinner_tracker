@extends('layouts.app')

@section('content')

  <form method="POST" action="{{ route('posts.update', ['post_id' => $post->id]) }}">
      @csrf
      @method('PUT')
      <div>
          <label for="title">title:</label>
          <input type="text" id="title" name="title" value="{{ $post->title }}">
      </div>
      <div>
          <label for="body">body:</label>
          <textarea id="body" name="body">{{ $post->body }}</textarea>
      </div>
      <div>
          <button type="submit">Submit</button>
      </div>
  </form>
@endsection





