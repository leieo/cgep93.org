@extends('backoffice.layout')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('admin.report.index') }}">Reports</a>
    </li>
    <li class="breadcrumb-item active">{{ $report->title }}</li>
@endsection

@section('content')
    <h1>{{ $report->title }}</h1>
    <p>{!! nl2br($report->content) !!}</p>
@endsection