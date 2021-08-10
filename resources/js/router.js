import Vue from "vue";
import { prefix } from "./variables";
import VueRouter from "vue-router";
import dashboard from "./components/modulos/dashboard";
import IndexCompra from "./components/modulos/compra/indexCompra";

import paciente from "./components/modulos/Administracion/paciente";

Vue.use(VueRouter);
let prefijo = prefix;
export default new VueRouter({
    routes: [{



            path: prefijo +
                "",
            name: "Ingreso de Pacientes",
            component: dashboard
        },
        {
            path: prefijo +
                "/modulos/administracion/paciente",
            name: "Ingreso de Pacientes",
            component: paciente,


        }

    ],
    mode: "history" //Evita que aparezca # en la ruta
});