

require('./bootstrap');

window.Vue = require('vue');


Vue.component('calendar-component', require('./components/CalendarComponent.vue'));
Vue.component('pago-component', require('./components/PagoComponent.vue'));

const app = new Vue({
    el: '#app',
   
   
});
