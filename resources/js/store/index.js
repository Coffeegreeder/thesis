import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
      page: 1,  // переменная отвечает за текущую страницу
      x: 0,  // Отвечает за положение по горизонтале на координате
      y: 0   // Отвечает за положение по вертикале на координате
    },
    mutations: {
        incrementX(state){
           state.x++,
           state.page++
         },
        decrementX(state){
          state.page++,
          state.x--
        },
        incrementY(state){
           state.y++,
           state.page++
         },
        decrementY(state){
          state.page++,
          state.y--
        },
        refresh(state){
          state.page = 1,
          state.x = 0,
          state.y = 0
        },
        forward: state => state.page++
      }
});
