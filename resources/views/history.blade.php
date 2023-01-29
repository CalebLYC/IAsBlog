@extends('layouts.simpleLayout')
@section('otherLinks')
    <link rel="stylesheet" href="{{asset('css/history.css')}}"/>
@endsection
@section('content')
<div class="history">
    <h2>{{$history->title}}</h2>
    <div class="history-image">
      <img src="{{Storage::url(asset($history->image->url))}}" alt="Image de l'article" width="100%" height="600px"/>
    </div>
    <div class="history-header">
      <span>Publié le <small class="field">{{$history->created_at}}</small> par <small class="field">{{$history->user->name}}</small></span>
        <span>Auteur: <small  class="field">{{$history->author}}</small></span>
        <span onclick="likeHistory(this, {{$history->id}})"><i class="bi bi-heart like-icon"></i>  <small class="field">{{$history->likes}}</small></span>
        <a href="#comment"><i class="bi bi-chat-left-text"></i></a>
    </div>
    <div class="history-content">
      {{$history->content}}
    </div>
    <div class="history-footer">
      <div class="history-footer-first">
        <h3>Laisser un commentaire</h3>
        <form action="" method="history">
          <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
          <input type="submit" name="submit" id="submit" value="Poster">
        </form>
      </div>
      <div class="history-footer-second">
        <h3 id="comment">Commentaires</h3>
        <div class="comments">
          <div class="comment">
            <div class="comment-header">
              <span>Publié le <small class="field">17/06/2022</small></span>
            </div>
            <div class="comment-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas consequatur odio reiciendis quibusdam cum provident repudiandae odit porro quam eius.
            </div>
          </div>
          <div class="comment">
            <div class="comment-header">
              <span>Publié le <small class="field">14/06/2022</small></span>
            </div>
            <div class="comment-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas consequatur odio reiciendis quibusdam cum provident repudiandae odit porro quam eius.
            </div>
          </div>
          <div class="comment">
            <div class="comment-header">
              <span>Publié le <small class="field">14/06/2022</small></span>
            </div>
            <div class="comment-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas consequatur odio reiciendis quibusdam cum provident repudiandae odit porro quam eius.
            </div>
          </div>
          <div class="comment">
            <div class="comment-header">
              <span>Publié le <small class="field">11/06/2022</small></span>
            </div>
            <div class="comment-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas consequatur odio reiciendis quibusdam cum provident repudiandae odit porro quam eius.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
