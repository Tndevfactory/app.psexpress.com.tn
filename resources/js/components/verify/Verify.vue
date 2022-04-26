<template>
  <!--  -->

  <div
    class="row rounded-1 img-login shadow-sm"
    :class="classLanguage"
    :style="[styleLanguage, styleBackgroundImage]"
  >
    <div class="col col-md-6 d-none d-md-block"></div>
    <div class="col col-md-6 px-md-4 p-3 bg-white text-dark">
      <div class="d-flex justify-content-center">
        <img
          :src="publicUrl + 'logo/newlogopsexpress.jpg'"
          alt="logo"
          class="logo"
        />
      </div>

      <form @submit.stop.prevent="submit" class="row gx-3 px-md-3">
        <div class="col-md-12 mb-2">
          <span class="psexpress_title text-center d-block pb-3 text-uppercase">
            {{ $t("auth.psexpress") }}
          </span>
          <span class="form-title text-center d-block">
            <h3>Account Activation</h3>
            <h4>{{ verifyToken }}</h4>
          </span>
        </div>
        <div class="col-md-12 mb-3">
          <span class="d-inline-block">
            Afin de garantir un service excellent, nous vous prions de verifier
            votre boite email et de clicker sur le lien d'activation du compte
          </span>
          <span class="mt-3 d-inline-block">
            <i icon="bell-fill" class="mdi mdi-information-variant me-1"></i>:
            Parfois les mails de verification atterissent dans le dossier,
            n'oublie pas de verifier le
            <span class="fw-bold">dossier spam de votre mesagerie</span>
          </span>
          <span class="mt-3 d-inline-block">
            le lien d'activation expire au bout de 5mn, vous pouvez cliquer sur
            le bouton de renvoi de lien d'activation ci-dessous
          </span>
        </div>

        <div class="col-12 pb-2 d-grid">
          <button type="submit" class="btn btn-primary d-block">
            resend verification link
            <i icon="bell-fill" class="mdi mdi-information-variant ms-1"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Verify",

  components: {},

  data() {
    return {
      credentials: {
        email: "",
        password: "",
        language: this.lang,
      },
      emailError: false,
      passwordError: false,
      selectedLanguage: this.lang,
      url: window.axios.defaults.url,
      appEnv: window.axios.defaults.appEnv,
    };
  },

  props: ["csrfToken", "language", "verifyToken"],

  computed: {
    ...mapGetters(["getUser", "loading", "success", "error", "lang"]),
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
    styleBackgroundImage() {
      return {
        "background-image":
          this.selectedLanguage === "ar"
            ? `url(${this.publicUrl}login-init/sec.webp)`
            : `url(${this.publicUrl}login-init/sec.webp)`,
        // "box-shadow": " 1px 1px 8px rgba(0,0,0,0.5)",
      };
    },
    publicUrl() {
      let publicMedia = this.appEnv === "local" ? "media/" : "public/media/";
      let publicPath = this.url + publicMedia;
      return publicPath;
    },
  },

  methods: {
    ...mapActions(["updVerifiedAt", "setLang", "resetMsg", "resendVerifToken"]),

    changeLanguage: function (e) {
      this.$i18n.locale = this.selectedLanguage;
      this.setLang(this.selectedLanguage);
      //   console.log(this.selectedLanguage);
      //   console.log(e);
    },
    submit() {
      this.resendVerifToken();
    },
  },

  created() {
    // console.log(this.appEnv);
    // console.log(this.url);
    console.log(this.verifyToken);
    if (this.verifyToken) {
      this.$root.$store.state.auth.verifTokenPk = this.verifyToken;
      this.updVerifiedAt(this.verifyToken);
    }
    // console.log((this.$root.$store.state.auth.verifTokenPk = this.verifyToken));
    this.resetMsg();
  },
};
</script>

<style scoped>
.img-login {
  /* background-image: url("https://images.unsplash.com/photo-1593344484962-796055d4a3a4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2030&q=80"); */
  /* width: 100%; */

  /* height: 100%; */
  background-repeat: no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  /* background-position: -441px -610px; */
  background-position: center;
}
.logo {
  height: 4rem;
  width: 4rem;
  display: inline-block;
  margin: 1px auto;
}

.psexpress_title {
  background: RGBA(243, 112, 33, 1);
  background: linear-gradient(
    198deg,
    rgba(243, 112, 33, 1) 0%,
    rgba(243, 112, 33, 1) 14%,
    rgba(243, 112, 33, 1) 32%,
    rgb(255, 98, 1) 51%,
    rgba(243, 112, 33, 1) 71%,
    rgba(243, 112, 33, 1) 85%
  );
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  color: transparent;
  text-shadow: rgba(61, 61, 61, 0.1) 0px 3px 3px;
  font-weight: 800;
  letter-spacing: 0.61px;
  font-size: calc(17px + 6 * ((100vw - 320px) / 1880));
}
.form-title {
  font-size: calc(15px + 6 * ((100vw - 320px) / 1880));
}
</style>
