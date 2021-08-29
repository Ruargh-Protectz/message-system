@extends('layouts.app')

@section('title', 'Create message')

@section('content')
    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <div><input type="text" name="user_handle"></div>
        <div><textarea name="content"></textarea></div>
        <div><input type="submit" value="Create"></div>
    </form>
@endsection
