<template>
    <div class="hero">
        <h1 class="hero-title">Estágio</h1>
        <h2 class="hero-subtitle">Prova de seleção</h2>
    </div>
</template>
<style lang="scss">
    .hero {
        background: url('../assets/imagens/index-image-mobile.jpg'), $background-sign ;
        width: 100vw;
        height: 85vh;
        background-size: cover;
        padding-top: 9rem;
        text-align: center;
        &-title, &-subtitle {
            @extend %f-title;
            color: #fff;
            text-transform: uppercase;
        }
        &-title {
            font-size: 5.2rem;
            margin-bottom: 1rem;
        }
        &-subtitle {
            font-size: 2.25rem;
        }
    }
    @media(min-width: 468px) {
        .hero {
            background: url('../assets/imagens/index-image.jpg') center/cover no-repeat border-box, $background-sign;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            &-title, &-subtitle {
                padding-left: 16rem;
            }
        }
    }
</style>
