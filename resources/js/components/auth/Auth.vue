<template>
  <div>
    <Login
      v-if="isLogin"
      :language="lang"
      @forgot="passwordForm"
      @register="registerForm"
    />
    <Register v-if="isRegister" :language="lang" @login="loginForm" />
    <Forgot v-if="isPasswordForget" :language="lang" @login="loginForm" />
  </div>
</template>
<script>
import Modal from "./Modal.vue";
import Login from "./Login.vue";
import Register from "./Register.vue";
import Forgot from "./Forgot.vue";
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Auth",

  components: {
    Modal,
    Login,
    Register,
    Forgot,
  },

  data() {
    return {
      isLogin: true,
      isRegister: false,
      isPasswordForget: false,
    };
  },

  props: ["csrfToken", "currency", "language", "productId"],

  computed: {
    ...mapGetters([
      "getAuthCheck",
      "getBearerToken",
      "getUser",
      "loading",
      "success",
      "error",
      "lang",
    ]),
  },

  methods: {
    beforePageDestroyed: function (event) {
      // Vue.$cookies.set("app_closed", "88");
      // localStorage.removeItem("vuex");
      // console.log("beforePageDestroyed");
    },
    registerForm(eventRegister) {
      // console.log("receive emit registerForm");
      // console.log(eventRegister);
      this.isLogin = !eventRegister;
      this.isPasswordForget = !eventRegister;
      this.isRegister = eventRegister;
    },
    loginForm(eventLogin) {
      // console.log("receive emit login Form");
      // console.log(eventLogin);
      this.isLogin = eventLogin;
      this.isRegister = !eventLogin;
      this.isPasswordForget = !eventLogin;
    },
    passwordForm(event) {
      console.log("eventPasswordForget");
      console.log(event);
      this.isLogin = !event;
      this.isRegister = !event;
      this.isPasswordForget = event;
    },
    ...mapActions(["setLogin", "setLang"]),

    showModal() {
      this.isModalVisible = true;
    },
    closeModal() {
      this.isModalVisible = false;
    },

    alert(preset, heading, content) {
      this.$dtoast.pop({
        preset: preset,
        heading: heading,
        content: content,
      });
    },
  },

  created() {
    this.$i18n.locale = this.lang;
    this.setLang(this.lang);
    this.url = window.axios.defaults.url;
    this.appEnv = window.axios.defaults.appEnv;
    // console.log(this.appEnv);
    // console.log(this.url);
    window.addEventListener("beforeunload", this.beforePageDestroyed);

    // console.log(this.getUser);
  },
};
</script>
