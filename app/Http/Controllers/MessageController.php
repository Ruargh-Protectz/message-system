<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessage;
use App\Models\ChatMessage;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // private $messages = [
    //     1 => [
    //         'user_handle' => 'User1',
    //         'content' => 'Message 1 from User 1',
    //         'is_new' => true,
    //     ],
    //     2 => [
    //         'user_handle' => 'User2',
    //         'content' => 'Message 1 from User 2',
    //         'is_new' => true,
    //     ],
    //     3 => [
    //         'user_handle' => 'User1',
    //         'content' => 'Message 2 from User 1',
    //         'is_new' => true,
    //     ]
    // ];

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
        // dd($request);
        // $request->validate([
        //     'user_handle' => 'bail|required|min:5|max:32',
        //     'content' => 'required|min:10'
        // ]);
        $validated = $request->validated();

        // $message = new ChatMessage();
        // // $message->user_handle = $request->input('user_handle');
        // // $message->content = $request->input('content');
        // $message->user_handle = $validated['user_handle'];
        // $message->content = $validated['content'];
        // $message->save();
        $newMessage = ChatMessage::create($validated);

        $request->session()->flash('status', 'The message was created!');

        return redirect()->route('messages.show', ['message' => $newMessage->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // abort_if(!isset($this->messages[$id]), 404);
        // return view('messages.show', ['message' => $this->messages[$id]]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
