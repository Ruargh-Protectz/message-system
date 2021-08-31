@extends('layouts.app')

@section('title', 'Create message')

@section('content')


    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_handle">User Handle</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="usr_handle" type="text" name="user_handle" value="{{ old('user_handle') }}"></div>
        @error('user_handle')
            <div>{{ $message }}</div>
        @enderror
        <div>
            <label for="content">Message Content</label>
            <textarea class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
            id="content" name="content">{{ old('content') }}</textarea></div>
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
