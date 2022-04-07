import Vuex from "vuex";
import Vue from "vue";
import createPersistedState from "vuex-persistedstate";
import common from "./modules/common";
import cart from "./modules/cart";
import auth from "./modules/auth";

// Load Vuex
Vue.use(Vuex);

// Create store
export default new Vuex.Store({
  modules: {
    auth,
    cart,
    common,
  },
  plugins: [createPersistedState()],
});
