
@if($message['is_new'])
    <div>A new message...</div>
@endif
<h1>{{ $message['user'] }}</h1>
<p>{{ $message['content'] }}</p>
<div>
<h4>Actions:</h4>
@extends('layouts.partials.message-actions')
</div>
