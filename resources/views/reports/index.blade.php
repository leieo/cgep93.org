@extends('layouts.app')

@section('content')

    @if(!Auth::guest())
        @if(Auth::user()->role == 2)
            <a href="/reports/create" class="btn btn-primary"> Ajouter des comptes-rendus</a>
        @endif
    @endif
    <h1 class="text-center"> Dernières Assemblées Générales:</h1>
    @if(count($reports)>0)
        @foreach($reports as $report)
        <div class="well jumbotron">
            @if(!Auth::guest())
                @if(Auth::user()->role == 2)
                    <a href="/reports/{{$report->id}}/edit" class="btn btn-primary"> Modifier le compte-rendu</a>
                    {!!Form::open(['action' => ['ReportsController@destroy',$report->id], 'method'=> 'post','class' => 'pull-right'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Supprimer le compte-rendu', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                @endif
            @endif
            <h3><a href="/reports/{{$report->id}}">{!!$report->title!!} </a></h3>
            <p>{!!$report->body!!}</p>
            <small> Créé le  {{$report->created_at}} </small>
        </div>
        @endforeach
        {{$reports->links()}}
    @else
        <p> Aucune Assemblée Générale disponible </p>
    @endif
@endsection