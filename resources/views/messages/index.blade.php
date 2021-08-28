@extends('layouts.app')

@section('page-title', 'Messages')

@section('content')
@forelse ($messages as $key => $message)
    @include('messages.partials.message')
@empty
No messages.
@endforelse

@endsection

