@extends('layouts.master')
@section('title', 'Accueil')
@section('content')
    <div style="width: 100%">
        <h1 style="text-align: center">Les mieux notées</h1>
        <div class="tousSeries">
            @if(!empty($bests))
                @foreach($bests as $best)
                    <div class="card" style="display: inline-block;">
                        <img src="{{asset($best->urlImage)}}" class="card-img-top">
                        <div class="card-body" style="text-align: center">
                            <h5 class="card-title">{{$best->nom}}</h5>
                            <p class="card-text">{{$best->langue}}</p>
                            <p>{{$best->note}}/10</p>
                            <a href="{{route('serie.show', $best->id)}}" class="btn btn-white font-weight-bold"><img class="imgButton" src="{{asset('img/logo/buttonRec.png')}}"></a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <h1 style="text-align: center">A découvrir !</h1>
        <div  class="tousSeries">
            @if(!empty($aleatoires))
                @foreach($aleatoires as $aleatoire)
                    <div class="card">
                        <img src="{{asset($aleatoire->urlImage)}}" class="card-img-top">
                        <div class="card-body" style="text-align: center">
                            <h5 class="card-title">{{$aleatoire->nom}}</h5>
                            <p class="card-text">{{$aleatoire->langue}}</p>
                            <a href="{{route('serie.show', $aleatoire->id)}}" class="btn btn-white font-weight-bold"><img class="imgButton" src="{{asset('img/logo/buttonRec.png')}}"></a>
                        </div>
                    </div>
                @endforeach
        @endif
        </div>
    </div>
@endsection
