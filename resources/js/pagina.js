
 require('./bootstrap');

 window.Vue = require('vue').default;
 

 //importar componentes
 Vue.component('example-component', require('./components/ExampleComponent.vue').default);
 Vue.component('home-component', require('./components/Home.vue').default);
 Vue.component('servicio-component', require('./components/Servicio.vue').default);
 Vue.component('galeria-component', require('./components/Galeria.vue').default);
 Vue.component('session-component', require('./components/Session.vue').default);
 Vue.component('contacto-component', require('./components/Contacto.vue').default);
 Vue.component('blog-component', require('./components/Blog.vue').default);

 
 //inicio de vue js
 const app = new Vue({
     el: '#web',
     data:{
        menu:0,
        
     },
     methods:{

     }
 });
 