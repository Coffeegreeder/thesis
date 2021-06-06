import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
      page: 1,  // переменная отвечает за текущую страницу
      x: 0,
      y: 0
    },
    mutations: {
        incrementX: state => state.x++,
      	forward: state => state.page++,
        back: state => state.page--,
      }
});
