<?php

namespace App\Http\Controllers;

use App\Models\Citation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitationController extends Controller
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
        return view('citations',['citations'=>Citation::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postCitation');
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
            'author' => 'required|min:3',
            'content' => 'required',
        ]);

        Citation::create([
            'author' => $request->author,
            'content' => $request->content,
            'user_id' => Auth::id(),
            'category_id' => $request->category,
            'likes' => 0,
        ]);

        return redirect()->route('citations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('citation', ['citation'=>Citation::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('modifyCitation', ['citation' => Citation::findOrFail($id)]);
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
            'author' => 'required|min:3',
            'content' => 'required',
            'category' => 'required'
        ]);

        $citation = Citation::findOrFail($id);
        $citation->update($request->all());

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
        $citation = Citation::findOrFail($id);
        $citation->delete();
        return redirect()->route('citations.index');
    }

    public function like($id){
        $citation = Citation::findOrFail($id);
        $citation->update([
            'likes' => $citation->likes+1
        ]);
        $citation = Citation::findOrFail($id);
        return $citation->likes;
    }

    public function dislike($id){
        $citation = Citation::findOrFail($id);
        $citation->update([
            'likes' => $citation->likes-1
        ]);
        $citation = Citation::findOrFail($id);
        return $citation->likes;
    }
}
