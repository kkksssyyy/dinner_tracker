@extends('layouts.app')

@section('content')
  <form method="POST" action="{{ route('posts.store') }}">
      @csrf
      <div>
          <label for="title">Title:</label>
          <input type="text" id="title" name="title">
      </div>
      <div>
          <label for="body">body:</label>
          <textarea id="body" name="body"></textarea>
      </div>
      <div>
          <button type="submit">Submit</button>
      </div>
  </form>
@endsection
