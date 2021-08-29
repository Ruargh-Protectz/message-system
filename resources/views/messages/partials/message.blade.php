@if($message['user'] == 'User1')
<div style="width:100%; border:1px solid; border-radius:5px; margin-top:15px;">
    <div class="object-right" style="text-align:left; padding:3px 15px;">
        <h3>{{ $key }}. {{ $message['user_handle'] }}</h3>
        <p>{{ $message['content'] }}</p>
    </div>
</div>

@else
<div style="width:100%; border:1px solid; border-radius:5px; margin-top:15px;" >
    <div class="object-right" style="text-align:right; padding:3px 15px;">
        <h3>{{  $key  }}. {{ $message['user_handle'] }}</h3>
        <p>{{ $message['content'] }}</p>
    </div>
</div>
@endif
@extends('layouts.partials.message-actions')
