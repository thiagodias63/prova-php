<template>
  <div class="header">
    <div class="header__container">
      <span @click="openedMenu = !openedMenu" class="header__menu" :class="{'header__menu--aberto': openedMenu}"></span>
      <div class="header__logo-container">
        <img src="@/assets/logo.svg" class="header__logo"/>
        <span></span>
      </div>
      <div class="header__menu-inline">
        <a class="header__menu-inline-item" href="#" v-scroll-to="'#l-list'">lista</a>
        <a class="header__menu-inline-item header__menu-inline-item--middle" href="#" v-scroll-to="'#l-slide'">sobre</a>
        <a class="header__menu-inline-item" href="#" v-scroll-to="'#l-signin'">cadastro</a>
      </div>
    </div>
    <div class="header__menu-dropdown" v-if="openedMenu">
      <a class="header__menu-dropdown-item" href="#" v-scroll-to="'#l-list'">lista</a>
      <a class="header__menu-dropdown-item" href="#" v-scroll-to="'#l-slide'">sobre</a>
      <a class="header__menu-dropdown-item" href="#" v-scroll-to="'#l-signin'">cadastro</a>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      openedMenu: false
    }
  }
}
</script>

<style scoped lang="scss">
  .header {
    &__container {
      position: absolute;
      top: 0;
      left: 0;
      width: calc(100vw - 4rem);
      height: 6rem;
      margin: 1.5rem 2rem;
      background-color: transparent;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 3;
    }
    &__menu-inline {
      display: none;
    }
    &__menu {
      background-image: url("../assets/icones/hamburguer.svg");
      width: 2rem;
      height: 2rem;
      background-size: cover;
    }
    &__menu--aberto {
      background-image: url("../assets/icones/hamburguer-aberto.svg");
    }
    &__logo-container {
      display: flex;
      flex-flow: row-reverse;
      height: fit-content;
      margin-right: 4rem;
    }
    &__logo {
      max-width: 9rem;
      margin: 0;
      padding: 0;
      height: fit-content;
    }
    &__menu-dropdown {
      position: absolute;
      width: 50vw;
      padding-top: 8rem;
      padding-left: 1rem;
      padding-bottom: 2rem;      
      background-color: $background-sign;
      text-transform: lowercase;
      z-index: 1;
    }
    &__menu-dropdown-item {
      font-weight: 100;
      display: flex;
      color: #fff;
      @extend %f-label-input;
      font-size: 1.2rem;
      text-decoration: none;
      padding: 1rem;
    }
    &__menu-inline {
      text-transform: lowercase;
      &-item {
        font-weight: 100;
        color: #fff;
        @extend %f-label-input;
        font-size: 1.2rem;
        text-decoration: none;
        padding: 1rem .4rem;
        &--middle {
          padding: 1rem 0;
          &::before, &::after {
            content: ' \25CF';
            font-size: 1rem;
          }
          &::before {
            margin-right: .5rem;
          }
          &::after {
            margin-left: .5rem;
          }
        }
      }
    }
  }
  @media(min-width: 1080px) {
    .header {
      &__container {
        display: flex;
        justify-content: space-around;
      }
      &__menu, &__menu-dropdown {
        display: none;
      }
      &__menu-inline {
        display: inline;
      }
    }
  }
</style>
