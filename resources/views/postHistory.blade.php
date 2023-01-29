@extends('layouts.developperModeLayout')
@section('otherLinks')
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
@endsection
@section('content')
<div class="postsMainContent post">
    <h1>Poster une histoire</h1>
    <form action="{{route('histories.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Titre de l'article</span>
        <input type="text" class="form-control" name="title" placeholder="Titre" aria-label="Recipient's username" aria-describedby="basic-addon2">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Auteur</span>
        <input type="text" class="form-control" name="author" placeholder="Author" aria-label="Recipient's username" aria-describedby="basic-addon2">
      </div>

      <div class="mb-3">
        <label for="content" class="form-label">Contenu</label>
        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
      </div>

      <div class="mb-3 post-image-div">
        <label for="post-image" id="post-image-button" class="form-label"><a href="">Modifier l'image</a></label>
        <input type="file" class="form-control" id="postImage" name="postImage" hidden/>
        <img src="img.jpeg" id="img" alt="Image de l'article" width="600" height="400">
      </div>

      <div class="col-12">
        <button class="btn btn-dark post-submit" name="submit" type="submit">Publier</button>
      </div>

    </form>
</div>
@endsection
