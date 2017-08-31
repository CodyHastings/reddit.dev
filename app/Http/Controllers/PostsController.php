<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Log;
use App\User;
use App\Models\Vote;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    // $this->middleware('auth');
    // }

    public function index(Request $request)
    {

        if($request->has('q')){
            $q = $request->q;
            $posts = Post::search($q);
        } else {
            $posts = Post::paginate(4);    
        }
        // $posts = Post::all();
        $data['posts'] = $posts;
        return view('posts.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, Post::$rules);
        $loggedInUser = \Auth::user();
        $title = $request->input('title');
        $content = $request->input('content');
        $url = $request->input('url');
        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->url = $url;
        $post->user_id = $loggedInUser->id;
        $post->save();

        Log::info($request->all());



        $request->session()->flash('successMessage', 'Your Post was a success!');

        return redirect()->action('PostsController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $data['post'] = $post;
        
        return view('posts.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {

        $post = Post::findOrFail($id);
        if (\Auth::id() == $post->user_id){
        $data['post'] = $post;
        return view('posts.edit', $data);
            
        }
        
        return redirect()->action('PostsController@index');
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
        $this->validate($request, Post::$rules);
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->user_id = \Auth::id();
        $post->save();
        $request->session()->flash('successMessage', 'Your Post was a successfully updated!');
        
        return \Redirect::action('PostsController@show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        $request->session()->flash('successMessage', 'Your Post was a successfully destroyed!');

        return \Redirect::action('PostsController@index');
    }

    public function userposts($id)
    {
        $posts = User::findOrFail($id)->posts;
        $user = User::findOrFail($id);
        $data['user'] = $user;
        $data['posts'] = $posts;
        return view('posts.userposts', $data);

    }

    public function upvote($id)
    {
        $post = Post::find($id);
        $user_id = \Auth::id();
        $post_id = Post::find($id)->id;
        $currVotes = Vote::where('post_id',$id)->where('user_id',$user_id)->get();
        if($currVotes->isEmpty()){
            $vote = new Vote;
            $vote->user_id = $user_id;
            $vote->post_id = $post_id;
            $vote->vote = 1;
            $vote->save();
        };

        $data['post'] = $post;
        return view('posts.show',$data);
    }

    public function downvote($id)
    {
        $post = Post::find($id);
        $user_id = \Auth::id();
        $post_id = Post::find($id)->id;
        $currVotes = Vote::where('post_id',$id)->where('user_id',$user_id)->get();
        if($currVotes->isEmpty()){
            $vote = new Vote;
            $vote->user_id = $user_id;
            $vote->post_id = $post_id;
            $vote->vote = -1;
            $vote->save();
        };

        $data['post'] = $post;
        return view('posts.show',$data);
    }










}
