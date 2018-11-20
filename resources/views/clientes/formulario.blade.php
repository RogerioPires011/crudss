@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Informe abaixo as informações do Cliente
                        <a class="float-right" href="{{ url('clientes') }}"> Listagem de Clientes</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                      Formulário
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
