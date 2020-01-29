@extends('layouts.base')
@section('content')
  <br>
  <form action="{{ route('employee.store', $employee -> id) }}" method="post">
    @csrf
    @method('POST')

    <label for="firstname">firstname:</label>
    <input type="text" name="firstname" value="">
    <br>
    <label for="lastname">lastname:</label>
    <input type="text" name="lastname" value="">
    <br>
    <select name="tasks[]" multiple>
        @foreach ($tasks as $task)
          <option value="{{ $task -> id }}">{{ $task -> name }}</option>
        @endforeach
    </select>
    <br>
    <input type="submit" name="" value="CREATE">
    <br>
  </form>
@endsection
