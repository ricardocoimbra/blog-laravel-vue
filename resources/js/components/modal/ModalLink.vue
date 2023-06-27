<template>
    <div>
        <button v-if="!tipo || (tipo !== 'button' && tipo !== 'link')" type="button" class="btn btn-primary" data-bs-toggle="modal" :data-bs-target="'#' + nome">{{ titulo }}</button>
        <button v-if="tipo === 'button'" type="button" :class="css || 'btn btn-primary'" data-bs-toggle="modal" :data-bs-target="'#' + nome">{{ titulo }}</button>
        <a v-if="tipo === 'link'" :class="css" href="#" data-bs-toggle="modal" :data-bs-target="'#'+ nome">{{ titulo }}</a>
    </div>
</template>
<script>
export default {
    name: 'ModalLink',
    props: ['tipo', 'nome', 'titulo', 'css']
}
</script>
<style scoped>

</style>
