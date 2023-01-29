@extends('layouts.developperModeLayout')
@section('content')
<div class="postsMainContent">
<div class="main-header">
    <h1>Mode développeur</h1>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates aliquid similique pariatur quis laboriosam illum amet quam hic, vero fugiat voluptatem iste modi? Natus dolore ex dolorem. Asperiores nisi similique dolorum doloribus quo, debitis facilis delectus quis nam, earum ullam temporibus ab deleniti hic quia? Quidem, nobis fuga iusto facere eaque quibusdam, distinctio sunt error temporibus soluta aut. Odit!
    </p>
  </div>
  <div class="main-body">
    <div class="main-card">
      <h3>Poster un article</h3>
      <div class="main-card-field">
        <img src="{{asset('img/post.jpeg')}}" alt="Image de post-article" width="300" height="200">
        <div>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint veniam ratione ab, at minima natus tenetur iste voluptates molestias vero!
          <div><a href="postPost.html">Poster</a></div>
        </div>
      </div>
    </div>

    <div class="main-card">
      <h3>Poster une citation ou conseil</h3>
      <div class="main-card-field">
        <img src="{{asset('img/citation.jpeg')}}" alt="Image de post-citation" width="300" height="200">
        <div>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint veniam ratione ab, at minima natus tenetur iste voluptates molestias vero!
          <div><a href="postCitation.html">Poster</a></div>
        </div>
      </div>
    </div>

    <div class="main-card">
      <h3>Poster une histoire drôle</h3>
      <div class="main-card-field">
        <img src="{{asset('img/history.jpeg')}}" alt="Image de post-hytory" width="300" height="200">
        <div>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint veniam ratione ab, at minima natus tenetur iste voluptates molestias vero!
          <div><a href="postHistory.html">Poster</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection