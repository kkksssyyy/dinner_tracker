@extends('layouts.app')

@section('content')
  <h1>{{ $group->name }}</h1>
  <p>Created at: {{ $group->created_at }}</p>
  <p>Updated at: {{ $group->updated_at }}</p>
  <a href="{{ route('groups.edit', ['group_id' => $ group->id]) }}">edit</a>
  <!-- delete.blade.php -->
  <form method="POST" action="{{ route('groups.destroy', $group->id) }}">
      @csrf
      @method('DELETE')
      <button type="submit">delete</button>
  </form>
@endsection
