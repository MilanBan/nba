@extends('layouts.master')

@section('content')

<h3>teams.show 'team'</h3>
<h4>Team name: {{ $team->name }}</h4>
<p>Email: {{ $team->email }}</p>
<p>Adress: {{ $team->address }}</p>
<p>City: {{ $team->city }}</p>
<p>Players:</p>

<ul>

  @foreach($team->players as $player)
    <li><a href="/players/{{$player->id}}">{{ $player->first_name }} {{ $player->last_name }}</li>
  @endforeach

</ul>

@endsection


