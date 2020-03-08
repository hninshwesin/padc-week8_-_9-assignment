require('./bootstrap');

import Vue from 'vue'

import VueCookie from "vue-cookie";
Vue.use(VueCookie)

import VueRouter from 'vue-router'
Vue.use(VueRouter)

// Global Mixin Functions
import api_token_header from './components/mixins/api_token_header_for_axios';
Vue.mixin(api_token_header);


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('form-group', require('./components/FormGroup.vue').default);

Vue.component('radio-item', require('./components/RadioItem.vue').default);

Vue.component('text-input', require('./components/TextInput.vue').default);

Vue.component('textarea-input', require('./components/TextareaInput.vue').default);

Vue.component('categories-select', require('./components/CategoriesSelect.vue').default);

// Vue.component('post-list', require('./components/PostList.vue').default);

// Vue.component('login-form', require('./components/LoginForm.vue').default);

Vue.component('name-display', require('./components/NameDisplay.vue').default);

Vue.component('name-list', require('./components/NameList.vue').default);

Vue.component('watcher-sample', require('./components/WatcherSample.vue').default);

Vue.component('app', require('./components/App.vue').default);

import routes from './router'

const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    router : router
});