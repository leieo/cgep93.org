@extends('layouts.app')

@section('content')
    <a href="/reports/create" class="btn btn-primary"> Ajouter des comptes-rendus</a>
    <h1 class="text-center">Voici les dernières Assemblés Générales:</h1>
    @if(count($reports)>0)
        @foreach($reports as $report)
        <div class="well jumbotron">
                <a href="/reports/{{$report->id}}/edit" class="btn btn-primary"> Modifier le compte-rendu</a>
                {!!Form::open(['action' => ['ReportsController@destroy',$report->id], 'method'=> 'post','class' => 'pull-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Supprimer le compte-rendu', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            <h3><a href="/reports/{{$report->id}}">{!!$report->title!!} </a></h3>
            <p>{!!$report->body!!}</p>
            <small> {{$report->created_at}} </small>
        </div>
        @endforeach
        {{$reports->links()}}
    @else
        <p> Aucune Assemblés Générales disponibles </p>
    @endif
@endsection