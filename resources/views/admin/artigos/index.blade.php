@extends('layouts.app')

@section('content')
    <div class="container">

        <pagina tamanho="12">
            <card titulo="Artigos">
                <migalhas :lista="{{ $listaMigalhas }}"></migalhas>

                <tabela-lista
                    :titulos="['#', 'TÍtulo', 'Descrição', 'Autor', 'Data']"
                    :itens="{{ $listaArtigos }}"
                    ordem="desc" ordemcol="1"
                    criar="{{route('artigos.create')}}"
                    detalhes="#detalhes"
                    editar="#editar"
                    deletar="#deletar"
                    token="#token"
                    modal="sim"
                ></tabela-lista>
            </card>
        </pagina>
        <modal-view nome="adicionar">
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
        <modal-view nome="editar">
            <formulario classe="" action="#" method="put" enctype="multipart/form-data" token="123456">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div>
                <button type="submit" class="btn btn-info">Editar</button>
            </formulario>
        </modal-view>
        <modal-view nome="detalhes">
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

