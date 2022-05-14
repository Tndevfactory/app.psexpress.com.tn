import axios from "axios";
import common from "./common";

const state = {
  cart: [],
  compta: [],
  cartCounter: 0,
  cartTotal: 0,
};

const getters = {
  getCart: (state) => state.cart,
  getCompta: (state) => state.compta,
  getCartCounter: (state) => state.cartCounter,
  getCartTotal: (state) => state.cartTotal,
};

const mutations = {
  setCompta: (state, compta) => (state.compta = compta),
  setCart: (state, cartItem) => (state.cart = cartItem),
  setCartCount: (state, cartCounter) => (state.cartCounter = cartCounter),
  setCartTotal: (state, cartTotal) => (state.cartTotal = cartTotal),
};

const actions = {
  async setCart({ commit }, productId) {
    let pr = [common.state.lang, productId];

    commit("setLoading", true);
    let url = "/add-to-cart";
    let pid = { params: { productId: pr } };
    try {
      const response = await axios.get(url, pid);

      if (response.data.response_code === 200) {
        //console.log(response.data.cart);
        commit("setCart", response.data.cart);
        commit("setCompta", response.data.compta);
        commit("setCartCount", response.data.cart_counter);
        commit("setCartTotal", response.data.total_cart);

        commit("setLoading", false);
        commit("setSuccess", response.data.responseBackend);
      } else if (response.data.response_code === 403) {
        commit("setError", response.data.responseBackend);
        commit("setLoading", false);
      } else {
        commit("setError", response.data.responseBackend);
        commit("setLoading", false);
      }
    } catch (err) {
      commit("setError", response.data.responseBackend);
      commit("setLoading", false);
    }

    setTimeout(() => {
      commit("setSuccess", "");
      commit("setError", "");
      commit("setLoading", false);
    }, 4000);
  },
  async deleteAllCart({ commit }) {
    console.log("deleteAllCart");
    let pr = [common.state.lang];

    commit("setLoading", true);
    let url = "/delete-all-cart";
    let pid = { params: { lang: pr } };
    try {
      const response = await axios.get(url, pid);

      if (response.data.response_code === 200) {
        commit("setCart", response.data.cart);
        commit("setCompta", response.data.compta);
        commit("setCartCount", response.data.cart_counter);
        commit("setCartTotal", response.data.total_cart);

        commit("setLoading", false);
        commit("setSuccess", response.data.responseBackend);
      } else if (response.data.response_code === 403) {
        commit("setError", response.data.responseBackend);
        commit("setLoading", false);
      } else {
        commit("setError", response.data.responseBackend);
        commit("setLoading", false);
      }
    } catch (err) {
      commit("setError", response.data.responseBackend);
      commit("setLoading", false);
    }

    setTimeout(() => {
      commit("setSuccess", "");
      commit("setError", "");
      commit("setLoading", false);
    }, 4000);
  },
  async deleteItemCart({ commit }, productId) {
    let pr = [common.state.lang, productId];

    commit("setLoading", true);
    let url = "/delete-item-cart";
    let pid = { params: { productId: pr } };
    try {
      const response = await axios.get(url, pid);

      if (response.data.response_code === 200) {
        commit("setCart", response.data.cart);
        commit("setCompta", response.data.compta);
        commit("setCartCount", response.data.cart_counter);
        commit("setCartTotal", response.data.total_cart);

        commit("setLoading", false);
        commit("setSuccess", response.data.responseBackend);
      } else if (response.data.response_code === 403) {
        commit("setError", response.data.responseBackend);
        commit("setLoading", false);
      } else {
        commit("setError", response.data.responseBackend);
        commit("setLoading", false);
      }
    } catch (err) {
      commit("setError", response.data.responseBackend);
      commit("setLoading", false);
    }

    setTimeout(() => {
      commit("setSuccess", "");
      commit("setError", "");
      commit("setLoading", false);
    }, 4000);
  },
  async updateQtyItemCart({ commit }, productId) {
    let pr = [common.state.lang, ...productId];
    // console.log("updateQty");
    // console.log(pr);
    commit("setLoading", true);
    let url = "/update-qty-item-cart";
    let pid = { params: { productId: pr } };
    try {
      const response = await axios.get(url, pid);

      if (response.data.response_code === 200) {
        commit("setCart", response.data.cart);
        commit("setCompta", response.data.compta);
        commit("setCartCount", response.data.cart_counter);
        commit("setCartTotal", response.data.total_cart);

        commit("setLoading", false);
        commit("setSuccess", response.data.responseBackend);
      } else if (response.data.response_code === 403) {
        commit("setError", response.data.responseBackend);
        commit("setLoading", false);
      } else {
        commit("setError", response.data.responseBackend);
        commit("setLoading", false);
      }
    } catch (err) {
      commit("setError", response.data.responseBackend);
      commit("setLoading", false);
    }

    setTimeout(() => {
      commit("setSuccess", "");
      commit("setError", "");
      commit("setLoading", false);
    }, 4000);
  },
};

export default {
  state,
  getters,
  actions,
  mutations,
};
