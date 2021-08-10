import { prefix } from "../variables";
import paciente from "../components/modulos/Administracion/paciente";
let prefijo = prefix;
const home = [{
    path: "/",
    component: () =>
        import ("../components/home/index"),
    name: "",
    children: [{
            path: "",
            name: "Dashboard",
            //component: () => import("@/views/home/Index.vue"),
            // component: () =>
            //     import ("../../../resources/js/views/home/Index.vue")
        },
        {
            path: prefijo +
                "/modulos/administracion/paciente",
            name: "Ingreso de Pacientes",
            component: paciente
                // component: () =>
                //     import ("../../../resources/js/views/galeria/Index.vue"),
        },
        {
            path: "evento",
            name: "Evento",
            // component: () =>
            //     import ("../../../resources/js/views/evento/Index.vue"),
        },
        {
            path: "programa",
            name: "Programa",
            // component: () =>
            //     import ("../../../resources/js/views/programa/Index.vue"),
        },
        {
            path: "reproductor",
            name: "Reproductor Musical",
            // component: () =>
            //     import ("../../../resources/js/views/reproductor_musical/Index.vue"),
        },
        {
            path: "login",
            name: "Login",
            // component: () =>
            //     import ("../../../resources/js/views/reproductor_musical/Index.vue"),
        },
        {
            path: "salir",
            name: "Salir",
            // component: () =>
            //     import ("../../../resources/js/views/reproductor_musical/Index.vue"),
        },
    ]
}];

export default home;