<?php

namespace App\Http\Controllers;

use App\Post;
use App\File;
use App\Category;
use App\Subcategory;
use App\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



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
        // paginate all posts by ID
        $posts = Post::with('category')->with('favorites')->orderBy('id', 'desc')->paginate(5);

        // for each post , check if it's one of the current user favorite
        foreach($posts as $post)
        {
            if(in_array(Auth::user()->id,$post->getFavoriteListAttribute()))
            $post->fav = true;
            else
            $post->fav = false;
        }
        
        $categories = Category::all();

        return view('posts.index',compact('posts', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Category::pluck('name','id');
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $encoded_subcats = json_encode(Subcategory::all());

        return view('posts.create',compact('categories', 'subcategories', 'encoded_subcats'));
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
            'category_id' => $request->input('category'),
        ]);
        $post->subcategories()->attach($request->input('subcats'));
        // $post->subcategories()->attach(1);

        // upload files into storage and store it in DB
        foreach ($request->file as $file) {
            $filename = $file->getClientOriginalName();
            $file->storeAs('uploads',$filename);
            Storage::put($filename, $file, 'public');

            $file = File::create([
            'post_id' => $post->id,
            'filename' => $filename
        ]);


        }

        return redirect()->route('postIndex');
    }

    public function downloadFile($filename)
    {
        $pathToFile= storage_path() . '/app/public/uploads/' . $filename;

        return response()->download($pathToFile);
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
        $hisFiles = $post->files;

        // for each post , check if it's one of the current user favorite
        if(in_array(Auth::user()->id,$post->getFavoriteListAttribute()))
                $post->fav = true;
            else
                $post->fav = false;

        return view('posts.show',compact('post','hisComments','hisFiles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $categories = Category::pluck('name','id');
        $categories = Category::all();
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
        return redirect()->route('postIndex');
    }

    public function myfavorites()
    {
        $categories = Category::all();

        // get all current user favorite (from associative table)
        $favorites = Auth::user()->favorites()->pluck('post_id')->all();

        // get all favorite posts from current user
        $posts = Post::whereIn('id',$favorites)->orderBy('id', 'desc')->paginate(5);

        // for each post , check if it's one of the current user favorite
        foreach($posts as $post)
        {
            if(in_array(Auth::user()->id,$post->getFavoriteListAttribute()))
                $post->fav = true;
            else
                $post->fav = false;
        }

        return view('posts.index',compact('posts', 'categories')); 
    }

    public function myPosts()
    {
        // get all posts written by current user
        $posts = Post::with('category')->with('favorites')->where('user_id',Auth::user()->id)->orderBy('id', 'desc')->paginate(5);

        // for each post , check if it's one of the current user favorite
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
