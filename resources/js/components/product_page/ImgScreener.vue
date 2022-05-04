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
            :src="publicUrl + p.photo1"
            @click.stop.prevent="changePhoto"
            alt="..."
          />
        </a>
      </div>
      <div class="col">
        <a href="#">
          <img
            class="img-fluid d-block screen-2"
            :src="publicUrl + p.photo2"
            @click.stop.prevent="changePhoto"
            alt="..."
          />
        </a>
      </div>
      <div class="col">
        <a href="#">
          <img
            class="img-fluid d-block screen-3"
            :src="publicUrl + p.photo3"
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
      p: "",
    };
  },

  props: ["csrfToken", "currency", "language", "product"],

  computed: {
    ...mapGetters(["getUser", "loading", "success", "error", "lang"]),
    publicUrl() {
      let publicMedia = this.appEnv === "local" ? "" : "public/";
      let publicPath = this.url + publicMedia;
      return publicPath;
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
    // console.log(this.language);
    this.url = window.axios.defaults.url;
    this.appEnv = window.axios.defaults.appEnv;
    // console.log(this.appEnv);
    this.p = JSON.parse(this.product);
    // console.log(this.p.photo1);
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
