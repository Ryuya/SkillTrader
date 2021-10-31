/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import DetailInputComponent from "./components/DetailInputComponent";
import SearchComponent from "./components/SearchComponent";
import FormComponent from "./components/FormComponent";
import VueRouter from 'vue-router'
import IfComponent from "./components/IfComponent";

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('detail-input-component', DetailInputComponent);
Vue.component('search-component', SearchComponent);
Vue.component('form-component', FormComponent);
Vue.component('if-component', IfComponent);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/home',
      name: 'home',
    },
    {
      path: '/',
      name: '',
      component: IfComponent,
    },
    {
      path: '/user_detail_create',
      name: 'user.detail.create',
      component: DetailInputComponent
    },
    {
      path: '/search',
      name: 'search',
      component: SearchComponent
    }
  ]
});
Vue.use(VueRouter);
const app = new Vue({
    el: '#app',
    router
});
