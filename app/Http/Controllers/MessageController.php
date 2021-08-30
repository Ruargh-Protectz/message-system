<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessage;
use App\Models\ChatMessage;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('messages.index', ['messages' => ChatMessage::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessage $request)
    {
        $validated = $request->validated();
        $message = ChatMessage::create($validated);
        $request->session()->flash('status', 'Message created.');
        return redirect()->route('messages.show', ['message' => $message->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('messages.show', ['message' => ChatMessage::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('messages.edit', ['message' => ChatMessage::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMessage $request, $id)
    {
        $message = ChatMessage::findOrFail($id); // check exist and retrieve or return 404
        $validated = $request->validated();
        $message->fill($validated);
        $message->save();

        $request->session()->flash('status', 'Message updated.');

        return redirect()->route('messages.show', ['message' => $message->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = ChatMessage::findOrFail($id);
        $post->delete();

        session()->flash('status', 'Message deleted.');

        return redirect()->route('messages.index');
    }
}
