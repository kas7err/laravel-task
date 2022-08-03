require('./bootstrap');

window.Vue = require('vue').default;


Vue.component("contact", require("./components/Contact.vue").default);


const app = new Vue({
    el: '#app',
});

