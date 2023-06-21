<template>
    <div class="card">
        <div :class="defineCor">{{ titulo }}</div>

        <div class="card-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Card',
        props: ['titulo', 'cor'],
        computed: {
            defineCor () {
                return "card-header " + (this.cor || "bg-default")
            }
        }
    }
</script>

<style scoped>
    .green {
        color: #e2e8f0;
        background-color: #198754;
        border-color: #198754;
    }

    .orange {
        color: #e2e8f0;
        background-color: #e06f23;
        border-color: #e06f23;
    }

</style>
