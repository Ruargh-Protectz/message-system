
<div>
    <a href="/messages/{{ optional($message ?? null)->id }}/edit">Edit</a>
    <form action="{{ route('messages.destroy', ['message' => optional($message ?? null)->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <div>
            <input type="submit" value="Delete" />
        </div>
    </form>
</div>
