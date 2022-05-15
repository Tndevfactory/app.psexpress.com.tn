<template>
  <div class="dropdown">
    <div class="teasing1 my-4 ratio ratio-4x3">
      <img
        class="img-fluid d-block large-screen"
        :src="publicUrl + p.photo1"
        ref="screen"
        alt="..."
      />
    </div>

    <div class="d-flex justify-content-between gap-1 mt-3">
      <div class="col">
        <a href="#">
          <img
            class="img-fluid d-block screen-1"
            :src="publicUrl + photo1"
            @click.stop.prevent="changePhoto"
            alt="..."
          />
        </a>
      </div>
      <div class="col">
        <a href="#">
          <img
            class="img-fluid d-block screen-2"
            :src="publicUrl + photo2"
            @click.stop.prevent="changePhoto"
            alt="..."
          />
        </a>
      </div>
      <div class="col">
        <a href="#">
          <img
            class="img-fluid d-block screen-3"
            :src="publicUrl + photo3"
            @click.stop.prevent="changePhoto"
            alt="..."
          />
        </a>
      </div>
    </div>
  </div>
</template>
<script>
import { mapGetters, mapActions } from "vuex";

export default {
  name: "ImgScreener",

  components: {},

  data() {
    return {
      lab: false,
      url: window.axios.defaults.url,
      appEnv: window.axios.defaults.appEnv,
      photo1: "",
      photo2: "",
      photo3: "",
      p: "",
    };
  },

  props: ["csrfToken", "currency", "language", "product"],

  computed: {
    ...mapGetters(["getUser", "loading", "success", "error", "lang"]),

    publicUrl() {
      return this.url;
    },
  },

  methods: {
    ...mapActions(["setLogin", "setLang", "logout"]),
    changePhoto(e) {
      // console.log(e.target.src);
      // console.log(this.$refs.screen.src);
      this.$refs.screen.src = e.target.src;
    },
  },

  created() {
    this.$i18n.locale = this.lang;
    this.selectedLanguage = this.lang;
    this.setLang(this.selectedLanguage);

    this.url = window.axios.defaults.url;
    this.appEnv = window.axios.defaults.appEnv;

    this.p = JSON.parse(this.product);

    this.photo1 =
      this.p.photo1 === "" ? "media/products/void.webp" : this.p.photo1;
    this.photo2 =
      this.p.photo2 === "" ? "media/products/void.webp" : this.p.photo2;
    this.photo3 =
      this.p.photo3 === "" ? "media/products/void.webp" : this.p.photo3;
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
