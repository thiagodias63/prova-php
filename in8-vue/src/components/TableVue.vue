<template>
    <div class="table-container">
        <h3 class="table__title">Lista de cadastro</h3>
        <table class="table">
            <thead class="table__head">
                <tr class="table__head-row">
                    <th class="table__head-item"></th>
                    <th class="table__head-item">Nome</th>
                    <th class="table__head-item">Email</th>
                    <th class="table__head-item">Nascimento</th>
                    <th class="table__head-item">Telefone</th>
                </tr>
            </thead>
            <tbody class="table__body">
                <tr class="table__body-row" v-for="(user, index) in users" :key="'ut-'+index">
                    <td class="table__body-item table__body-item--index">{{index + 1}}</td>
                    <td class="table__body-item">{{user.name}}</td>
                    <td class="table__body-item">{{user.email}}</td>
                    <td class="table__body-item">{{user.birth}}</td>
                    <td class="table__body-item">{{user.phone}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
import users from '@/mixins/users'
export default {
    mixins:[users]
}
</script>
<style lang="scss">
    .table-container {
        display: none;
    }
    .table__title {
        text-align: center;
        text-transform: uppercase;
        color: $list-title;
        font-size: 3rem;
    }
    .table {
        width: 100%;
        margin: 5rem 0;
        font-size: 1.2rem;
        border-collapse: collapse;
        border-style: hidden;
    }
    .table__body-item, .table__head-item {
        border: 1px solid $table-rows;
        padding: .7rem 1.2rem;
    }
    .table__head-item {
        color: $table-th-titles;
        @extend %f-table-title;
        font-weight: bold;
        text-transform: uppercase;
    }
    .table__body-item {
        color: $table-infos;
        &--index {
            color: $table-th-titles;
        }
    }
    
    @media(min-width: 468px) {
        .table-container {
            display: block;
            padding: 10% 20%;
        }
    }
    
</style>
