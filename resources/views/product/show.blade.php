@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          @if ($viewData['product']['price'] > 100)
            <span class="text-danger">
               {{ $viewData["product"]["name"] }}
            </span>
          @else
            <span>
               {{ $viewData["product"]["name"] }}
            </span>
          @endif
          
        </h5>
        <p class="card-text">{{ $viewData["product"]["description"] }}</p>
        <span>$</span>
        <span class="card-text">{{ $viewData["product"]["price"] }}</span> 
      </div>
    </div>
  </div>
</div>
@endsection