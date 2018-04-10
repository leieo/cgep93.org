@extends('layouts.app')

@section('content')
    <h1 class="text-center">Modifier le compte-rendu:</h1>
    {!! Form::open(['action' => ['ReportsController@update', $report->id],'method' => 'post']) !!}
    <div class="form-group">
        {{Form::label('title','Titre de la dernière Assemblée Générale')}}
        {{Form::text('title',$report->title,['class'=> 'form-control','placeholder'=> 'Titre de la dernière Assemblée Générale'])}}
    </div>

    <div class="form-group">
            {{Form::label('body','Résumé de la dernière Assemblée Générale')}}
            {{Form::textarea('body',$report->body,['id' => 'article-ckeditor', 'class'=> 'form-control','placeholder'=> 'Résumé de la dernière Assemblée Générale'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Enregistrer', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection