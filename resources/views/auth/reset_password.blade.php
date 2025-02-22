@extends('layouts.auth')
@section('body-class','register-page')
@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ route('login') }}"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body register-card-bacody">
                <p class="register-box-msg">Registrar um novo usuário</p>

                @session('status')
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $value }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endsession

                <form action="{{ route('password.update') }}" method="post">
                    @csrf

                    <input type="hidden" name="token" value="{{ request()->token }}" >
                    <div class="input-group mb-3">
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        <input readonly type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ request()->email }}" />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha" />
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmação de senha" />
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Redefinir Senha</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
