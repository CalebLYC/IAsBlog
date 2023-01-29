@extends('layouts.simpleLayout')
@section('otherLinks')
    <link rel="stylesheet" href="{{asset('css/post.css')}}"/>
@endsection
@section('content')
    <div class="post">
      <h2>{{$post->title}}</h2>
      <div class="post-image">
        <img src="{{Storage::url(asset($post->image->url))}}" alt="Image de l'article" width="100%" height="600px"/>
      </div>
      <div class="post-header">
        <span>Publié le <small class="field">{{{$post->created_at}}}</small></span>
        <span>Auteur: <small  class="field">{{$post->user->name}}</small></span>
        <span onclick="likePost(this, {{$post->id}})"><i class="bi bi-heart like-icon"></i>  <small class="field">{{$post->likes}}</small></span>
         <a href="#comment"><i class="bi bi-chat-left-text"></i></a>
      </div>
      <div class="post-content">{{$post->content}}</div>
      <div class="post-footer">
        <div class="post-footer-first">
          <h3 id="comment">Laisser un commentaire</h3>
          <form action="" method="post">
            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
            <input type="submit" name="submit" id="submit" value="Poster">
          </form>
        </div>
        <div class="post-footer-second">
          <h3>Commentaires</h3>
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
                <span>Publié le <small class="field">11/06/2022</small>
              </div>
              <div class="comment-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas consequatur odio reiciendis quibusdam cum provident repudiandae odit porro quam eius.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
