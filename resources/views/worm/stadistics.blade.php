@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Worm Statistics</div>
        <div class="card-body">
            <p>Number of Sandworms: {{ $viewData['sandworm'] }}</p>
            <p>Number of Spaceworms: {{ $viewData['spaceworm'] }}</p>
        </div>
    </div>
</div>
@endsection
