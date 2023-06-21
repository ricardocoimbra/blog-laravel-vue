@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <card titulo="Dashboard">
                Teste de conteúdo
                <div class="row">
                    <div class="col-md-4">
                        <card titulo="Teste 1" cor="orange">
                            Teste de conteúdo...
                        </card>
                    </div>
                    <div class="col-md-4">
                        <card titulo="Teste 2"  cor="bg-info">
                            Teste de conteúdo...
                        </card>
                    </div>
                    <div class="col-md-4">
                        <card titulo="Teste 3"  cor="green">
                            Teste de conteúdo...
                        </card>
                    </div>
                </div>
            </card>

        </div>
    </div>



</div>


@endsection
