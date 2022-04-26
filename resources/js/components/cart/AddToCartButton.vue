<template>
  <b-button
    v-b-toggle.sidebar-backdrop
    class="btn btn-primary d-block"
    @click="addToCart(productId)"
  >
    <span class="d-none d-md-inline-block nowrap">
      {{ $t("cart.Add_to_cart") }} {{ lang }}</span
    >
    <span class="d-inline-block d-md-none"
      ><i class="fa-solid fa-cart-shopping"></i
    ></span>
  </b-button>
</template>

<script>
import { mapGetters, mapActions } from "vuex";

export default {
  name: "setCart",

  props: ["csrfToken", "currency", "language", "productId"],

  computed: mapGetters(["getCart", "loading", "success", "error", "lang"]),

  methods: {
    ...mapActions(["setCart", "resetMsg", "setLang"]),
    addToCart(productId) {
      this.setCart(productId);
      this.setLang(this.language);
    },
  },

  created() {
    this.$i18n.locale = this.language;
    this.$store.state.lang = this.language;
    this.resetMsg();
    this.setLang(this.language);

    // console.log(this.$store.state.lang);
  },
};
</script>
