@extends('site.master.layout')

@section('content')
<div class="container content_new_car d-flex justify-content-center align-items-center">
    <div class="row">

      <div class="main_new_car ">

        <h3>Novo Carro</h3>

        <form  role="form" id="new_car" action="{{ route('site.saveNewCar') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputCity">Marca</label>
                    <input type="text" name="marca" class="form-control" id="inputCity" placeholder="Ex: Audi">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCity">Modelo</label>
                    <input type="text" name="modelo" class="form-control" id="inputCity" placeholder="Ex: Audi A3">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity">Ano</label>
                    <input type="text" name="ano" class="form-control" id="inputCity" placeholder="Ex:2020">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Cor</label>
                    <input type="text" name="cor" class="form-control" id="inputCity" placeholder="Ex: Vermelho">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCity">Portas</label>
                    <select id="inputState" name="portas" class="form-control">
                        <option value="" selected>Selecionar</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Cambio</label>
                    <select id="inputState" name="cambio" class="form-control">
                        <option value="" selected>Selecionar</option>
                        <option>Automatico</option>
                        <option>Manual</option>
                    </select>
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Velocidade Máxima</label>
                    <input type="text" name="velocidade" class="form-control" id="inputCity" placeholder="Ex: 250">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Kms Rodados</label>
                    <input type="text" name="KmRodados" class="form-control" id="inputCity" placeholder="Ex: 0">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Combustivel</label>
                    <select id="inputState" name="combustivel" class="form-control">
                        <option value="" selected>Selecionar</option>
                        <option value="Gasolina">Gasolina</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Álcool">Álcool</option>
                    </select>
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group col-md-5">
                    <label for="inputCity">Capacidade do motor</label>
                    <input type="text" name="motor" class="form-control" id="inputCity" placeholder="Ex: 3 L">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputCity">Valor do carro</label>
                    <input type="text" name="valor" class="form-control" id="inputCity" placeholder="Ex: 131.000">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="validationTextarea">Descrição</label>
                <textarea class="form-control" name="descricao" id="validationTextarea" placeholder="Ex: A segunda geração do modelo também..." ></textarea>
            </div>
            <div class="form-group">
                <label for="validationTextarea">Arquivos</label>
                <input type="file" class="form-control" name="images[]" id="validationTextarea" multiple></input>
            </div>
            <input type="text" name="user_id" class="form-control" id="inputCity" value="1">
            <div class="form-group d-flex justify-content-center">
                <button class="btn btn btn-primary col-md-6">
                    Enviar
                </button>
            </div>
        </form>

      </div>

    </div>
  </div>
@endsection
