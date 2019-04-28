require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('post-component', require('./components/PostComponent.vue').default);
Vue.component('user-component', require('./components/UserComponent.vue').default);
Vue.component('notification-component', require('./components/NotificationComponent.vue').default);
Vue.component('notification-trigger', require('./components/NotificationTrigger.vue').default);

const app = new Vue({
    el: '#app',
});
