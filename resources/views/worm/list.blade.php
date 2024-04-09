@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
  @foreach ($viewData["worms"] as $worm)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <div class="card-body">
        <h4>ID: {{ $worm->getId() }}</h4>
        <h4>Name: {{ $worm->getName() }}</h4>
        <h4>Type: {{ $worm->getType() }}</h4>
        <h4>Velocity: {{ $worm->getVelocity() }}</h4>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection