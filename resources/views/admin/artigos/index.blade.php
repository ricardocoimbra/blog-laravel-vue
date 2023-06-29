@extends('layouts.app')

@section('content')
    <div class="container">

        <pagina tamanho="12">
            <card titulo="Artigos">
                <migalhas :lista="{{ $listaMigalhas }}"></migalhas>

                <modal-link tipo="button" nome="meuModalTeste" titulo="Criar" css=""></modal-link>


                <tabela-lista
                    :titulos="['#', 'TÍtulo', 'Descrição', 'Autor', 'Data']"
                    :itens="[[1, 'PHP OO', 'Curso de PHP OO', 'Ricardo Coimbra', '10/10/2022'], [2, 'VueJS', 'Curso de VueJS', 'Ricardo Coimbra', '10/11/2022']]"
                    ordem="desc" ordemcol="1"
                    criar="{{route('artigos.create')}}" detalhes="#detalhes" editar="#editar" deletar="#deletar" token="#token"
                ></tabela-lista>
            </card>
        </pagina>
        <modal-view nome="meuModalTeste">
            <formulario classe="" action="#" method="put" enctype="multipart/form-data" token="123456">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div>
                <button type="submit" class="btn btn-info">Adicionar</button>
            </formulario>
        </modal-view>


    </div>


@endsection

