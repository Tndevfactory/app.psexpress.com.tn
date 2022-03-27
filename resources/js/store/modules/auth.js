import axios from "axios";
import common from "./common";

const state = {
  ConnectionStatus: false,
  user: {},
};

const getters = {
  getConnectionStatus: (state) => state.ConnectionStatus,
  getUser: (state) => state.user,
};

const mutations = {
  setConnectionStatus: (state, ConnectionStatus) =>
    (state.ConnectionStatus = ConnectionStatus),
  setLogin: (state, user) => (state.user = user),
};

const actions = {
  // async setConnectionStatus({ commit }) {
  //   return 1;
  // },

  async setLogin({ commit }, credentials) {
    console.log(credentials);
    let lang = common.state.lang;

    commit("setLoading", true);
    let url = "/login";

    try {
      const response = await axios.post(url, credentials);

      if (response.data.response_code === 200) {
        commit("setConnectionStatus", response.data.backend_response);
        commit("setLogin", response.data.user);

        Vue.$cookies.set("bearerToken", response.data.access_token);
        commit("setLoading", false);
        commit("setSuccess", response.data.backend_response);
        console.log(response);
      } else if (response.data.response_code === 403) {
        console.log(response.data.backend_response);
        commit("setConnectionStatus", response.data.backend_response);
        commit("setError", response.data.backend_response);
        commit("setLoading", false);
      } else {
        commit("setConnectionStatus", response.data.backend_response);
        commit(
          "setError",
          response.data.backend_response
            ? response.data.backend_response
            : "something went wrong"
        );
        commit("setLoading", false);
      }
    } catch (err) {
      commit("setConnectionStatus", response.data.backend_response);
      console.log(response);
      commit(
        "setError",
        response.data.backend_response
          ? response.data.backend_response
          : "something went wrong"
      );
      commit("setLoading", false);
    }

    setTimeout(() => {
      commit("setSuccess", "");
      commit("setError", "");
    }, 4000);
  },
};

export default {
  state,
  getters,
  actions,
  mutations,
};
