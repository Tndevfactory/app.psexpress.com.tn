<template>
  <b-button
    v-b-toggle.sidebar-backdrop
    class="add_to_cart_button"
    @click="addToCart(productId)"
    title="add to cart"
    variant="outline-success"
    block
  >
    <!-- <span class="add_to_cart_button_text d-none d-md-inline-block nowrap">
      {{ $t("cart.Add_to_cart") }} {{ lang }}</span> -->
    {{ large ? $t("cart.Add_to_cart") : "" }}
    <i class="mdi mdi-cart-plus"></i>
  </b-button>
</template>

<script>
import { mapGetters, mapActions } from "vuex";

export default {
  name: "setCart",

  props: ["csrfToken", "currency", "language", "productId", "large"],

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
    console.log(this.large);
  },
};
</script>

<style lang="scss" scoped>
.add_to_cart_button {
  max-width: 14rem;
  .add_to_cart_button_text {
    font-size: 0.8rem;
  }
}
</style>
