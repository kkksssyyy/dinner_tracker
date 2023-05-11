@extends('layouts.app')

@section('content')
  <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ $group->name }}</h1>
  <p class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Created at: {{ $group->created_at }}</p>
  <p class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Updated at: {{ $group->updated_at }}</p>
  <a href="{{ route('groups.edit', ['group_id' => $group->id]) }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">edit</a>
  <!-- delete.blade.php -->
  <form method="POST" action="{{ route('groups.destroy', $group->id) }}">
      @csrf
      @method('DELETE')
      <button type="submit" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">delete</button>
  </form>
@endsection
