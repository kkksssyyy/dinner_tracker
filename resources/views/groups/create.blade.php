@extends('layouts.app')

@section('content')
  <form method="POST" action="{{ route('groups.store') }}">
      @csrf
      <div>
          <label for="name">name:</label>
          <input type="text" id="name" name="name">
      </div>
      <div>
          <button type="submit">Submit</button>
      </div>
  </form>
@endsection
