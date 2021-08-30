<div style="width:100%; border:1px solid; border-radius:5px; margin-top:15px;" >
    <div class="object-right" style="text-align:right; padding:3px 15px;">
        <h3>{{ $message['user_handle'] }}</h3>
        <p>{{ $message['content'] }}</p>
    </div>
</div>
@extends('layouts.partials.message-actions')
@include('layouts.partials.footer')
