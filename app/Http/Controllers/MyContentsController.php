<?php

namespace App\Http\Controllers;

use App\Models\Citation;
use App\Models\History;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyContentsController extends Controller
{
    public function index(){
        return view('myContents', [
            'myPosts' => Post::all()->where('user_id', '=', Auth::id()),
            'myHistories' => History::all()->where('user_id', '=', Auth::id()),
            'myCitations' => Citation::all()->where('user_id', '=', Auth::id()),
        ]);
    }
}
