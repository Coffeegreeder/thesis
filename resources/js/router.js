import vueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(vueRouter);

import Index from "./views/Index";
import Create from "./views/Create";
import About from "./views/About";

const routes = [
  {
    path: "/",
    component: Index
  },
   {
     path: "/create",
     component: Create
   },
   {
     path: "/about",
     component: About
   }
];

export default new vueRouter({
  mode: "history",
  routes
});
