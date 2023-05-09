@extends('layouts.app')

@section('content')
  <h1>{{ $post->title }}</h1>
  <p>{{ $post->body }}</p>
  <p>Created at: {{ $post->created_at }}</p>
  <p>Updated at: {{ $post->updated_at }}</p>
@endsection
