@extends('layouts.master')
@section('title', 'Statistiques')
@section('content')
    <div class="container" style="margin-top: 5%;">
        <div class="row justify-content-center">
            <div class="col-md-6 border border-light p-5">
                @if(Auth::user()->avatar != null)
                <img src="{{url(Auth::user()->avatar)}}" style="max-height: 400px; max-width: 400px;">
                    <br/>
                @endif
                <span class="font-weight-bold">{{$user->name}}</span>
                <hr/>
                <span class="font-weight-bold">Statistiques</span><br/>
                Nombre de séries regardés : {{count($series)}}<br/>
                Nombre d'épisodes regardés : {{count($seens)}}<br/>
                Minutes totales regardées : {{$seens->sum('duree')}} minutes<br/>
                Nombre d'avis postés : {{$comments->count('id')}}<br/>
            </div>
        </div>
    </div>

@endsection
