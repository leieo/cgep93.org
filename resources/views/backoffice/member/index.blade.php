@extends('backoffice.layout')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Membres</li>
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Activé le ...</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ \App\User::ROLES[$user->role] }}</td>
                    <td>{{ $user->activated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection