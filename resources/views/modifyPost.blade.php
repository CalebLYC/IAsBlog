@extends('layouts.developperModeLayout')
@section('otherLinks')
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
@endsection
@section('content')
    <div class="postsMainContent post">
            <h1>Modifier un article</h1>
            <form action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Titre de l'article</span>
                <input type="text" class="form-control" value="{{$post->title}}" placeholder="Titre" aria-label="Recipient's username" name="title" id="title" aria-describedby="basic-addon2">
              </div>

              <label for="category">Catégorie</label>
                <select class="form-select" id="category" name="category" aria-label="Default select example">
                    <option selected value="{{$post->category->id}}">{{$post->category->libelle}}</option>
                  <option value="1">Informatique</option>
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
                <textarea class="form-control" id="content" name="content" rows="3">
                  {{$post->content}}
                </textarea>
              </div>

              <div class="mb-3 post-image-div">
                <label for="postImage" id="post-image-button" class="form-label"><a href="">Modifier l'image</a></label>
                <input type="file" class="form-control" id="postImage" name="postImage" hidden/>
                <img src="{{Storage::url(asset($post->image->url))}}" alt="Image de l'article" width="600" height="400px"/>
            </div>

              <div class="col-12">
                <button class="btn btn-dark post-submit" name="submit" type="submit">Modifier</button>
              </div>

            </form>
    </div>
@endsection
