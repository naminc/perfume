<!-- In resources/views/profile.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Welcome, {{ Auth::user()->username }}!</h1>
    <p>This is your profile page.</p>
@endsection
