@extends('layouts.app')

@section('content')
  <div class="container">
    <h2  class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      groups
    </h2>
    <a href="{{ route('groups.create') }}">create</a>
    <ul>
      @foreach($groups as $group)
        <li><a href="{{ route('groups.show', $group->id) }}">{{ $group->name }}</a></li>
      @endforeach
    </ul>
  </div>
@endsection
