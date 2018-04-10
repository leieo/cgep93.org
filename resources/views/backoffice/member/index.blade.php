@extends('backoffice.layout')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Membres - {{ $status }}</li>
@endsection

@section('content')
    @if($type == \App\User::ROLE_WAITING || $type == \App\User::ROLE_EXCLUDE)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('admin.members.accept', $user) }}" class="btn btn-success">Accepter</a>
                            @if($type == \App\User::ROLE_WAITING)
                                <a href="{{ route('admin.members.exclude', $user) }}" class="btn btn-danger">Exclure</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Activé le</th>
                    <th scope="col">Activé par</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php /** @var \App\User $user */ ?>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->activated_at }}</td>
                        <td>{{ $user->activatedBy() }}</td>
                        <td><a href="{{ route('admin.members.exclude', $user) }}" class="btn btn-danger">Exclure</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection