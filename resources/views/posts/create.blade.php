@extends('layouts.app')

@section('content')
  <form method="POST" action="{{ route('posts.store') }}">
      @csrf
      <div>
          <label for="title" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Title:</label>
          <input type="text" id="title" name="title">
      </div>
      <div>
          <label for="body" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">body:</label>
          <textarea id="body" name="body"></textarea>
      </div>
      <div>
          <button type="submit" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Submit</button>
      </div>
  </form>
@endsection
