@extends('layouts.app')

@section('content')
  <div class="container">
    <h2  class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      Latest Posts
    </h2>
    <ul>
      @foreach($posts as $post)
        <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>
      @endforeach
    </ul>
  </div>
@endsection
