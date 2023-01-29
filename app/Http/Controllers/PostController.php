<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public  function __construct(){
        $this->middleware('auth')->only(['create', 'store', 'edit', 'update', 'destroy']);
        $this->middleware('password.confirm')->only(['update', 'destroy']);
     }

    public function index()
    {
        return view('posts', ['posts'=>Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'content' => 'required|min:500',
            'postImage' => 'required',
        ]);

        $filename = time().'.'.$request->postImage->extension();
        $path = $request->file('postImage')->storeAs(
            'postsImages',
            $filename,
            'public'
        );


        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category,
            'user_id' => Auth::id(),
        ]);

        $image = new Image();
        $image->url = $path;
        $post->image()->save($image);
        dd('crée');

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('post', ['post'=>Post::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('modifyPost', ['post'=> Post::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'content' => 'required|min:100',
            'category' => 'required',
        ]);
        $post = Post::findOrFail($id);

        if($request->hasFile('postImage')){
            $filename = time() . '.' . $request->postImage->extension();
            Storage::delete($post->image->url);
            $post->image()->update([
                'url' => $request->postImage->storeAs(
                    'postsImages',
                    $filename,
                    'public'
                ),
            ]);
        }

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category
        ]);

        return redirect()->route('myContents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        Storage::delete($post->image->url);
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function like($id){
        $post = Post::findOrFail($id);
        $post->update([
            'likes' => $post->likes+1
        ]);
        $post = Post::findOrFail($id);
        return $post->likes;
    }

    public function dislike($id){
        $post = Post::findOrFail($id);
        $post->update([
            'likes' => $post->likes-1
        ]);
        $post = Post::findOrFail($id);
        return $post->likes;
    }
}
