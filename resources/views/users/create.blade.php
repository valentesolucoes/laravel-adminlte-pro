@extends('layouts.default')

@section('page-title', 'Adicionar Usuário')

@php
    $breadcrumbs = [['label' => 'Home', 'route' => ''], ['label' => 'Usuários', 'route' => '']];
@endphp

@section('content')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb3 text-end">
            <button type="submit" class="btn btn-primary"><i class="bi bi-floppy-fill"></i> Adicionar</button>
            <button onclick="history.back()" class="btn btn-danger"><i class="bi bi-skip-backward-fill"></i> Voltar</button>

        </div>
    </form>
@endsection
