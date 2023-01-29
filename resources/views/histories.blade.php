@extends('layouts.simpleLayout')
@section('otherLinks')
    <link rel="stylesheet" href="{{asset('css/histories.css')}}"/>
@endsection
@section('content')
    <div class="histories">
        @forelse ($histories as $history)
        <div class="col-md-6 hystory">
            <div class="row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="hystory-header">
                  <span>Publié le <small class="field">{{$history->created_at}}</small></span>
                     <span>par: <small  class="field">{{$history->user->name}}</small></span>
                </div>
                <h5 class="mb-0 text-primary">{{$history->author}}</h5>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">{{substr($history->content,0,100)}}</p>
            </div>
            <div class="history-footer">
                <a href="{{route('histories.show',$history->id)}}" class="stretched-link">Lire plus...</a>
            </div>
          </div>
          <hr>
        @empty
          <div text-align="center" class="emptyDiv">
            Aucune histoire disponible pour le moment...
          </div>
        @endforelse
    </div>
@endsection
