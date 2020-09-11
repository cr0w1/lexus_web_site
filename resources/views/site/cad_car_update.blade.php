@extends('site.master.layout')

@section('content')
<div class="container content_new_car d-flex justify-content-center align-items-center">
    <div class="row">

      <div class="main_new_car ">

        <h3>Atualizar Carro</h3>

        <form  role="form" id="update_car" action="{{ route('site.updateCar') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <input type="text" name="id" value="{{ $car->id }}" class="form-control" id="inputCity" hidden>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputCity">Marca</label>
                    <input type="text" name="marca" value="{{ $car->marca }}" class="form-control" id="inputCity" placeholder="Ex: Audi">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCity">Modelo</label>
                    <input type="text" name="modelo" value="{{ $car->modelo }}" class="form-control" id="inputCity" placeholder="Ex: Audi A3">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity">Ano</label>
                    <input type="text" name="ano"  value="{{ $car->ano }}" class="form-control" id="inputCity" placeholder="Ex:2020">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Cor</label>
                    <input type="text" name="cor" value="{{ $car->cor }}" class="form-control" id="inputCity" placeholder="Ex: Vermelho">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCity">Portas</label>
                    <select id="inputState" name="portas" class="form-control">
                        @if ( $car->portas === 2)
                            <option value="" >Selecionar</option>
                            <option value="2" selected>2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        @endif
                        @if ( $car->portas === 3)
                            <option value="" >Selecionar</option>
                            <option value="2" >2</option>
                            <option value="3" selected> 3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        @endif
                        @if ( $car->portas === 4)
                            <option value="" >Selecionar</option>
                            <option value="2" >2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                        @endif
                        @if ( $car->portas === 5)
                            <option value="" >Selecionar</option>
                            <option value="2" >2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5" selected>5</option>
                        @endif
                    </select>
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Cambio</label>
                    <select id="inputState" name="cambio" class="form-control">
                        @if ($car->cambio === 'Automatico')
                            <option value="" >Selecionar</option>
                            <option value="Automatico" selected>Automatico </option>
                            <option value="Manual">Manual</option>
                        @endif
                        @if ($car->cambio === 'Manual')
                            <option value="" >Selecionar</option>
                            <option value="Automatico">Automatico</option>
                            <option value="Manual" selected>Manual</option>
                        @endif
                    </select>
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Velocidade Máxima</label>
                    <input type="text" name="velocidade" value="{{ $car->velocidade }}" class="form-control" id="inputCity" placeholder="Ex: 250">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Kms Rodados</label>
                    <input type="text" name="KmRodados" value="{{ $car->KmRodados }}" class="form-control" id="inputCity" placeholder="Ex: 0">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Combustivel</label>
                    <select id="inputState" name="combustivel" class="form-control">
                        @if ($car->combustivel === 'Gasolina')
                            <option value="" >Selecionar</option>
                            <option value="Gasolina" selected>Gasolina</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Álcool">Álcool</option>
                        @endif
                        @if ($car->combustivel === 'Diesel')
                            <option value="" >Selecionar</option>
                            <option value="Gasolina" >Gasolina</option>
                            <option value="Diesel" selected>Diesel</option>
                            <option value="Álcool">Álcool</option>
                        @endif
                        @if ($car->combustivel === 'Álcool')
                            <option value="" >Selecionar</option>
                            <option value="Gasolina" >Gasolina</option>
                            <option value="Diesel" >Diesel</option>
                            <option value="Álcool" selected>Álcool</option>
                        @endif
                    </select>
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group col-md-5">
                    <label for="inputCity">Capacidade do motor</label>
                    <input type="text" name="motor" value="{{ $car->motor }}" class="form-control" id="inputCity" placeholder="Ex: 3 L">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputCity">Valor do carro</label>
                    <input type="text" name="valor" value="{{ $car->valor }}" class="form-control" id="inputCity" placeholder="Ex: 131.000">
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="validationTextarea">Descrição</label>
                <textarea class="form-control" name="descricao" value="{{ $car->descricao }}" id="validationTextarea" placeholder="Ex: A segunda geração do modelo também..." ></textarea>
                <div class="invalid-feedback">
                    Campo obrigatório.
                </div>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                    <label class="custom-file-label" for="inputGroupFile04">Imagem do carro</label>
                    <div class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
            </div>
            <input type="text" name="user_id" class="form-control" id="inputCity" value="{{ $car->user_id }}" hidden>
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
