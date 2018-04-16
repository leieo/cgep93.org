@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($reports as $report)
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>{{ $report->title }} - <a href="{{ route('report.show', [$report]) }}">Voir plus</a></h1>
                    <p>{{ $report->content }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
