@extends('layouts.layout')
@section('content')
<title>Dashboard</title>
<div class="card-header">
     @if (Auth::user()->level=='rayon')
        Dashboard Man Pol Antar
    @elseif(Auth::user()->level=='pj')
        Dashboard STAFF Pol Antar
    @else
        Dashboard STAFF MAN SDM
    @endif
</div>
<div class="card-body">
    <h1 align="center">{{ config('app.name') }}</h1>
</div>
@endsection