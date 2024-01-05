<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChatRequest;
use App\Http\Requests\UpdateChatRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the Chat.
     */
    public function index(Request $request)
    {
        return view('chats.index');
    }

    /**
     * Show the form for creating a new Chat.
     */
    public function create()
    {
        $chat = new Chat();
        $chat->loadDefaultValues();
        return view('chats.create', compact('chat'));
    }

    /**
     * Store a newly created Chat in storage.
     */
    public function store(CreateChatRequest $request)
    {
        $input = $request->all();

        /** @var Chat $chat */
        $chat = Chat::create($input);
        if($chat){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('chats.index'));
    }

    /**
     * Display the specified Chat.
     */
    public function show($id)
    {
        /** @var Chat $chat */
        $chat = Chat::find($id);

        if (empty($chat)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('chats.index'));
        }

        return view('chats.show')->with('chat', $chat);
    }

    /**
     * Show the form for editing the specified Chat.
     */
    public function edit($id)
    {
        /** @var Chat $chat */
        $chat = Chat::find($id);

        if (empty($chat)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('chats.index'));
        }

        return view('chats.edit')->with('chat', $chat);
    }

    /**
     * Update the specified Chat in storage.
     */
    public function update($id, UpdateChatRequest $request)
    {
        /** @var Chat $chat */
        $chat = Chat::find($id);

        if (empty($chat)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('chats.index'));
        }

        $chat->fill($request->all());
        if($chat->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('chats.index'));
    }

    /**
     * Remove the specified Chat from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Chat $chat */
        $chat = Chat::find($id);

        if (empty($chat)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('chats.index'));
        }

        if($chat->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('chats.index'));
    }
}
