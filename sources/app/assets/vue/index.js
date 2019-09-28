import Vue from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';

new Vue({
  components: { App },
  template: "<App/>",
  router,
  store
}).$mount("#app");
