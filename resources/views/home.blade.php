@extends('layouts.app')

@section('style')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <h4>TRENDING</h4>
    <x-covid-update/>
</div>
@endsection
