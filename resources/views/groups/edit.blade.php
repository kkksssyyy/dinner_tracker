@extends('layouts.app')

@section('content')

  <form method="POST" action="{{ route('groups.update', ['group_id' => $group->id]) }}">
      @csrf
      @method('PUT')
      <div>
          <label for="name" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">name:</label>
          <input type="text" id="name" name="name" value="{{ $group->name }}">
      </div>
      <div>
          <button type="submit" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Submit</button>
      </div>
  </form>
@endsection





