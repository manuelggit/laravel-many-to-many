@extends('layouts.base')
@section('content')
  <h1>Lista degli impiegati:</h1>
  <ul>
    @foreach ($employees as $employee)
      <li>
        <h3>[{{ $employee -> id }}] {{ $employee -> name }} {{ $employee -> lastname }}</h3>
        {{ $employee -> body }}<br>
        <ul>
          @foreach ($employee -> tasks as $task)
            <li>
              <a href="{{ route('employee.remove.task', [$employee -> id, $task -> id]) }}">X</a>
              [{{ $task -> id }}] {{ $task -> title }}
            </li>
          @endforeach
        </ul>
        <br>
        <a href="{{ route('employee.edit', $employee -> id) }}">EDIT EMPLOYEE</a><br>
        <a href="{{ route('employee.delete', $employee -> id) }}">DELETE EMPLOYEE</a>
        <br><br><br>
      </li>
    @endforeach
  </ul>
@endsection
