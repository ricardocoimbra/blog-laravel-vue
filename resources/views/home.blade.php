@extends('layouts.app')

@section('content')
<div class="container">

   <pagina tamanho="7">
            <card titulo="Dashboard">
                Teste de conteúdo
                <div class="row">
                    <div class="col-md-4">
                        <caixa qtd="80" titulo="Artigos" url="{{ route('artigos.index') }}" cor="orange" icone="ion ion-pie-graph"></caixa>
                    </div>
                    <div class="col-md-4">
                        <caixa qtd="1500" titulo="Usuários" url="#" cor="blue" icone="ion ion-person-stalker"></caixa>
                    </div>
                    <div class="col-md-4">
                        <caixa qtd="80" titulo="Autores" url="#" cor="red" icone="ion ion-person"></caixa>
                    </div>
{{--                    <div class="col-md-4">--}}
{{--                        <card titulo="Teste 2"  cor="bg-info">--}}
{{--                            Teste de conteúdo...--}}
{{--                        </card>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <card titulo="Teste 3"  cor="green">--}}
{{--                            Teste de conteúdo...--}}
{{--                        </card>--}}
{{--                    </div>--}}
                </div>
            </card>
   </pagina>



</div>


@endsection
