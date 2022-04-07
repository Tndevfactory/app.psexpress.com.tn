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

            {{ $t("auth.sign_in") }}
          </span>
        </div>
        <div class="col-md-12 pb-2">
          <label for="email" class="form-label">
            {{ $t("auth.email") }}
          </label>
          <input
            type="email"
            class="form-control"
            v-model="credentials.email"
            required
            autocomplete="on"
            autofocus
          />
          <div v-if="emailError" class="error">{{ emailError }}</div>
        </div>

        <div class="col-md-12 pb-3 position-relative">
          <div class="d-flex justify-content-between align-items-center">
            <label for="password" class="form-label">
              {{ $t("auth.password") }}</label
            >
            <a
              @click.stop.prevent="passwordForm"
              href="#"
              class="text-decoration-none text-primary"
              style="font-size: calc(12px + 6 * ((100vw - 320px) / 1880))"
            >
              {{ $t("auth.forget_password") }}
            </a>
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
            style="top: 2.9rem; cursor: pointer"
            :style="styleTogglePassword"
            @click="handleInputText()"
          ></i>
          <i
            v-if="!inputText"
            class="fa-solid fa-eye-slash position-absolute"
            style="top: 2.9rem; cursor: pointer"
            :style="styleTogglePassword"
            @click="handleInputText()"
          ></i>
          <div v-if="passwordError" class="error">{{ passwordError }}</div>
        </div>

        <div
          class="col-12 d-flex justify-content-between align-items-center pb-4"
        >
          <button
            type="submit"
            class="btn btn-primary"
            style="font-size: calc(13px + 6 * ((100vw - 320px) / 1880))"
          >
            {{ $t("auth.sign_in") }}
          </button>

          <a
            href="#"
            @click.stop.prevent="registerForm"
            class="text-decoration-none text-primary nowrap"
            style="font-size: calc(12px + 6 * ((100vw - 320px) / 1880))"
          >
            {{ $t("auth.no_account_please_sign_up") }}</a
          >
        </div>

        <!-- <div class="text-center d-block" style="font-size: 0.9rem">
          {{ $t("auth.or_Sign_in_with") }}
        </div>
        <hr class="w-25 mx-auto" />
        <div
          class="d-flex flex-column align-items-center justify-content-center pb-2"
        >
          <button
            class="btn btn-primary"
            style="font-size: calc(13px + 6 * ((100vw - 320px) / 1880))"
          >
            <i class="fa-brands fa-facebook-square me-2"></i>

            {{ $t("auth.facebook") }}
          </button>
        </div> -->
      </form>
    </div>
  </div>

  <!-- <div id="app">
      <button type="button" class="btn" @click="showModal">Open Modal!</button>
      <Modal v-show="isModalVisible" @close="closeModal">
        <template v-slot:header> This is a new modal header. </template>
        <template v-slot:body> This is a new modal body. </template>
        <template v-slot:footer> This is a new modal footer. </template>
      </Modal>
    </div> -->
</template>
<script>
import Modal from "./Modal.vue";
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Login",

  components: {
    Modal,
  },

  data() {
    return {
      isModalVisible: false,
      credentials: {
        email: "",
        password: "",
        language: this.lang,
      },
      emailError: "",
      passwordError: "",
      inputText: false,
      selectedLanguage: this.lang,
      url: window.axios.defaults.url,
      appEnv: window.axios.defaults.appEnv,
    };
  },

  props: ["csrfToken", "currency", "language", "productId"],

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

    styleTogglePassword() {
      let pos = this.selectedLanguage === "ar" ? "left: 2rem" : "right: 2rem";
      return pos;
    },
    inputType() {
      let type = this.inputText ? "text" : "password";
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
    ...mapActions(["setLogin", "setLang"]),

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
    validate(credentials) {
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(credentials.email)) {
        let content =
          this.lang === "ar"
            ? "ar mauvais format"
            : this.lang === "fr"
            ? "fr mauvais format"
            : "bad email format";
        this.emailError = true;
        this.alert("fail", "errors", content);
      }

      if (
        !/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/.test(
          credentials.password
        )
      ) {
        let content =
          this.lang === "ar"
            ? "ar min 8 letters, with at least a symbol, upper and lower case letters and a number"
            : this.lang === "fr"
            ? "fr min 8 letters, with at least a symbol, upper and lower case letters and a number"
            : "en  min 8 letters, with at least a symbol, upper and lower case letters and a number";
        this.passwordError = true;
        this.alert("fail", "errors", content);
      }

      if (!this.emailError && !this.passwordError) {
        return true;
      } else {
        console.warn("Invalid submit event payload!");
        return false;
      }
    },
    registerForm() {
      //   console.log("Emit register Form");
      this.$emit("register", true);

      //   console.log(this.$emit("register", '1'));
    },
    passwordForm() {
      console.log("Emit forgot Form");

      this.$emit("forgot", true);
      //   console.log(this.$emit("register", '1'));
    },
    onSubmit(e) {
      //   let validCredentials = this.validate(this.credentials);
      //   console.log(validCredentials);
      this.setLogin(this.credentials);
    },
    handleInputText() {
      this.inputText = !this.inputText;
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
