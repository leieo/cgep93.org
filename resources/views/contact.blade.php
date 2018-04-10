@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Formulaire de contact !</div>
                    <div class="card-body">
                        {!! Form::open(['action' => 'ContactController@sendMail','method' => 'get']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Votre Nom') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Votre E-mail') !!}
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('msg', 'Votre Message') !!}
                            {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection