@extends('layouts.developperModeLayout')
@section('otherLinks')
    <link rel="stylesheet" href="{{asset('css/postPost.css')}}"/>
@endsection
@section('content')
<div class="postsMainContent post">
    <h1>Poster un article</h1>
    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
      <div class="input-group mb-3">
        <span class="input-group-text" id="title">Titre de l'article</span>
        <input type="text" name="title" class="form-control" placeholder="Titre" id="title" aria-label="Recipient's username" aria-describedby="title">
      </div>

      <label for="category">Catégorie</label>
      <select class="form-select" id="category" name="category" aria-label="Default select example">
        <option selected value="1">Informatique</option>
        <option value="2">World</option>
        <option value="3">Intelligence artificielle</option>
        <option value="4">Science</option>
        <option value="5">Littérature</option>
        <option value="6">Art</option>
        <option value="7">Musique/Cinéma</option>
        <option value="8">Sport</option>
      </select>

      <div class="mb-3">
        <label for="content" class="form-label">Contenu</label>
        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
      </div>

      <div class="mb-3 post-image-div">
        <label for="post-image" id="post-image-button" class="form-label"><a href="">Modifier l'image</a></label>
        <input type="file" class="form-control" id="postImage" name="postImage" value="{{asset('img/img.jpeg')}}" hidden/>
        <img id='img' src="{{asset('img/img.jpeg')}}" alt="Image de l'article" width="600" height="400">
      </div>

      @if ($errors->any())
          @foreach ($errors as $error)
              <div class="error">{{$error}}</div>
          @endforeach
      @endif

      <div class="col-12">
        <button class="btn btn-dark post-submit" name="submit" type="submit">Publier</button>
      </div>

    </form>
</div>
@endsection
