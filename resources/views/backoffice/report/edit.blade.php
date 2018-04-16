@extends('backoffice.layout')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('admin.report.index') }}">Reports</a>
    </li>
    <li class="breadcrumb-item active">Edition {{ $report->title }}</li>
@endsection

@section('content')
    <form action="{{ route('admin.report.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">Titre</label>
            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $report->title }}" required autofocus>
        </div>
        <div class="form-group row">
            <label for="content" class="col-md-4 col-form-label text-md-right">Contenu</label>
            <textarea id="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" required>{{ $report->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
@endsection