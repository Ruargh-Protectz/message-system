<div class="">
    <label for="user_handle">User</label>

    @guest

        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="usr_handle" type="text" name="user_handle" value="Anonymous" readonly="readonly" ></div>

    @else

        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="usr_handle" type="text" name="user_handle" value="{{ Auth::user()->name }}" readonly="readonly" ></div>

    @endguest

@error('user_handle')
    <div>{{ $message }}</div>
@enderror
<div>
    <label for="content">Message Content</label>
    <textarea class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
    id="content" name="content">{{ old('content', optional($message ?? null)->content) }}<</textarea></div>
@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


