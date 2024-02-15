@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto">
      <p class="lead">{{ $viewData["description"] }}</p>
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead">{{ $viewData["phone"] }}</p>
      <p class="lead">{{ $viewData["email"] }}</p>
      <p class="lead">{{ $viewData["address"] }}</p>
    </div>
  </div>
</div>
@endsection