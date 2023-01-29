@extends('layouts.simpleLayout')
@section('otherLinks')
    <link rel="stylesheet" href="{{asset('css/posts.css')}}"/>
@endsection
@section('content')
      <div class="nav-scroller py-1 mb-2 postNav fixed-top">
          <nav class="nav d-flex justify-content-between">
            <a class="p-2" href="#">World</a>
            <a class="p-2" href="#">Informatique</a>
            <a class="p-2" href="#">Technologie</a>
            <a class="p-2" href="#">Design</a>
            <a class="p-2" href="#">Culture</a>
            <a class="p-2" href="#">Business</a>
            <a class="p-2" href="#">Politique</a>
            <a class="p-2" href="#">Littérature</a>
            <a class="p-2" href="#">Science</a>
            <a class="p-2" href="#">Sport</a>
          </nav>
        </div>

        <div class="postsCard">
            @foreach ($posts as $post)
                <div class="col-md-6 postCard">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2">{{$post->category->libelle}}</strong>
                            <h3 class="mb-0">{{$post->title}}</h3>
                            <div class="mb-1 text-muted">{{$post->created_at}}</div>
                            <p class="card-text mb-auto">{{substr($post->content,0,100)}}</p>
                            <a href="{{route('posts.show',$post->id)}}" class="stretched-link">Continuer la lecture</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        </div>
                    </div>
                </div>
              <hr>
            @endforeach
        </div>
@endsection
