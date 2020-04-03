require('./bootstrap');
import UploadCare from 'uploadcare-vue';

window.Vue = require('vue');
Vue.component('hero-step', require('./components/hero-step.vue').default);
Vue.component('upload-care', UploadCare);

const app = new Vue({
    el: '#app',
});
