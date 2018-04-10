@extends('layouts.app')

@section('content')
    <a href="/reports/create" class="btn btn-primary"> Ajouter les dernières Assemblés Générales </a>
    <h1 class="text-center">Voici les dernières Assemblés Générales:</h1>
    @if(count($reports)>0)
        @foreach($reports as $report)
        <div class="jumbotron">
                <a href="/reports/{{$report->id}}/edit" class="btn btn-primary"> Modifier le compte-rendu</a>
                <a href="/reports/create" class="btn btn-danger"> Supprimer le compte-rendu </a>
            <h3>{!!$report->title!!}</h3>
            <p>{!!$report->body!!}</p>
            <small> {{$report->created_at}} </small>
        </div>
        @endforeach
        {{$reports->links()}}
    @else
        <p> Aucune Assemblés Générales disponibles </p>
    @endif
@endsection