@extends('layouts.default')

@section('page-title', 'Usuários')

@section('page-actions')
    <a href="{{ route('users.create') }}" class="btn btn-primary">Adicionar Usuário</a>
@endsection

@php
    $breadcrumbs = [['label' => 'Home', 'route' => ''], ['label' => 'Usuários', 'route' => '']];
@endphp
@section('content')
    @session('status')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endsession
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Criação</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                    <td>{{ $user->created_at->format('d/m/Y m:h') }}</td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i> Editar</a>
                            <button type="submti" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i> Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
