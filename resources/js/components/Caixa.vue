<template>
    <div class="small-box" :style="defineCor">
        <div class="inner">
            <h3>{{ qtd }}</h3>
            <p>{{ titulo }}</p>
        </div>
        <div class="icon">
            <i :class="icone"></i>
        </div>
        <a :href="url" class="small-box-footer">Ver mais <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</template>
<script>
export default {
    name: 'Caixa',
    props: ['qtd', 'titulo', 'url', 'cor', 'icone'],
    computed: {
        defineCor () {
            return `background-color: ${this.cor} !important;`
        }
    }

}
</script>
<style scoped>
.small-box {
    border-radius: .25rem;
    box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);
    display: block;
    margin-bottom: 20px;
    position: relative;
    color: #ffffff;
}
.small-box > .inner {
    padding: 10px;
}
.small-box h3, .small-box p {
    z-index: 5;
}
.small-box h3 {
    font-size: 2.2rem;
    font-weight: 700;
    margin: 0 0 10px;
    padding: 0;
    white-space: nowrap;
}
.small-box p {
    font-size: 1rem;
}
.small-box .icon {
    color: rgba(0,0,0,.15);
    z-index: 0;
}
.small-box .icon > i.fa, .small-box .icon > i.fab, .small-box .icon > i.fad, .small-box .icon > i.fal, .small-box .icon > i.far, .small-box .icon > i.fas, .small-box .icon > i.ion {
    font-size: 70px;
    top: 20px;
}
.small-box .icon > i {
    font-size: 90px;
    position: absolute;
    right: 15px;
    top: 15px;
    transition: -webkit-transform .3s linear;
    transition: transform .3s linear;
    transition: transform .3s linear,-webkit-transform .3s linear;
}
.small-box > .small-box-footer {
    background-color: rgba(0,0,0,.1);
    color: rgba(255,255,255,.8);
    display: block;
    padding: 3px 0;
    position: relative;
    text-align: center;
    text-decoration: none;
    z-index: 10;
}
.bg-info, .bg-info > a {
    color: #fff !important;
}
.small-box:hover .icon > i, .small-box:hover .icon > i.fa, .small-box:hover .icon > i.fab, .small-box:hover .icon > i.fad, .small-box:hover .icon > i.fal, .small-box:hover .icon > i.far, .small-box:hover .icon > i.fas, .small-box:hover .icon > i.ion {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}



</style>
