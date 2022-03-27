<template>
  <div>
    <Login v-if="isLogin" :language="language" @register="registerForm" />
    <Register v-if="isRegister" :language="language" @login="loginForm" />
  </div>
</template>
<script>
import Modal from "./Modal.vue";
import Login from "./Login.vue";
import Register from "./Register.vue";
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Auth",

  components: {
    Modal,
    Login,
    Register,
  },

  data() {
    return {
      isLogin: true,
      isRegister: false,
    };
  },

  props: ["csrfToken", "currency", "language", "productId"],

  computed: {
    ...mapGetters([
      "getConnectionStatus",
      "getUser",
      "loading",
      "success",
      "error",
      "lang",
    ]),
    classLanguage() {
      return {
        // active: this.isActive,
        // "bg-primary": this.language === "ar" ? true : false,
      };
    },
    styleLanguage() {
      return {
        direction: this.selectedLanguage === "ar" ? "rtl" : "ltr",
      };
    },
    publicUrl() {
      let publicMedia = this.appEnv === "local" ? "media/" : "public/media/";
      let publicPath = this.url + publicMedia;
      return publicPath;
    },
  },

  methods: {
    registerForm(eventRegister) {
      // console.log("receive emit registerForm");
      // console.log(eventRegister);
      this.isLogin = !eventRegister;
      this.isRegister = eventRegister;
    },
    loginForm(eventLogin) {
      // console.log("receive emit login Form");
      // console.log(eventLogin);
      this.isLogin = eventLogin;
      this.isRegister = !eventLogin;
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
    this.$i18n.locale = this.language;
    this.selectedLanguage = this.language;
    this.setLang(this.selectedLanguage);
    this.url = window.axios.defaults.url;
    this.appEnv = window.axios.defaults.appEnv;
    // console.log(this.appEnv);
    // console.log(this.url);
  },
};
</script>

<style scoped>
.logo {
  height: 4rem;
  width: 4rem;
  display: inline-block;
  margin: 1px auto;
}
</style>
