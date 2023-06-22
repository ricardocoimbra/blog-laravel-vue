<template>
    <div class="row justify-content-center">
        <div :class="defineTamanho">
            <slot></slot>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'Pagina',
        props: ['tamanho'],
        computed: {
            defineTamanho () {
                let tamanhoPagina = parseInt(this.tamanho)
                if (tamanhoPagina >= 12) {
                    return `col-md-12`
                }
                if (tamanhoPagina <= 4) {
                    return `col-md-4`
                }
                if ((tamanhoPagina % 2) !== 0) {
                    return `col-md-${1 + tamanhoPagina}`
                }
                return `col-md-${tamanhoPagina}`
            }
        }
    }
</script>


<style scoped>

</style>
