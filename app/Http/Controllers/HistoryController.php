<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HistoryController extends Controller
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
        return view('histories',['histories'=>History::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postHistory');
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

        $filename = time() . '.' . $request->postImage->extension();
        $path = $request->file('postImage')->storeAs(
            'historiesHimages',
            $filename,
            'public'
        );

        $history = History::create([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'user_id' => Auth::id(),
            'likes' => 0,
        ]);

        $image = new Image();
        $image->url = $path;
        $history->image()->save($image);

        return redirect()->route('histories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('history',['history'=>History::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('modifyHistory', ['history' => History::findOrFail($id)]);
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
            'content' => 'required|min:500',
            //'postImage' => 'required',
        ]);
        $history = History::findOrFail($id);

        if($request->hasFile('postImage')){
            $filename = time().'.'.$request->postImage->extension();
            Storage::delete($history->image->url);
            $history->image()->update([
                'url' => $request->postImage()->storeAs(
                    'historiesImage',
                    $filename,
                    'public'
                ),
            ]);
        }

        $history->update([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
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
        $history = History::findOrFail($id);
        Storage::delete($history->image->url);
        $history->delete();
        return redirect()->route('histories.index');
    }

    public function like($id){
        $history = History::findOrFail($id);
        $history->update([
            'likes' => $history->likes+1
        ]);
        $history = History::findOrFail($id);
        return $history->likes;
    }

    public function dislike($id){
        $history = History::findOrFail($id);
        $history->update([
            'likes' => $history->likes-1
        ]);
        $history = History::findOrFail($id);
        return $history->likes;
    }
}
