require('./bootstrap');
window.Vue = Vue;

// window.Vue = require('vue');
import Vuetify from 'vuetify';
import Vue from 'vue';
import 'material-design-icons-iconfont/dist/material-design-icons.css'; // Ensure you are using css-loader
import '@mdi/font/css/materialdesignicons.css';// Ensure you are using css-loader
import 'vuetify/dist/vuetify.min.css';
import router from './router';
import _ from 'lodash';

import  NavBar from './components/navBar' ;
import NavBarEng from './components/navBarEng';

Object.defineProperty(Vue.prototype, '$_', { value: _ });

Vue.use(Vuetify);

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
Vue.component('navBar-component', NavBar);
Vue.component('navBarEng-component', NavBarEng);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    vuetify: new Vuetify(),

});


