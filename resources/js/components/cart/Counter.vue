<template>
  <b-button
    size="sm"
    v-b-toggle.sidebar-backdrop
    variant="transparent"
    class="d-inline-block counter_total mb-1"
  >
    <span class="counter_link text-decoration-none mx-2">
      <i class="mdi mdi-cart text-dark fs-4"></i>
      <div
        v-if="getCartCounter !== '' && getCartCounter !== 0"
        class="counter_count"
        :style="styled"
      >
        {{ getCartCounter === 0 ? "" : getCartCounter }}
      </div>
    </span>
  </b-button>
</template>

<script>
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Counter",

  components: {},

  data() {
    return {
      lab: false,
    };
  },

  props: ["csrfToken", "currency", "language", "productId"],

  computed: {
    ...mapGetters([
      "getCart",
      "getCompta",
      "getCartCounter",
      "getCartTotal",
      "getUser",
      "loading",
      "success",
      "error",
      "lang",
    ]),
    styled() {
      return {
        left: this.lang === "ar" ? "0rem" : "1rem",
      };
    },
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
    //console.log(this.lang);
  },
};
</script>

<style lang="scss" scoped>
.counter_link {
  position: relative;
  color: #000;
  padding: 0 !important;
  bottom: 2px;
  .counter_count {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    background-color: red;
    color: white;
    font-weight: 500;
    padding: 0.2rem;
    width: 1.5rem;
    height: 1.5rem;
    border-radius: 50%;
    top: -1.3rem;
    left: 1rem;
    font-size: 0.8rem;
    text-align: center;
  }
  .counter_total {
    display: inline-block;
    font-size: 0.8rem;
  }
}
</style>
