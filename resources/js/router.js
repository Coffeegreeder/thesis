import vueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(vueRouter);

import IndexPage from "./views/IndexPage";
import CreatePage from "./views/CreatePage";
import AboutPage from "./views/AboutPage";

const routes = [
  {
    path: "/",
    component: IndexPage
  },
   {
     path: "/create",
     component: CreatePage
   },
   {
     path: "/about",
     component: AboutPage
   }
];

export default new vueRouter({
  mode: "history",
  routes
});
