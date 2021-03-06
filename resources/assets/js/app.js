import Vue from 'vue'
import App from '~/App.vue'
import router from '~/router/router'
import VeeValidate from 'vee-validate'
import Vmodal from 'vue-js-modal'
import store from '~/store/index'
import crypto from '~/crypto/crypto'
import vinput from './components/partials/input'

Vue.use(Vmodal)
Vue.component('vinput',vinput)
Vue.use(VeeValidate)
Vue.mixin(crypto)

new Vue({
    el: '#app',
    router,
    store,
    template: '<App/>',
    components: { App }
  })