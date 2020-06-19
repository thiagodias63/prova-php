<template>
    <div class="sign">
        <h3 class="sign__title">Cadastrato</h3>
        <form autocomplete="off">
            <div class="sign__input-container">
                <label for="name" class="sign__input-label">Nome</label>
                <input required autocomplete="off" type="text" id="name" 
                    v-model="user.name" name="name" class="sign__input-control"
                    :class="{'is-invalid': $v.user.name.$invalid && isFormSend }"
                    :disabled="isSending">
                <span v-if="$v.user.name.$invalid && isFormSend" class="u-input-feedback">Por favor, preencha o nome</span>
            </div>
            <div class="sign__input-container">
                <label for="email" class="sign__input-label">E-mail</label>
                <input required autocomplete="off" type="email" id="email" 
                v-model="user.email" name="email" class="sign__input-control"
                :class="{'is-invalid': $v.user.email.$invalid && isFormSend }"
                :disabled="isSending">
                <span v-if="!$v.user.email.required && isFormSend" class="u-input-feedback">Por favor, preencha o email</span>
                <span v-if="!$v.user.email.email && isFormSend" class="u-input-feedback">Por favor, preencha como um email</span>
            </div>
            <div class="sign__input-container">
                <label for="birth" class="sign__input-label">Nascimento</label>
                <input required autocomplete="off" type="date" id="birth" 
                v-model="user.birth" name="birth" class="sign__input-control"
                :class="{'is-invalid': $v.user.birth.$invalid && isFormSend }"
                :disabled="isSending" >
                <span v-if="$v.user.birth.$invalid && isFormSend" class="u-input-feedback">Por favor, preencha o nascimento</span>
            </div>
            <div class="sign__input-container">
                <label for="phone" class="sign__input-label">Telefone</label>
                <input required autocomplete="off" type="text" id="phone" 
                v-model="user.phone" name="phone" class="sign__input-control"
                :class="{'is-invalid': $v.user.phone.$invalid && isFormSend }"
                 :disabled="isSending">
                <span v-if="$v.user.phone.$invalid && isFormSend" class="u-input-feedback">Por favor, preencha o telefone</span>
            </div>
            <div class="sign__card-error" v-if="showErro">
                Houve um erro na sua requisição. Por favor, contate o suporte.
            </div>
            
            <div class="sign__card-success" v-if="showSuccess">
                Usuário cadastrado
            </div>
            <div class="sign__button-container">
                <button :disabled="isSending" type="button" @click="submit" class="sign__button">cadastrar</button>
            </div>
            
        </form>
    </div>
</template>

<script>
import UserService from '@/services/UserService'
import validations from '@/validations/signin'
import { mapActions } from 'vuex'
export default {
    data() {
        return {
            user: {
                name: '',
                email: '',
                birth: '',
                phone: '',
            },
            showErro: false,
            isSending: false,
            isFormSend: false,
            showSuccess: false,
        }
    },
    validations,
    methods: {
        ...mapActions(['setUsers']),
        submit() {
            this.showErro = false
            this.isFormSend = true
            if(!this.$v.$invalid) {
                this.isSending = true
                UserService.signIn(this.user)
                    .then(response => {
                        this.isSending = false
                        this.showSuccess = true
                        this.isFormSend = false
                        this.setUsers(response.data.users)
                        setTimeout( () => this.showSuccess = false, 3000)
                        this.user = {
                            name: '',
                            email: '',
                            birth: '',
                            phone: '',
                        } 
                    }).catch(error => {
                        console.error(error)
                        this.showErro = true
                    })
            }
        }
    }
}
</script>

<style scoped lang="scss">
    .sign {
        text-align: center;
        color: #fff;
        background-color: $background-sign;
        padding: 3rem 2rem;
        &__title {
            text-transform: uppercase;
            font-size: 3rem;
            margin-bottom: 4rem;
        }
        &__input {
            &-container {
                margin-bottom: 1rem;
            }
            &-label {
                font-size: 1.5rem;
                display: flex;
                margin-bottom: .5em;
            }
            &-control {
                font-size: 1.9rem;
                display: flex;
                width: 100%;
                color: #fff;
                background: transparent;
                outline: none;
                border: 0;
                border-bottom: 1px solid #fff;
            }
        }
        &__card {
            background: #fff;
            margin: 5rem 0;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            padding: 2rem 3rem;
            font-weight: bold;
            border-radius: 8px;
            &-error {
                color: #f00;
            }
            &-success {
                color: green;
            }
        }
        &__button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 3rem;
        }
        &__button {
            border: 0;
            margin: 0;
            font-size: 3rem;
            text-transform: uppercase;
            padding: .5rem 1.5rem;
            background-color: $table-numbers;
            color: $background-sign;
            width: 100%;
        }
    }
    @media(min-width: 468px) {
        .sign {
            padding: 10% 20%;
        }
    }
</style>
