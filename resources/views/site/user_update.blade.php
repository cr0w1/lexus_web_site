@extends('site.master.layout')

@section('content')
<div class="container content_registration d-flex justify-content-center align-items-center">
    <div class="row">

      <div class="main_registration ">

        <h3>Atualizar dados</h3>

        <form role="form" action="{{ route('site.update') }}" method="POST">
          @csrf
            <input type="password" name="email" value="{{ $user->email }}" class="form-control" hidden>
            <div class="form-group">
                <label for="inputUsernameEmail">usuário</label>
                <input type="text" name="user" value="{{ $user->user }}" class="form-control" id="inputUsernameEmail">
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
                    <input type="text" name="telefone" value="{{ $user->telefone }}" class="form-control" id="inputUsernameEmail">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <button class="btn btn btn-primary col-md-6">
                    Salvar Alterações
                </button>
            </div>
        </form>

      </div>

    </div>
  </div>
@endsection
