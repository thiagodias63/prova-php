<template>
    <div class="footer">
        <div class="footer-info">{{users[0] ? users[0].name : 'Thiago'}}</div>
        <div class="footer-info">{{users[0] ? users[0].phone : '(31) 99123-2829'}}</div>
        <div class="footer-info">{{users[0] ? users[0].email : 'thiagodias@gmail.com'}}</div>
        <div class="footer-info">Faculdade de Belo Horizonte</div>
    </div>
</template>
<script>
import { mapGetters } from 'vuex'
export default {
    computed: {
        ...mapGetters({users: 'getUsers'})
    }
}
</script>
<style lang="scss">
    .footer {
        padding: 3rem;
        color: #fff;
        background-image: url("../assets/imagens/rodape-mobile.jpg");
        background-size: cover;
        display: flex;
        flex-direction: column;
        align-items: center;

        &-info {
            padding: 1rem;
            font-size: 1.5rem;
        }
    }
    @media(min-width: 768px) {
        .footer {
            background-image: url("../assets/imagens/rodape-desktop.jpg");
        }
    }
</style>