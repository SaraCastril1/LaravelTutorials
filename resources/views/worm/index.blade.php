@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
  <div class="parcial1 activity1">
        
    <a class="nav-link active" href="{{ route('worm.register') }}">Register Worms</a>
    <a class="nav-link active" href="{{ route('worm.list') }}">List Worms</a>
    <a class="nav-link active" href="{{ route('worm.stadistics') }}">Stadistics</a>
  </div>
@endsection