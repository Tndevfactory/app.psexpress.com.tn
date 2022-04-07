import axios from "axios";
import common from "./common";

const state = {
  authCheck: false,
  bearerToken: "",
  verifTokenPk: "",
  user: {},
};

const getters = {
  getAuthCheck: (state) => state.authCheck,
  getBearerToken: (state) => state.bearerToken,
  getVerifTokenPk: (state) => state.VerifTokenPk,
  getUser: (state) => state.user,
};

const mutations = {
  setAuthCheck: (state, authCheck) => (state.authCheck = authCheck),
  setLogin: (state, user) => (state.user = user),
  setRegister: (state, user) => (state.user = user),
  setBearerToken: (state, bearerToken) => (state.bearerToken = bearerToken),
  setVerifTokenPk: (state, verifTokenPk) => (state.bearerToken = verifTokenPk),
};

const actions = {
  async setLogin({ commit }, credentials) {
    let lang = common.state.lang;
    let cred = { ...credentials, lang };

    commit("setLoading", true);
    let url = "/login";

    try {
      const response = await axios.post(url, cred);

      if (response.data.response_code === 200) {
        console.log(response);

        commit("setAuthCheck", response.data.auth_check);
        commit("setLogin", response.data.user);
        commit("setBearerToken", response.data.access_token);
        Vue.$cookies.set("bearerToken", response.data.access_token);
        Vue.$cookies.set("authCheck", response.data.auth_check);
        Vue.$cookies.set("user", response.data.user);
        commit("setLoading", false);
        commit("setSuccess", response.data.backend_response);
        window.location.href = "http://127.0.0.1:8000/fr/shop";
      } else if (response.data.response_code === 403) {
        console.log(response);
        Vue.$cookies.remove("bearerToken");
        Vue.$cookies.remove("authCheck");
        Vue.$cookies.remove("user");
        commit("setAuthCheck", response.data.auth_check);
        commit("setLogin", response.data.user);
        commit("setBearerToken", response.data.access_token);
        commit("setLoading", false);
        commit(
          "setError",
          response.data.backend_response
            ? response.data.backend_response
            : "something went wrong"
        );
      } else {
        Vue.$cookies.remove("bearerToken");
        Vue.$cookies.remove("authCheck");
        Vue.$cookies.remove("user");
        commit("setAuthCheck", response.data.auth_check);
        commit("setLogin", response.data.user);
        commit("setBearerToken", response.data.access_token);
        commit("setLoading", false);
        commit(
          "setError",
          response.data.backend_response
            ? response.data.backend_response
            : "something went wrong"
        );
      }
    } catch (err) {
      Vue.$cookies.remove("bearerToken");
      Vue.$cookies.remove("authCheck");
      Vue.$cookies.remove("user");
      commit("setAuthCheck", response.data.auth_check);
      commit("setLogin", response.data.user);
      commit("setBearerToken", response.data.access_token);
      commit("setLoading", false);
      commit(
        "setError",
        response.data.backend_response
          ? response.data.backend_response
          : "something went wrong"
      );
    }

    setTimeout(() => {
      commit("setSuccess", "");
      commit("setError", "");
    }, 4000);
  },
  async setRegister({ commit }, credentials) {
    let lang = common.state.lang;
    let cred = { ...credentials, lang };

    commit("setLoading", true);
    let url = "/register";

    try {
      const response = await axios.post(url, cred);

      if (response.data.response_code === 200) {
        console.log(response);

        commit("setAuthCheck", response.data.auth_check);
        commit("setRegister", response.data.user);
        commit("setBearerToken", response.data.access_token);
        commit("setVerifTokenPk", response.data.verif_token_pk);
        Vue.$cookies.set("bearerToken", response.data.access_token);
        Vue.$cookies.set("verifToken", response.data.verif_token_pk);
        Vue.$cookies.set("authCheck", response.data.auth_check);
        Vue.$cookies.set("user", response.data.user);
        commit("setLoading", false);
        commit("setSuccess", response.data.backend_response);

        setTimeout(() => {
          commit("setSuccess", "");
          commit("setError", "");
        }, 3000);

        window.location.href = "http://127.0.0.1:8000/fr/shop";
      } else if (response.data.response_code === 403) {
        console.log(response);
        Vue.$cookies.remove("verifToken");
        Vue.$cookies.remove("bearerToken");
        Vue.$cookies.remove("authCheck");
        Vue.$cookies.remove("user");
        commit("setAuthCheck", response.data.auth_check || "");
        commit("setLogin", response.data.user || "");
        commit("setBearerToken", response.data.access_token || "");
        commit("setVerifTokenPk", response.data.verif_token_pk || "");
        commit("setLoading", false);
        commit(
          "setError",
          response.data.backend_response
            ? response.data.backend_response
            : "something went wrong"
        );
      } else {
        Vue.$cookies.remove("verifToken");
        Vue.$cookies.remove("bearerToken");
        Vue.$cookies.remove("authCheck");
        Vue.$cookies.remove("user");
        commit("setAuthCheck", response.data.auth_check || "");
        commit("setLogin", response.data.user || "");
        commit("setBearerToken", response.data.access_token || "");
        commit("setVerifTokenPk", response.data.verif_token_pk || "");
        commit("setLoading", false);
        commit(
          "setError",
          response.data.backend_response
            ? response.data.backend_response
            : "something went wrong"
        );
      }
    } catch (err) {
      Vue.$cookies.remove("verifToken");
      Vue.$cookies.remove("bearerToken");
      Vue.$cookies.remove("authCheck");
      Vue.$cookies.remove("user");
      commit("setAuthCheck", response.data.auth_check || "");
      commit("setLogin", response.data.user || "");
      commit("setBearerToken", response.data.access_token || "");
      commit("setVerifTokenPk", response.data.verif_token_pk || "");
      commit("setLoading", false);
      commit(
        "setError",
        response.data.backend_response
          ? response.data.backend_response
          : "something went wrong"
      );
    }

    setTimeout(() => {
      commit("setSuccess", "");
      commit("setError", "");
    }, 4000);
  },
  async updVerifiedAt({ commit }, token) {
    commit("setLoading", true);
    let url = "/update-verify-at";

    try {
      const response = await axios.post(url, token);

      if (response.data.response_code === 200) {
        console.log(response);

        commit("setLoading", false);
        commit("setSuccess", response.data.backend_response);
        window.location.href = "http://127.0.0.1:8000/fr/shop";
      } else if (response.data.response_code === 403) {
        console.log(response);

        commit("setLoading", false);
        commit(
          "setError",
          response.data.backend_response
            ? response.data.backend_response
            : "something went wrong"
        );
      } else {
        commit("setLoading", false);
        commit(
          "setError",
          response.data.backend_response
            ? response.data.backend_response
            : "something went wrong"
        );
      }
    } catch (err) {
      commit("setLoading", false);
      commit(
        "setError",
        response.data.backend_response
          ? response.data.backend_response
          : "something went wrong"
      );
    }
    setTimeout(() => {
      commit("setSuccess", "");
      commit("setError", "");
    }, 4000);
  },
  async resendVerifiedAtLink({ commit }, token) {
    commit("setLoading", true);
    let url = "/update-verify-at";

    try {
      const response = await axios.post(url, token);

      if (response.data.response_code === 200) {
        console.log(response);

        commit("setLoading", false);
        commit("setSuccess", response.data.backend_response);
        window.location.href = "http://127.0.0.1:8000/fr/shop";
      } else if (response.data.response_code === 403) {
        console.log(response);

        commit("setLoading", false);
        commit(
          "setError",
          response.data.backend_response
            ? response.data.backend_response
            : "something went wrong"
        );
      } else {
        commit("setLoading", false);
        commit(
          "setError",
          response.data.backend_response
            ? response.data.backend_response
            : "something went wrong"
        );
      }
    } catch (err) {
      commit("setLoading", false);
      commit(
        "setError",
        response.data.backend_response
          ? response.data.backend_response
          : "something went wrong"
      );
    }
    setTimeout(() => {
      commit("setSuccess", "");
      commit("setError", "");
    }, 4000);
  },
  async sendMailResetPassword({ commit }, credentials) {
    let lang = common.state.lang;
    let cred = { ...credentials, lang };
    commit("setLoading", true);
    let url = "/send-mail-reset-password";

    try {
      const response = await axios.post(url, cred);

      if (response.data.response_code === 200) {
        console.log(response);

        commit("setLoading", false);
        commit("setSuccess", response.data.backend_response);
        // window.location.href = "http://127.0.0.1:8000/fr/shop";
      } else if (response.data.response_code === 403) {
        console.log(response);

        commit("setLoading", false);
        commit(
          "setError",
          response.data.backend_response
            ? response.data.backend_response
            : "something went wrong"
        );
      } else {
        commit("setLoading", false);
        commit(
          "setError",
          response.data.backend_response
            ? response.data.backend_response
            : "something went wrong"
        );
      }
    } catch (err) {
      commit("setLoading", false);
      commit(
        "setError",
        response.data.backend_response
          ? response.data.backend_response
          : "something went wrong"
      );
    }
    setTimeout(() => {
      commit("setSuccess", "");
      commit("setError", "");
    }, 4000);
  },
  async updatePassword({ commit }, credentials) {
    let lang = common.state.lang;
    let cred = { ...credentials, lang };
    commit("setLoading", true);
    let url = "/update-password";

    try {
      const response = await axios.post(url, cred);

      if (response.data.response_code === 200) {
        console.log(response);

        commit("setLoading", false);
        commit("setSuccess", response.data.backend_response);
        // window.location.href = "http://127.0.0.1:8000/fr/shop";
      } else if (response.data.response_code === 403) {
        console.log(response);

        commit("setLoading", false);
        commit(
          "setError",
          response.data.backend_response
            ? response.data.backend_response
            : "something went wrong"
        );
      } else {
        commit("setLoading", false);
        commit(
          "setError",
          response.data.backend_response
            ? response.data.backend_response
            : "something went wrong"
        );
      }
    } catch (err) {
      commit("setLoading", false);
      commit(
        "setError",
        response.data.backend_response
          ? response.data.backend_response
          : "something went wrong"
      );
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
