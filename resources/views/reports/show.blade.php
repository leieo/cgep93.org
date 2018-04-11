@extends('layouts.app')

@section('content')
    <a href="/reports" class="btn btn-primary"> Retour aux comptes-rendus</a>
    <h1 class="text-center">{!!$report->title!!}</h1>
    <div>
        {!!$report->body!!} <br>
        <small> créé le {{$report->created_at}} </small>
    </div>
@endsection