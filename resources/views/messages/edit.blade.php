@extends('layouts.app')

@section('title', 'Edit message')

@section('content')
    <form action="{{ route('messages.update', ['message' => $message->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('messages.partials.form')
        <div><input type="submit" value="Update"></div>
    </form>
@endsection
