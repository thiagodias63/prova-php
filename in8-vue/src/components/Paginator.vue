<template>
    <div class="paginator">
        <h3 class="paginator__title">Lista de <br> cadastro</h3>
        <div class="paginator__header">
            <div @click="changeActualUser(page - 1)"
                class="paginator__header-page"
                :class="{'paginator__header-page--active': actualPage == page - 1}"
                v-for="page in pages"
                :key="'page-'+page">
                {{ page }}
            </div>
        </div>
        <div class="paginator__user">
            <div class="paginator__user-container">
                <span class="paginator__user-title">Nome</span><span class="paginator__user-data">{{actualUser.name}}</span>
            </div>
            <div class="paginator__user-container">
                <span class="paginator__user-title">E-mail</span><span class="paginator__user-data">{{actualUser.phone}}</span>
            </div>
            <div class="paginator__user-container">
                <span class="paginator__user-title">Nasc.</span><span class="paginator__user-data">{{actualUser.email}}</span>
            </div>
            <div class="paginator__user-container">
                <span class="paginator__user-title">Tel.</span><span class="paginator__user-data">{{actualUser.birth}}</span>
            </div>
        </div>
    </div>
</template>
<script>
import users from '@/mixins/users'
export default {
    mixins:[users]
}
</script>
<style lang="scss">
    .paginator {
        padding:  5rem 2rem;
        &__title {
            font-size: 4rem;
            text-align: center;
            color: $list-title;
            text-transform: uppercase;
            margin-bottom: 2rem;
        }
        &__header {
            display: flex;
            &-page {
                border: 1px solid $table-infos;
                color: $table-infos;
                padding: 5px 1rem;
                font-size: 2rem;
                width: 100%;
                text-align: center;
            }
            &-page--active {
                color: $table-rows;
                border-color: $table-rows;
            }
        }
        &__user {
            border: 1px solid $table-rows;
            font-size: 1.2rem;
            padding: 0 2rem;
            &-container {
                display: flex;
                border-bottom: 1px solid $table-rows;
                padding: 1rem;
                padding-bottom: .5rem;
            }
            &-title {
                color:$table-th-titles;
                text-transform: uppercase;
                width: 8ch;
            }
            &-data {
                color: $table-infos;
            }
        }
    }
    @media(min-width: 468px) {
        .paginator {
            display: none;
        }
    }
</style>