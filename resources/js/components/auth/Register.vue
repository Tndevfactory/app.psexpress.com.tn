<template>
  <div
    class="row shadow-sm rounded-3 img-login"
    :class="classLanguage"
    :style="[styleLanguage, styleBackgroundImage]"
  >
    <!-- img-login -->
    <div class="col col-md-6 d-none d-md-block"></div>
    <div class="col col-md-6 px-md-4 text-dark bg-white">
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
        <img :src="publicUrl + 'logo/logo-icon.png'" alt="logo" class="logo" />
      </div>

      <form @submit.stop.prevent="onSubmit" class="row">
        <div class="col-md-12 pb-3">
          <span class="psexpress_title text-center d-block pb-3 text-uppercase">
            {{ $t("auth.psexpress") }}
          </span>
          <span class="form-title text-center d-block">
            <i class="fas fa-lock d-inline-block text-dark"></i>
            {{ $t("auth.sign_up") }}
          </span>
        </div>
        <div class="col-md-12 pb-2">
          <div class="row">
            <div class="col-12 col-md-6">
              <label for="fname" class="form-label">
                {{ $t("auth.shop_name") }}
              </label>
              <input
                type="text"
                class="form-control"
                v-model="credentials.fname"
                required
                autocomplete="on"
                autofocus
              />
            </div>
            <div class="col-12 col-md-6">
              <label for="lname" class="form-label">
                {{ $t("auth.manager_name") }}
              </label>
              <input
                type="text"
                class="form-control"
                v-model="credentials.lname"
                required
                autocomplete="on"
              />
            </div>
          </div>
        </div>
        <div class="col-md-12 pb-2">
          <div class="row">
            <div class="col-12 col-md-6">
              <label for="email" class="form-label">
                {{ $t("auth.email") }}
              </label>
              <input
                type="email"
                class="form-control"
                v-model="credentials.email"
                required
                autocomplete="on"
              />
            </div>
            <div class="col-12 col-md-6">
              <label for="phone" class="form-label">
                {{ $t("auth.phone") }}
              </label>
              <input
                type="text"
                class="form-control"
                v-model="credentials.phone"
                required
                autocomplete="on"
              />
            </div>
          </div>
        </div>

        <div class="col-md-12 pb-3">
          <div class="d-flex justify-content-start align-items-center">
            <label for="password" class="form-label">
              {{ $t("auth.password") }}</label
            >
          </div>

          <input
            type="password"
            class="form-control"
            v-model="credentials.password"
            required
            autocomplete="off"
          />
        </div>
        <div class="col-md-12 pb-2">
          <label for="address" class="form-label">
            {{ $t("auth.address") }}
          </label>
          <input
            type="text"
            class="form-control"
            v-model="credentials.address"
            required
            autocomplete="on"
          />
        </div>

        <div
          class="col-12 d-flex justify-content-between align-items-center pb-2"
        >
          <button type="submit" class="btn btn-primary nowrap">
            {{ $t("auth.sign_up") }}
          </button>
          <a
            href="#"
            @click.stop.prevent="loginForm"
            class="text-decoration-none text-primary nowrap"
            style="font-size: 0.9rem"
          >
            {{ $t("auth.have_account_please_sign_in") }}</a
          >
        </div>

        <div class="text-center d-block" style="font-size: 0.9rem">
          {{ $t("auth.or_Sign_up_with") }}
        </div>
        <hr class="w-25 mx-auto" />
        <div
          class="d-flex flex-column align-items-center justify-content-center pb-2"
        >
          <button class="btn btn-primary">
            <i class="fa-brands fa-facebook-square me-2"></i>
            {{ $t("auth.facebook") }}
          </button>
        </div>
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
  name: "Register",

  components: {
    Modal,
  },

  data() {
    return {
      isModalVisible: false,
      credentials: {
        email: "",
        fname: "",
        lname: "",
        phone: "",
        address: "",
        password: "",
      },
      emailError: false,
      passwordError: false,
      selectedLanguage: "fr",
      url: window.axios.defaults.url,
      appEnv: window.axios.defaults.appEnv,
    };
  },

  props: ["csrfToken", "currency", "language", "productId"],

  computed: {
    ...mapGetters([
      "getConnectionStatus",
      "getUser",
      "loading",
      "success",
      "error",
      "lang",
    ]),
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
            ? `url(${this.publicUrl}login-init/login-init.webp)`
            : `url(${this.publicUrl}login-init/login-init.webp)`,
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
          this.language === "ar"
            ? "ar mauvais format"
            : this.language === "fr"
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
          this.language === "ar"
            ? "ar min 8 letters, with at least a symbol, upper and lower case letters and a number"
            : this.language === "fr"
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

    loginForm() {
      // console.log("Emit register Form");
      this.$emit("login", true);
      //   console.log(this.$emit("register", '1'));
    },
    onSubmit(e) {
      //   let validCredentials = this.validate(this.credentials);
      //   console.log(validCredentials);
      this.setLogin(this.credentials);
    },
  },

  created() {
    this.$i18n.locale = this.lang;
    this.selectedLanguage = this.lang;
    this.setLang(this.selectedLanguage);
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
  /* height: 40rem; */
  background-repeat: no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  /* background-position: -180px -723px; */
  background-position: center;

  /* french view */
  /* background-position: -381px 39% */
  /* arabic view */
  /* background-position: 50px 39%; */
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
@media only screen and (max-width: 600px) {
  .img-login {
    background: white;
  }
}
</style>
