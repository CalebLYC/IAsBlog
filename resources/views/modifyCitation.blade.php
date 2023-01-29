@extends('layouts.developperModeLayout')
@section('otherLinks')
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
@endsection
@section('content')
<div class="postsMainContent post post-citation">
    <h1>Modifier une citation ou conseil</h1>
    <form action="{{route('citations.update', $citation->id)}}" method="post">
        @method('PUT')
        @csrf
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Auteur</span>
        <input type="text" name="author" id="author" class="form-control" value="{{$citation->author}}" placeholder="Author" aria-label="Recipient's username" aria-describedby="basic-addon2">
      </div>

      <label for="category">Catégorie</label>
      <select class="form-select" id="category" name="category" aria-label="Default select example">
        <option selected value="{{$citation->category->id}}">{{$citation->category->libelle}}</option>
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
          {{$citation->content}}
        </textarea>
      </div>

      <div class="col-12">
        <button class="btn btn-dark post-submit" name="submit" type="submit">Modifier</button>
      </div>

    </form>
</div>
@endsection
