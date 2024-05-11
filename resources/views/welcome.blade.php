@extends('partials.layout')
@section('title', 'Home')
@section('content')
    <h1 class="text-blue-500">Home! Hello {{ $name }}</h1>
    <button class="btn">Button</button>
@endsection
