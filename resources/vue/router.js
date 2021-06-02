import {createWebHistory, createRouter} from "vue-router";

//add view routes here.
const router = new createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: "/",
            name: "home",
            component: () => import('./vv/Home.vue'),
        },
        {
            path: "/employees",
            name: "employees",
            component: () => import('./vv/Employees.vue'),
        },
        {
            path: "/gis",
            name: "gis",
            component: () => import('./vv/Gis.vue'),
        },

    ]
});

export default router;