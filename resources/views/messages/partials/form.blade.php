<div><input type="text" name="user_handle" value="{{ old('user_handle', optional($message ?? null)->user_handle) }}"></div>
@error('user_handle')
    <div>{{ $message }}</div>
@enderror
<div><textarea name="content">{{ old('content', optional($message ?? null)->content) }}</textarea></div>
@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
