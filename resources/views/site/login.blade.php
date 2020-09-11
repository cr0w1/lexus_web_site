@extends('site.master.layout')

@section('content')
<div class="container content">
    <div class="row">

      <div class="main">
        <h3>Entrar</h3>
        <form role="form" id="login" action="{{ route('site.auth') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="inputUsernameEmail">Email</label>
                <input type="text" name="email" class="form-control" >
                <div class="invalid-feedback">
                    Campo obrigatório.
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword">Senha</label>
                <input type="password" name="password" class="form-control">
                <div class="invalid-feedback">
                    Campo obrigatório.
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <button class="btn btn btn-primary col-md-6">
                    Entrar
                </button>
            </div>
            <h6>Ainda não tenho uma conta? <a href="{{ route('site.registration') }}">cadastrar-se</a></h6>
        </form>

      </div>

    </div>
  </div>
@endsection
