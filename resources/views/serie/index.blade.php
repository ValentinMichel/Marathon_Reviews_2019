@extends('layouts.master')
@section('title', 'Les séries')
@section('content')
    <div class="row" style="margin-bottom: 2%;">
        <div style="margin-top: 1%;">
            <form action="{{route("serie")}}" method="get" class="form-inline my-2 my-lg-0">
                <div class="input-group">
                    <input type="search" name="search" class="form-control mr-sm-2" type="text" placeholder="Rechercher une série..." style="width: 200px;">
                    <span class="input-group-prepend">
                        <button type="submit" class="btnSearch">Rechercher</button> <!-- ajout d'une class btnSearch -->
                    </span>
                </div>
            </form>
        </div>
        <div style="margin-top: 1%; margin-left: 2%;">
            <form action="{{route("serie")}}" method="get" class="form-inline my-2 my-lg-0">
                <select class="custom-select" name="cat" style="width: 200px;">
                    <option value="All" @if($cat == 'All') selected @endif>Toutes les langues</option>
                    @foreach($langues as $langue)
                        <option value="{{$langue}}"  @if($cat == $langue) selected @endif>{{$langue}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btnSearch" style="margin-left: 20px;">OK</button>
            </form>
        </div>
    </div>

    <div class="tousSeries"> <!-- ajout d'une div pour toutes les series -->
    @if(!empty($series))
        @foreach($series as $serie)
            <div class="card" style="display: inline-block;">
                <img src="{{asset($serie->urlImage)}}" class="card-img-top">
                <div class="card-body" style="text-align: center">
                    <h5 class="card-title">{{$serie->nom}}</h5>
                    <p class="card-text">{{$serie->langue}}</p>
                    <a href="{{route('serie.show', $serie->id)}}" class="btn btn-primary">
                        <img class="imgButton" src="{{asset('img/logo/buttonRec.png')}}"> <!-- ajout de imgButton -->
                    </a>
                </div>
            </div>
        @endforeach
    @else
        <h3>Aucunes Série</h3>
    @endif
    </div>
    <!-- </div> -->
@endsection
