window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}



window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


//VUE
import { createApp } from 'vue'
import App from '../vue/App'

window.app = createApp(App);
window.vm = app.mount('#app');