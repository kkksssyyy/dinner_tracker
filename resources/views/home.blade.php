@extends('layouts.app')

@section('content')
  <div class="container">
    <h2  class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      Latest Posts
    </h2>
    <a href="{{ route('posts.create') }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">create</a>
    <ul>
      @foreach($posts as $post)
        <li><a href="{{ route('posts.show', $post->id) }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ $post->title }}</a></li>
      @endforeach
    </ul>
    <a href="{{ route('groups.create') }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">group create</a>
  </div>
@endsection
