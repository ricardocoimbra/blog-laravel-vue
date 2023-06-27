@extends('layouts.app')

@section('content')
    <div class="container">

        <pagina tamanho="12">
            <card titulo="Pacientes">


                <tabela-lista
                    :titulos="['#', 'TÍtulo', 'Descrição', 'Autor', 'Data']"
                    :itens="[[1, 'PHP OO', 'Curso de PHP OO', 'Ricardo Coimbra', '10/10/2022'], [2, 'VueJS', 'Curso de VueJS', 'Ricardo Coimbra', '10/11/2022']]"
                    ordem="desc" ordemcol="1"
                    criar="{{route('artigos.create')}}" detalhes="#detalhes" editar="#editar" deletar="#deletar" token="#token"
                ></tabela-lista>

            </card>
        </pagina>



    </div>


@endsection

