<template>
  <div id="app">
    <Header/>
    <span id="l-slide">
      <Hero/>
    </span>
    <span id="l-signin">
      <SignIn/>
    </span>
    <span id="l-list">
      <Paginator/>
      <TableVue/>
    </span>
    <Footer/>
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Hero from './components/Hero.vue'
import SignIn from './components/SignIn.vue'
import Paginator from './components/Paginator.vue'
import TableVue from './components/TableVue.vue'
import Footer from './components/Footer.vue'

export default {
  name: 'App',
  components: {
    Header,
    Hero,
    SignIn,
    Paginator,
    TableVue,
    Footer,
  }
}
</script>