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
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </modal-view>


    </div>


@endsection

