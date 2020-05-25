
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('my-component', require('./components/ExampleComponent.vue'));

Vue.component('index-component', require('./components/IndexComponent.vue'));
Vue.component('ty-gia-component', require('./components/TyGiaComponent.vue'));
Vue.component('ngoai-te-component', require('./components/NgoaiTeComponent.vue'));
Vue.component('gia-vang-component', require('./components/GiaVangComponent.vue'));
Vue.component('lai-suat-component', require('./components/LaiSuatComponent.vue'));
Vue.component('lai-suat-detail-component', require('./components/LaiSuatDetailComponent.vue'));
Vue.component('tien-ao-component', require('./components/TienAoComponent.vue'));
Vue.component('tien-ao-detail-component', require('./components/TienAoDetailComponent.vue'));

Vue.component('common-component', require('./components/GetTimeNowCommon.vue'));

const app = new Vue({
    el: '#app'
});
