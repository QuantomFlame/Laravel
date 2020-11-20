@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h2>Welcome, {{ auth()->user()->first_name }}</h2>
@endsection
