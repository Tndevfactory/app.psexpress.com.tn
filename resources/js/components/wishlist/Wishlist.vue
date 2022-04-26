<template>
  <a class="text-decoration-none" href="#">
    <i class="mdi mdi-heart text-dark fs-4"></i>
  </a>
</template>
<script>
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Wishlist",

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
    ...mapActions(["setLogin", "setLang"]),
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
