@extends('layouts.master')

@section('content')

<h3>Team.index 'all-teams'</h3>

<ul>
  @foreach($teams as $team)
      <li>
          <a href="/teams/{{ $team->id }}"><h3>Team name: {{ $team->name }}</h3></a>
      </li>
  @endforeach
</ul>

@endsection