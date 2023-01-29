@extends('layouts.simpleLayout')
@section('otherLinks')
    <link rel="stylesheet" href="{{asset('css/citations.css')}}"/>
@endsection
@section('content')
<div class="citations">
    @forelse ($citations as $citation)
    <div class="col-md-6 citation">
        <div class="row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="citation-header">
              <span>Publié le <small class="field">{{$citation->created_at}}</small></span>
                 <span>par: <small  class="field">{{$citation->user->name}}</small></span>
                 <span onclick="likeCitation(this, {{$citation->id}})"><i class="bi bi-heart like-icon"></i>  <small class="field">{{$citation->likes}}</small></span>
                </div>
            <strong class="d-inline-block mb-2">{{$citation->category->libelle}}</strong>
            <h5 class="mb-0">{{$citation->author}}</h5>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto citation-content">
                {{$citation->content}}
          </p>
        </div>
      </div>
      <hr>
    @empty
        <div text-align="center" class="emptyDiv">
            Pas de citations disponible pour le moment...
        </div>
    @endforelse

</div>
@endsection
