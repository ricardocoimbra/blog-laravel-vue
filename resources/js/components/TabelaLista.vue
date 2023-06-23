<template>
    <div>
        <div class="row justify-content-between">
            <div class="col-3">
                <a class="btn btn-primary mb-2" v-if="criar" :href="criar">Criar</a>
            </div>
            <div class="col-3">
                <input class="form-control" type="search" placeholder="Buscar" v-model="buscar"> {{ buscar }}
            </div>
        </div>

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th v-for="titulo in titulos">{{ titulo }}</th>

                <th v-if="detalhes || editar || deletar">Ação</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(item, index) in itens">
                <td v-for="i in item"> {{ i }}</td>

                <td v-if="detalhes || editar || deletar">
                    <form :id="index" v-if="deletar && token" :action="deletar" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" :value="token">

                        <a v-if="detalhes" :href="detalhes">Detalhes |</a>
                        <a v-if="editar" :href="editar"> Editar |</a>
                        <a href="#" @click="executaForm(index)"> Deletar</a>
                    </form>
                    <span v-if="!token">
                    <a v-if="detalhes" :href="detalhes">Detalhes |</a>
                    <a v-if="editar" :href="editar">Editar |</a>
                    <a v-if="deletar" :href="deletar">Deletar</a>
                </span>
                    <span v-if="token && !deletar">
                    <a v-if="detalhes" :href="detalhes">Detalhes |</a>
                    <a v-if="editar" :href="editar"> Editar</a>
                </span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: 'TabelaLista',
    props: ['titulos', 'itens', 'criar', 'detalhes', 'editar', 'deletar', 'token'],
    data () {
        return {
            buscar: ''
        }
    },
    methods: {
        executaForm (index) {
            document.getElementById(index).submit();
        }
    }

}
</script>

<style scoped>

</style>
