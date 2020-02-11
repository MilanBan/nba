@extends('layouts.master')

@section('content')
<h3>player.show</h3>
<p>First name: {{ $player->first_name }}</p>
<p>Last name: {{ $player->last_name }}</p>
<p>Email: {{ $player->email }}</p>
<p>Team: <a href="/teams/{{$player->team->id}}">{{ $player->team->name }}</a> </p>

@endsection


