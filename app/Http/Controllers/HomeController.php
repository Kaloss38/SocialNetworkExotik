<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postModel;
use App\Alb_photos;
use App\CommentModel;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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


        $posts = postModel::where('userID', Auth::id())
        ->orderBy('date', 'desc')
        ->get();


        return view('pages.index-online', ['posts'=>$posts]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new postModel;
        $post->userID = Auth::id(); //Recupère l'id de la table post
        $post->status=0;
        $post->title = $request->titre;
        $post->content = $request->requete;
        $post->save();

        return redirect('/home');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = postModel::find($id);
        return view('pages.modif_post', ['posts'=>$post]);
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
        $post = postModel::find($id);
        $post->title = $request->titre;
        $post->content = $request->requete;

        $post->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = postModel::find($id);
        $post->status=1;

        $post->save();

        return redirect('/home');
    }

    
    
    // COMMENT CONTROLLER*******************************************************************************************
    
    public function commentIndex()
    {
        $comment = CommentModel::all();


        return view('pages.index-online', ['comments'=>$comment]);
    }


    public function commentStore(Request $request)
    {
        $comment = new CommentModel;
        $comment->userID = Auth::id(); //Recupère l'id de la table post
        $comment->content = $request->commenter;
        $comment->postID = $request->postID;
        
        $comment->save();

        return redirect('/home');
    }

    public function commentShow($id)
    {
        $comment = CommentModel::find($id);
        return view('pages.modif_comment', ['comments'=>$comment]);
    }

    public function updateComment(Request $request, $id)
    {
        $comment = CommentModel::find($id);
        $comment->content = $request->modif_comment;

        $comment->save();
        return redirect('/home');
    }

    public function destroyComment($id)
    {
        $comment = CommentModel::find($id);
        $comment->delete();

        return redirect('/home');
    }
}