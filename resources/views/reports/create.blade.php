@extends('layouts.app')

@section('content')
    <h1 class="text-center">Ajouter la dernière Assemblée Générale:</h1>
    {!! Form::open(['action' => 'ReportsController@store','method' => 'post']) !!}
    <div class="form-group">
        {{Form::label('title','Titre de la dernière Assemblée Générale')}}
        {{Form::text('title','',['class'=> 'form-control','placeholder'=> 'Titre de la dernière Assemblée Générale'])}}
    </div>

    <div class="form-group">
            {{Form::label('body','Résumé de la dernière Assemblée Générale')}}
            {{Form::textarea('title','',['class'=> 'form-control','placeholder'=> 'Résumé de la dernière Assemblée Générale'])}}
    </div>
    {{Form::submit('Enregistrer', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection