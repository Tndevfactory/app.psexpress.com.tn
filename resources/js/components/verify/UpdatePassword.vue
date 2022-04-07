<template>
  <!--  -->

  <div
    class="row rounded-1 img-login shadow-sm"
    :class="classLanguage"
    :style="[styleLanguage, styleBackgroundImage]"
  >
    <div class="col col-md-6 d-none d-md-block"></div>
    <div class="col col-md-6 px-md-4 p-3 bg-white text-dark">
      <div class="d-flex justify-content-end align-items-start">
        <select
          class="me-3"
          name="language"
          id="language"
          style="border: none; outline: none; background: white"
          v-model="selectedLanguage"
          @change="changeLanguage"
        >
          <option value="fr">🇨🇵</option>
          <option value="ar">🇦🇪</option>
          <option value="en">🇬🇧</option>
        </select>
      </div>

      <div class="d-flex justify-content-center">
        <img
          :src="publicUrl + 'logo/newlogopsexpress.jpg'"
          alt="logo"
          class="logo"
        />
      </div>

      <form @submit.stop.prevent="onSubmit" class="row gx-3 px-md-3">
        <div class="col-md-12 pb-2">
          <span class="psexpress_title text-center d-block pb-3 text-uppercase">
            {{ $t("auth.psexpress") }}
          </span>

          <span class="form-title text-center d-block">
            <i class="fas fa-lock d-inline-block text-dark"></i>

            {{ $t("auth.reset_password_title") }}
          </span>
        </div>

        <div class="col-md-12 pb-3 position-relative">
          <div class="d-flex justify-content-between align-items-center">
            <label for="password" class="form-label">
              {{ $t("auth.password") }}</label
            >
          </div>

          <input
            :type="inputType"
            class="form-control"
            v-model="credentials.password"
            required
            autocomplete="off"
          />
          <i
            v-if="inputText"
            class="fa-solid fa-eye position-absolute"
            style="right: 2rem; top: 2.9rem; cursor: pointer"
            @click="handleInputText()"
          ></i>
          <i
            v-if="!inputText"
            class="fa-solid fa-eye-slash position-absolute"
            style="right: 2rem; top: 2.9rem; cursor: pointer"
            @click="handleInputText()"
          ></i>
          <div v-if="passwordError" class="error">{{ passwordError }}</div>
        </div>
        <div class="col-md-12 pb-3 position-relative">
          <div class="d-flex justify-content-between align-items-center">
            <label for="password" class="form-label">
              {{ $t("auth.password") }} confirmation</label
            >
          </div>

          <input
            :type="inputTypeConfirm"
            class="form-control"
            v-model="credentials.passwordConfirm"
            required
            autocomplete="off"
          />
          <i
            v-if="inputTextConfirm"
            class="fa-solid fa-eye position-absolute"
            style="right: 2rem; top: 2.9rem; cursor: pointer"
            @click="handleInputTextConfirm()"
          ></i>
          <i
            v-if="!inputTextConfirm"
            class="fa-solid fa-eye-slash position-absolute"
            style="right: 2rem; top: 2.9rem; cursor: pointer"
            @click="handleInputTextConfirm()"
          ></i>
          <div v-if="passwordError" class="error">{{ passwordError }}</div>
        </div>

        <div
          class="col-12 d-flex justify-content-between align-items-center pb-2"
        >
          <button type="submit" class="btn btn-primary">
            {{ $t("auth.reset_password") }}
          </button>
          <button
            type="submit"
            class="btn btn-primary"
            @click.stop.prevent="signin"
          >
            {{ $t("auth.sign_in") }}
          </button>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Forgot",

  components: {},

  data() {
    return {
      isModalVisible: false,
      credentials: {
        ResetVerifyToken: this.verifyToken,
        password: "",
        passwordConfirm: "",
        language: this.lang,
      },
      emailError: "",
      passwordError: "",
      inputText: false,
      inputTextConfirm: false,
      selectedLanguage: this.lang,
      url: window.axios.defaults.url,
      appEnv: window.axios.defaults.appEnv,
    };
  },

  props: ["verifyToken", "currency", "language", "productId"],

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
    inputType() {
      let type = this.inputText ? "text" : "password";
      return type;
    },
    inputTypeConfirm() {
      let type = this.inputTextConfirm ? "text" : "password";
      return type;
    },
    styleBackgroundImage() {
      return {
        "background-image":
          this.selectedLanguage === "ar"
            ? `url(${this.publicUrl}login-init/login-init.webp)`
            : `url(${this.publicUrl}login-init/login-init.webp)`,
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
    ...mapActions(["setLogin", "setLang", "updatePassword"]),

    showModal() {
      this.isModalVisible = true;
    },
    closeModal() {
      this.isModalVisible = false;
    },
    changeLanguage: function (e) {
      this.$i18n.locale = this.selectedLanguage;
      this.setLang(this.selectedLanguage);
      //   console.log(this.selectedLanguage);
      //   console.log(e);
    },
    alert(preset, heading, content) {
      this.$dtoast.pop({
        preset: preset,
        heading: heading,
        content: content,
      });
    },

    onSubmit(e) {
      //   let validCredentials = this.validate(this.credentials);
      //   console.log(validCredentials);
      this.updatePassword(this.credentials);
    },
    handleInputText() {
      this.inputText = !this.inputText;
    },
    handleInputTextConfirm() {
      this.inputTextConfirm = !this.inputTextConfirm;
    },
    signin() {
      window.location.href = "/";
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
    // console.log(this.url);
    // console.log(this.verifyToken);
    this.ResetVerifyToken = this.verifyToken;
    //console.log(this.ResetVerifyToken);
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
.error {
  color: crimson;
  font-size: calc(12px + 6 * ((100vw - 320px) / 1880));
}
</style>
