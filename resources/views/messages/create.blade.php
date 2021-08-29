@extends('layouts.app')

@section('title', 'Create message')

@section('content')
    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <div><input type="text" name="user_handle"></div>
        @error('user_handle')
            <div>{{ $message }}</div>
        @enderror
        <div><textarea name="content"></textarea></div>
        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div><input type="submit" value="Create"></div>
    </form>
@endsection
