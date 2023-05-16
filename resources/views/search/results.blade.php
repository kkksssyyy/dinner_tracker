@extends('layouts.app')

@section('content')
  <div class="container">
    <ul>
      @foreach($posts as $post)
        <li><a href="{{ route('posts.show', $post->id) }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ $post->title }}</a></li>
      @endforeach
    </ul>
  </div>
@endsection
