@extends('layouts.developperModeLayout')
@section('otherLinks')
    <link rel="stylesheet" href="{{asset('css/posts.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/citations.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/histories.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/myContents.css')}}"/>
@endsection
@section('content')

<div class="postsMainContent">
    @foreach ($myPosts as $post)
    <div class="col-md-6" id="{{$post->id}}">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2">{{$post->category->libelle}}</strong>
            <h3 class="mb-0">{{$post->title}}</h3>
            <div class="mb-1 text-muted">{{$post->created_at}}</div>
            <p class="mb-auto post-content">{{substr($post->content, 0, 100)}}.</p>
            <a href="{{route('posts.show', $post->id)}}">Continuer la lecture...</a>
            <span class="manage"><a href="{{route('posts.edit', $post->id)}}">Modifier </a>
                  <span class="deletePost" onclick="deletePost({{$post->id}})"> Supprimer</span></span>
          </div>
          <div class="col-auto d-none d-lg-block">
              <img src="{{asset('img/img2.jpeg')}}" alt="" width="100%" height="100%">
          </div>
        </div>
    </div>
    @endforeach

    <hr>

    @foreach ($myCitations as $citation)
    <div class="col-md-6 citation" id="{{$citation->id}}">
        <div class="row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="citation-header">
              <span>Publié le <small class="field">{{$citation->created_at}}    </small></span>
              <span onclick="likeCitation(this, {{$citation->id}})"><i class="bi bi-heart like-icon"></i>
              <small class="field">{{$citation->likes}}</small></span>
            </div>
            <strong class="d-inline-block mb-2">{{$citation->category->libelle}}</strong>
            <h5 class="mb-0">{{$citation->author}}</h5>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto citation-content">
              {{$citation->content}}
          </p>
          <span class="manage"><a href="{{route('citations.edit', $citation->id)}}">Modifier </a>
            <span class="deletePost" onclick="deleteCitation({{$citation->id}})"> Supprimer</span></span>
        </div>
      </div>
    @endforeach

      <hr>

      @foreach ($myHistories as $history)
      <div class="col-md-6 hystory" id="{{$history->id}}">
        <div class="row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="hystory-header">
              <span>Publié le <small class="field">{{$history->created_at}}</small></span>
            </div>
            <h5 class="mb-0">{{$citation->author}}</h5>
            <div class="mb-1 text-muted">Nov 12/Histoires drôle</div>
            <p class="card-text mb-auto hystory-content">
              {{substr($history->content, 0, 100)}}...
          </p>
        </div>
        <div class="history-footer">
          <div><a href="{{route('histories.show', $history->id)}}">Lire plus...</a></div>
          <span class="manage"><a href="{{route('histories.edit', $history->id)}}">Modifier </a>
            <span class="deletePost" onclick="deleteHistory({{$history->id}})"> Supprimer</span></span>
        </div>
      </div>
      @endforeach

      @if (count($myPosts) == 0 && count($myCitations) == 0 && count($myHistories) == 0)
        <div class="emptyDiv">
            Vous n'avez posté aucun contenu pour le moment...
        </div>
      @endif

  </div>
</div>
@endsection
