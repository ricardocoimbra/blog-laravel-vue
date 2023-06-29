<template>
    <div>
        <div class="row justify-content-between">
            <div class="col-3">
                <a v-if="criar && !modal" class="btn btn-primary mb-2" :href="criar">Criar</a>
                <modal-link v-if="criar && modal" tipo="link" nome="adicionar" titulo="Criar" css=""></modal-link>
            </div>
            <div class="col-3">
                <input class="form-control" type="search" placeholder="Buscar" v-model="buscar">
            </div>
        </div>

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th style="cursor:pointer" @click="ordenaColuna(index)" v-for="(titulo, index) in titulos">{{ titulo }}</th>

                <th v-if="detalhes || editar || deletar">Ação</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(item, index) in lista">
                <td v-for="i in item"> {{ i }}</td>

                <td v-if="detalhes || editar || deletar">
                    <form :id="index" v-if="deletar && token" :action="deletar" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" :value="token">

                        <a v-if="detalhes" :href="detalhes">Detalhes |</a>
                        <a v-if="editar && !modal" :href="editar"> Editar |</a>
                        <modal-link v-if="editar && modal" tipo="link" nome="editar" titulo=" Editar |" css=""></modal-link>
                        <a href="#" @click="executaForm(index)"> Deletar</a>
                    </form>
                    <span v-if="!token">
                    <a v-if="detalhes" :href="detalhes">Detalhes |</a>
                    <a v-if="editar && !modal" :href="editar"> Editar |</a>
                        <modal-link v-if="editar && modal" tipo="link" nome="editar" titulo=" Editar |" css=""></modal-link>
                    <a v-if="deletar" :href="deletar">Deletar</a>
                </span>
                    <span v-if="token && !deletar">
                    <a v-if="detalhes" :href="detalhes">Detalhes |</a>
                    <a v-if="editar && !modal" :href="editar"> Editar</a>
                        <modal-link v-if="editar && modal" tipo="link" nome="editar" titulo=" Editar" css=""></modal-link>
                </span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import ModalLink from "./modal/ModalLink.vue";

export default {
    name: 'TabelaLista',
    components: {ModalLink},
    props: ['titulos', 'itens', 'ordem', 'ordemcol', 'criar', 'detalhes', 'editar', 'deletar', 'token', 'modal'],
    data () {
        return {
            buscar: '',
            ordemAux: this.ordem || "asc",
            ordemColAux: this.ordemcol || 0
        }
    },
    methods: {
        executaForm: function (index) {
            document.getElementById(index).submit();
        },
        ordenaColuna: function (coluna) {
            this.ordemColAux = coluna;
            if(this.ordemAux.toLowerCase() === "asc") {
                this.ordemAux = "desc"
            } else {
                this.ordemAux = "asc";
            }
        }
    },
    computed: {
        lista: function () {
            let ordem = this.ordemAux || "asc";
            let ordemCol = this.ordemColAux || 0;
            ordem = ordem.toLowerCase();
            ordemCol = parseInt(ordemCol);

            if (ordem === "asc") {
                this.itens.sort(function (a, b) {
                    if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol]) {return 1;}
                    if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol]) {return -1;}
                    return 0;
                });
            } else {
                this.itens.sort(function (a, b) {
                    if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol]) {return 1;}
                    if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol]) {return -1;}
                    return 0;
                });
            }

            if (this.buscar) {
                return this.itens.filter(res => {
                    for (let k = 0; k < res.length; k++) {
                        if ((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0) {
                            return true;
                        }
                    }
                    return false;
                });
            }
            return this.itens;
        }
    }

}
</script>

<style scoped>

</style>
