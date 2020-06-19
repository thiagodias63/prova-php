import Vue from 'vue'
import App from './App.vue'
import Vuex from 'vuex'
import Vuelidate from 'vuelidate'
import VueScrollTo from 'vue-scrollto'
import {store} from './store'

Vue.config.productionTip = false

Vue.use(Vuex);
Vue.use(Vuelidate);
Vue.use(VueScrollTo)

new Vue({
  render: h => h(App),
  store: new Vuex.Store(store)
}).$mount('#app')
