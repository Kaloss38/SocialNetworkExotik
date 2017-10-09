<?php

namespace App\Http\Controllers;
use Auth; 
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
use App\ParticipeChat;
use App\Friend;
use App\Chatroom;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chats = Auth::user()->participeChats;

        return view('pages.messagerie', ['chats'=>$chats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $friends1 = Friend::where('user_id_1', Auth::id())
        ->get();

        $friends2 = Friend::where('user_id_2', Auth::id())
        ->get();

        return view('pages.messagerie_create', ['friends1'=>$friends1], ['friends2'=>$friends2]);





        
    }

    /**  
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $message = new Message;
        $message->Content = $request->Content;
        $message->user_ID = Auth::id();
        $message->chatroom_ID = $id;  
        $message->save();

        return redirect('/messagerie/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $name = Chatroom::where('id', $id)
            ->get();

        $messages = Message::where('chatroom_ID', $id)
            ->orderBy('dateTime', 'asc')
            ->get();

        return view('pages.messagerie_prive', ['messages'=>$messages], ['names'=>$name]); 
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



    
    public function storeChatroom(Request $request, $id)
    {
        $chatroom = new Chatroom;
        $chatroom->user_ID = $id; 
        $chatroom->Name = $request->title;
        $chatroom->save();

        $participe = new ParticipeChat;
        $participe->user_ID = Auth::user()->id;
        $participe->chatroom_ID = $chatroom->id;
        $participe->save();

        $participe2 = new ParticipeChat;
        $participe2->user_ID = $request->user_id;
        $participe2->chatroom_ID = $chatroom->id;
        $participe2->save();

        $message = new Message;
        $message->Content = "Envoyer votre premier message";
        $message->user_ID = Auth::id();
        $message->chatroom_ID = $chatroom->id;
        $message->save();
        
        return redirect('/messagerie/'.$chatroom->id);
    }
}