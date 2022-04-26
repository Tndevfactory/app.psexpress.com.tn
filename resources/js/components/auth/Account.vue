<template>
  <div class="dropdown">
    <a
      class="text-decoration-none"
      href="#"
      type="button"
      id="dropdownMenuButton1"
      data-bs-toggle="dropdown"
      aria-expanded="false"
    >
      <i class="mdi mdi-account-circle text-dark fs-4"></i>
    </a>

    <ul
      class="dropdown-menu"
      aria-labelledby="dropdownMenuButton1"
      style="min-width: 2rem"
    >
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><a class="dropdown-item" href="#" @click="logout">Logout</a></li>
    </ul>
  </div>
</template>
<script>
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Account",

  components: {},

  data() {
    return {
      lab: false,
    };
  },

  props: ["csrfToken", "currency", "language", "productId"],

  computed: {
    ...mapGetters(["getUser", "loading", "success", "error", "lang"]),
  },

  methods: {
    ...mapActions(["setLogin", "setLang", "logout"]),
  },

  created() {
    this.$i18n.locale = this.lang;
    this.selectedLanguage = this.lang;
    this.setLang(this.selectedLanguage);
    // console.log(this.language);
    this.url = window.axios.defaults.url;
    this.appEnv = window.axios.defaults.appEnv;
    // console.log(this.appEnv);
    // console.log(this.url);
  },
};
</script>

<style lang="scss" scoped>
div {
  p {
    background-color: red;
  }
}
</style>
