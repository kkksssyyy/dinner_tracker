@extends('layouts.app')

@section('content')

  <form method="POST" action="{{ route('groups.update', ['group_id' => $group->id]) }}">
      @csrf
      @method('PUT')
      <div>
          <label for="name">name:</label>
          <input type="text" id="name" name="name" value="{{ $group->name }}">
      </div>
      <div>
          <button type="submit">Submit</button>
      </div>
  </form>
@endsection





