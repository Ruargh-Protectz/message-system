<div style="width:100%; border:1px solid; border-radius:5px; margin-top:15px;" >
    <div class="object-right" style="text-align:right; padding:3px 15px;">
        <h3>{{ $message['user_handle'] }}</h3>
        <p>{{ $message['content'] }}</p>
    </div>
</div>
@extends('layouts.partials.message-actions')
<footer>
    @if(session('status'))
        <div style="width:100%; position:fixed; bottom:0%; height:40px; background:red; color:white;">
            {{ session('status') }}
        </div>
    @endif
</footer>
