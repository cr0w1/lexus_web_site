@extends('site.master.layout')

@section('content')
<div class="container content_registration d-flex justify-content-center align-items-center">
    <div class="row">

      <div class="main_registration ">

        <h3>Cadastro</h3>

        <form role="form" id="registration" action="{{ route('site.saveUser') }}" method="POST">
          @csrf
            <div class="form-group">
                <label for="inputUsernameEmail">Email</label>
                <input type="text" name="email" class="form-control" id="inputUsernameEmail">
                <div class="invalid-feedback">
                    Campo obrigatório.
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputPassword">Senha</label>
                    <input type="password" name="password" class="form-control" id="inputPassword">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputUsernameEmail">Telefone</label>
                    <input type="text" name="telefone" class="form-control" id="inputUsernameEmail">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <button class="btn btn btn-primary col-md-6">
                    Enviar
                </button>
            </div>
            <div class="form-group d-flex justify-content-end">
                <h6 >Já tenho uma conta? <a href="{{ route('site.login') }}">Entrar</a></h6>
            </div>
        </form>

      </div>

    </div>
  </div>
@endsection
