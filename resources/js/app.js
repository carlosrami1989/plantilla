require('./bootstrap');

import Vue from "vue";
import App from "./components/App";

import { funcionesGlobales } from "./funciones.js";


import router from "./router";
import VueRouter from "vue-router";

import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';





Vue.prototype.$funcionesGlobales = funcionesGlobales;
Vue.use(Vuetify);

Vue.use(VueRouter);
// const router = new VueRouter({
//     routes,
//     mode: 'history',
// });

Vue.component(
    "menuComponente",
    require("./components/componentesGenerales/MenuComponent.vue").default
);
Vue.component(
    "dashboard",
    require("./components/componentesGenerales/dashboard.vue").default
);
Vue.component(
    "home",
    require("./components/home/index").default
);
Vue.component(
    "home-app-bar",
    require("./components/home/components/AppBar").default
);
Vue.component(
    "home-view",
    require("./components/home/components/View").default
);
//*componentes de pacientes //
Vue.component(
    "paciente-informacion",
    require("./components/modulos/Administracion/PacientesComponents/informacionpersonal.vue").default
);
Vue.component(
    "paciente-representante",
    require("./components/modulos/Administracion/PacientesComponents/informacionrepresentante.vue").default
);
//**  fin */
new Vue({
    vuetify: new Vuetify(), //<-----
    el: "#app",
    components: {
        App
    },
    router
})