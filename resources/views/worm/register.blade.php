@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">

    <div class="card-header"></div>
        <div class="card-body">
        @if($errors->any())
        <ul id="errors" class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form method="POST" action="{{ route('worm.store') }}">
            @csrf
            <input type="text" class="form-control mb-2" placeholder="Enter name" name="name" value="{{ old('name') }}" />
            <select class="form-control mb-2" name="type">
                <option value="sandworm">sandworm</option>
                <option value="spaceworm">spaceworm</option>
            </select>
            <input type="number" step="any" class="form-control mb-2" placeholder="Enter velocity (km/h)" name="velocity" value="{{ old('velocity') }}" />
            <input type="submit" class="btn btn-primary" value="Send" />
        </form>
        </div>
    </div>
</div>
@endsection


