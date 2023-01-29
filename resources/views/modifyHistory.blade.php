@extends('layouts.developperModeLayout')
@section('otherLinks')
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
@endsection
@section('content')
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark sidebar">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          <span class="fs-4 sidebar-title">Mode développeur</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li>
            <a href="dashboard.html" class="nav-link">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
              Tableau de bord
            </a>
          <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                Publier du contenu
              </button>
            <div class="collapse" id="dashboard-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="postPost.html" class="d-inline-flex text-decoration-none rounded">Poster un article</a></li>
                <li><a href="postCitation.html" class="d-inline-flex  text-decoration-none rounded">Poster une citation ou conseil</a></li>
                <li><a href="postHistory.html" class="d-inline-flex  text-decoration-none rounded">Poster une histoire drôle</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="myContents.html" class="nav-link isActive">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
              Mes contenus
            </a>
          </li>
          <li>
            <a href="quittDevelopperMode.php" class="nav-link">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              Quitter le mode développeur
            </a>
          </li>
        </ul>
  </div>
  </div>

    <div class="postsMainContent post">
            <h1>Modifier une histoire</h1>
            <form action="{{route('histories.update', $history->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Titre de l'article</span>
                <input type="text" class="form-control" name="title" id="title" placeholder="Titre" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$history->title}}">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Auteur</span>
                <input type="text" class="form-control" name="author" placeholder="Author" aria-label="Recipient's username" aria-describedby="basic-addon2" value="Contes de France">
              </div>

              <div class="mb-3">
                <label for="content" class="form-label">Contenu</label>
                <textarea class="form-control" id="content" name="content" rows="3">
                {{$history->content}}
              </textarea>
              </div>

              <div class="mb-3 post-image-div">
                <label for="post-image" id="post-image-button" class="form-label"><a href="">Modifier l'image</a></label>
                <input type="file" class="form-control" id="post-image" name="post-image" hidden/>
                <img src="{{Storage::url(asset($history->image->url))}}" id="img" alt="Image de l'article" width="600" height="400">
              </div>

              <div class="col-12">
                <button class="btn btn-dark post-submit" name="submit" type="submit">Modifier</button>
              </div>

            </form>
    </div>
@endsection
