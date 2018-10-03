<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class PostController extends Controller
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
        $posts = Post::with('category')->with('favorites')->orderBy('id', 'desc')->paginate(5);

        foreach($posts as $post)
        {
            if(in_array(Auth::user()->id,$post->getFavoriteListAttribute()))
                $post->fav = true;
            else
                $post->fav = false;
        }

        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        return view('posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'author' => Auth::user()->name,
            'user_id' => Auth::user()->id,
            'category_id' => $request->input('category')
        ]);

        return redirect()->route('postIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $hisComments = $post->comments;

        if(in_array(Auth::user()->id,$post->getFavoriteListAttribute()))
                $post->fav = true;
            else
                $post->fav = false;

        return view('posts.show',compact('post','hisComments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::pluck('name','id');
        $post = Post::findOrFail($id);
        $hisCategory = $post->category;
        return view('posts.edit', compact('post','categories','hisCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category_id' => $request->input('category')
        ]);

        return redirect()->route('postIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return $this->index();
    }

    public function myfavorites()
    {
        $favorites = Auth::user()->favorites()->pluck('post_id')->all();
        $posts = Post::whereIn('id',$favorites)->orderBy('id', 'desc')->paginate(5);

        foreach($posts as $post)
        {
            if(in_array(Auth::user()->id,$post->getFavoriteListAttribute()))
                $post->fav = true;
            else
                $post->fav = false;
        }

        return view('posts.index',compact('posts')); 
    }

    public function myPosts()
    {
        $posts = Post::with('category')->with('favorites')->where('user_id',Auth::user()->id)->orderBy('id', 'desc')->paginate(5);

        foreach($posts as $post)
        {
            if(in_array(Auth::user()->id,$post->getFavoriteListAttribute()))
                $post->fav = true;
            else
                $post->fav = false;
        }

        return view('posts.index',compact('posts'));
    }
}
